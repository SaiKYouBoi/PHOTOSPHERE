<?php

require_once __DIR__ . '/../../config/Database.php';


class PhotoRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function saveWithTags($post, $tags)
    {
        try {

            $this->db->beginTransaction();

            $query = "INSERT INTO posts (user_id,title,description,file_path,file_size,mime_type,dimensions,status,view_count
                ) VALUES (:user_id,:title,:description,:file_path,:file_size,:mime_type,:dimensions,:status,:view_count)";

            $stmt = $this->db->prepare($query);

            $params = [
                ':user_id' => $post['user_id'],
                ':title' => $post['title'],
                ':description' => $post['description'],
                ':file_path' => $post['file_path'],
                ':file_size' => $post['file_size'],
                ':mime_type' => $post['mime_type'],
                ':dimensions' => $post['dimensions'],
                ':status' => $post['status'],
                ':view_count' => $post['view_count'],
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
                    ':tag_id'   => $tagId
                ]);

            }

            $this->db->commit();

        } catch (Exception $e) {
            $this->db->rollBack();
            throw $e;

        }

    }

}

