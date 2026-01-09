<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Models/Post.php';

class PhotoRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function find(int $id)
    {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = :id AND deleted_at IS NULL");
        $stmt->execute([':id' => $id]);
        $post = $stmt->fetch();

        if (!$post) {
            throw new Exception("Post not found");
        }

        $tagStmt = $this->db->prepare(
            "SELECT t.name FROM tags t INNER JOIN post_tags pt ON t.id = pt.tag_id WHERE pt.post_id = :post_id"
        );
        $tagStmt->execute([':post_id' => $id]);
        $tags = $tagStmt->fetchAll();

        return new Post(
            id: (int) $post['id'],
            userId: (int) $post['user_id'],
            title: $post['title'],
            description: $post['description'],
            filePath: $post['file_path'],
            fileSize: (int) $post['file_size'],
            mimeType: $post['mime_type'],
            dimensions: $post['dimensions'],
            status: $post['status'],
            publishedAt: $post['published_at'] ? new DateTime($post['published_at']) : null,
            viewCount: (int) $post['view_count'],
            likeCount: (int) $post['like_count'],
            createdAt: new DateTime($post['created_at']),
            updatedAt: new DateTime($post['updated_at']),
            tags: $tags
        );
    }

    public function create($post, $tags)
    {
        try {

            $this->db->beginTransaction();

            $query = "INSERT INTO posts (user_id,title,description,file_path,file_size,mime_type,dimensions
                ) VALUES (:user_id,:title,:description,:file_path,:file_size,:mime_type,:dimensions)";

            $stmt = $this->db->prepare($query);

            $params = [
                ':user_id' => $post['user_id'],
                ':title' => $post['title'],
                ':description' => $post['description'],
                ':file_path' => $post['file_path'],
                ':file_size' => $post['file_size'],
                ':mime_type' => $post['mime_type'],
                ':dimensions' => $post['dimensions'],
            ];

            $stmt->execute($params);

            $postid = (int) $this->db->lastInsertId();

            $selecttagstmt = $this->db->prepare(
                query: "SELECT id FROM tags WHERE name = :name"
            );

            $inserttagstmt = $this->db->prepare(
                "INSERT INTO tags (name) VALUES (:name)"
            );

            $twotablestmt = $this->db->prepare(
                "INSERT INTO post_tags (post_id, tag_id) VALUES (:post_id, :tag_id)"
            );


            foreach ($tags as $tag) {
                $selecttagstmt->execute([':name' => $tag]);
                $tagId = $selecttagstmt->fetchColumn();

                if (!$tagId) {
                    $inserttagstmt->execute([':name' => $tag]);
                    $tagId = (int) $this->db->lastInsertId();
                }

                $twotablestmt->execute([
                    ':post_id' => $postid,
                    ':tag_id' => $tagId
                ]);

            }

            $this->db->commit();

        } catch (Exception $e) {
            $this->db->rollBack();
            throw $e;

        }

    }

    public function getAllPosts(): array
    {

        $stmt = $this->db->prepare("SELECT * FROM posts ORDER BY id DESC");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $photos = [];

        foreach ($rows as $row) {

            $tagStmt = $this->db->prepare(
                "SELECT t.name
             FROM tags t
             INNER JOIN post_tags pt ON t.id = pt.tag_id
             WHERE pt.post_id = :post_id"
            );
            $tagStmt->execute([':post_id' => $row['id']]);
            $tags = $tagStmt->fetchAll(PDO::FETCH_COLUMN);


            $publishedAt = $row['published_at'] ? new DateTime($row['published_at']) : null;
            $createdAt = new DateTime($row['created_at']);
            $updatedAt = new DateTime($row['updated_at']);


            $photo = new Post(
                id: (int) $row['id'],
                userId: (int) $row['user_id'],
                title: $row['title'],
                description: $row['description'],
                filePath: $row['file_path'],
                fileSize: (int) $row['file_size'],
                mimeType: $row['mime_type'],
                dimensions: $row['dimensions'],
                status: $row['status'],
                publishedAt: $publishedAt,
                viewCount: (int) $row['view_count'],
                likeCount: (int) $row['like_count'],
                createdAt: $createdAt,
                updatedAt: $updatedAt,
                tags: $tags
            );

            $photos[] = $photo;
        }

        return $photos;
    }

    public function update(int $id)
    {
        
    }

}
