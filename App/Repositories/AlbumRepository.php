<?php
require_once __DIR__ . '/../../config/Database.php';

class AlbumRepository
{

    private PDO $db;


    public function __construct($db)
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function createAlbum(int $userId, string $title, string $description, bool $isPrivate)
    {

        $checktile = "SELECT * FROM albums WHERE user_id = :user_id AND name = :title";

        $checkstmt = $this->db->prepare($checktile);

        $checkstmt->execute([':user_id' => $userId, ':title' => $title]);

        if ($checkstmt->fetch()) {
            throw new Exception("album name is already there");
        }

        if ($isPrivate) {
            $userRole = $this->getUserRole($userId);
            if ($userRole !== 'ProUser' && $userRole !== 'AdminUser') {
                throw new Exception("only Prouser an aboce can create private albums");
            }
        }

        $query = " INSERT INTO albums (user_id, name, description, is_private)
                    VALUES (:user_id, :name, :description, :is_private)";

        $stmt = $this->db->prepare($query);

        $stmt->execute([':user_id'=> $userId,
                                ':name'=> $title,
                                ':description'=> $description,
                                ':is_private'=> $isPrivate
                                ]);

        return (int) $this->db->lastInsertId();

    }

    private function getUserRole(int $userId): string
    {
        $query = "SELECT role FROM users WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute([':id' => $userId]);
        $user = $stmt->fetch();

        return $user['role'] ?? 'basic';
    }

    public function addPhotoToAlbum(int $albumId, int $photoId, int $userId){

    
    $verifyQuery = "SELECT 
                        (SELECT user_id FROM albums WHERE id = :album_id) as album_owner,
                        (SELECT user_id FROM posts WHERE id = :photo_id) as photo_owner";
    
    $verifyStmt = $this->db->prepare($verifyQuery);
    $verifyStmt->execute([
        ':album_id' => $albumId,
        ':photo_id' => $photoId
    ]);

    $verification = $verifyStmt->fetch();
    

    if ($verification['album_owner'] === null) {
        throw new Exception("Album not found");
    }
    
    if ($verification['photo_owner'] === null) {
        throw new Exception("Photo not found");
    }
    
    if ($verification['album_owner'] != $userId) {
        throw new Exception("You don't own this album");
    }
    
    if ($verification['photo_owner'] != $userId) {
        throw new Exception("You don't own this photo");
    }
    
    $duplicateQuery = "SELECT id FROM album_photos 
                       WHERE album_id = :album_id AND photo_id = :photo_id";
    $duplicateStmt = $this->db->prepare($duplicateQuery);
    $duplicateStmt->execute([
        ':album_id' => $albumId,
        ':photo_id' => $photoId
    ]);
    
    if ($duplicateStmt->fetch()) {
        throw new Exception("Photo is already in this album");
    }
    
    $countQuery = "SELECT COUNT(*) as photo_count FROM album_photos 
                   WHERE album_id = :album_id";
    $countStmt = $this->db->prepare($countQuery);
    $countStmt->execute([':album_id' => $albumId]);
    $count = $countStmt->fetch();
    
    if ($count['photo_count'] >= 100) {
        throw new Exception("Album has reached maximum limit of 100 photos");
    }
    
    $insertQuery = "INSERT INTO album_photos (album_id, photo_id, added_at) 
                    VALUES (:album_id, :photo_id, NOW())";
    $insertStmt = $this->db->prepare($insertQuery);
    
    return $insertStmt->execute([
        ':album_id' => $albumId,
        ':photo_id' => $photoId
    ]);
}

}
