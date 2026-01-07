<?php

require_once __DIR__ . '/../Models/User.php';
require_once __DIR__ . '/Repository.php';
require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Factory/Factory.php';


class UserRepository implements Repository
{
    private PDO $db;

public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function find(int $id): ?User
    {
        $query = "SELECT * FROM users WHERE id = :id AND deleted_at IS NULL";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $userData ? UserFactory::create($userData) : null;
    }

    public function findByEmail(string $email): ?User
    {
        $query = "SELECT * FROM users WHERE email = :email AND deleted_at IS NULL";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $userData ? UserFactory::create($userData) : null;
    }

    public function emailExists(string $email): bool
{
    $stmt = $this->db->prepare(
        "SELECT 1 FROM users WHERE email = :email AND deleted_at IS NULL LIMIT 1"
    );
    $stmt->execute(['email' => $email]);

    return (bool) $stmt->fetchColumn();
}


    public function findByUsername(string $username): ?User
    {
        $query = "SELECT * FROM users WHERE username = :username AND deleted_at IS NULL";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $userData ? UserFactory::create($userData) : null;
    }

    public function create(array $data): bool
    {
        try {
            $query = "INSERT INTO users (
                username, email, password_hash, bio
            ) VALUES (
                :username, :email, :password_hash,:bio
            )";

            $stmt = $this->db->prepare($query);
            
            $passwordHash = password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 12]);
            
            
            $params = [
                ':username' => $data['username'],
                ':email' => $data['email'],
                ':password_hash' => $passwordHash,
                ':bio' => $data['bio'] ?? null
            ];

            return $stmt->execute($params);

            return $stmt->execute();
        } catch (Exception $e) {
            error_log("UserRepository create error: " . $e->getMessage());
            return false;
        }
    }
}