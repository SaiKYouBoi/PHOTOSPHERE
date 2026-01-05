<?php
require_once __DIR__ . "/config/Database.php";

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
                username, email, password_hash, role, bio, 
                profile_picture, monthly_uploads, subscription_start, 
                subscription_end, moderator_level, is_super_admin
            ) VALUES (
                :username, :email, :password_hash, :role, :bio,
                :profile_picture, :monthly_uploads, :subscription_start,
                :subscription_end, :moderator_level, :is_super_admin
            )";

            $stmt = $this->db->prepare($query);
            
            $passwordHash = password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 12]);
            
            $role = $data['role'] ?? UserType::BASIC;
            $monthlyUploads = ($role === UserType::BASIC) ? 0 : null;
            $subscriptionStart = ($role === UserType::PRO) ? date('Y-m-d H:i:s') : null;
            $subscriptionEnd = ($role === UserType::PRO) ? ($data['subscription_end'] ?? null) : null;
            $moderatorLevel = ($role === UserType::MODERATOR) ? ($data['moderator_level'] ?? 'junior') : null;
            $isSuperAdmin = ($role === UserType::ADMIN) ? ($data['is_super_admin'] ?? false) : null;
            $isActive = $data['is_active'] ?? true;

            $params = [
                ':username' => $data['username'],
                ':email' => $data['email'],
                ':password_hash' => $passwordHash,
                ':role' => $role,
                ':bio' => $data['bio'] ?? null,
                ':profile_picture' => $data['profile_picture'] ?? null,
                ':monthly_uploads' => $monthlyUploads,
                ':subscription_start' => $subscriptionStart,
                ':subscription_end' => $subscriptionEnd,
                ':moderator_level' => $moderatorLevel,
                ':is_super_admin' => $isSuperAdmin,
                ':is_active' => $isActive
            ];

            return $stmt->execute($params);

            return $stmt->execute();
        } catch (Exception $e) {
            error_log("UserRepository create error: " . $e->getMessage());
            return false;
        }
    }

    public function update(int $id, array $data): bool
    {
        try {
            
            $fields = [];
            $params = [':id' => $id];
            
            if (isset($data['username'])) {
                $fields[] = 'username = :username';
                $params[':username'] = $data['username'];
            }
            if (isset($data['email'])) {
                $fields[] = 'email = :email';
                $params[':email'] = $data['email'];
            }
            if (isset($data['bio'])) {
                $fields[] = 'bio = :bio';
                $params[':bio'] = $data['bio'];
            }
            if (isset($data['profile_picture'])) {
                $fields[] = 'profile_picture = :profile_picture';
                $params[':profile_picture'] = $data['profile_picture'];
            }
            if (isset($data['password'])) {
                $fields[] = 'password_hash = :password_hash';
                $params[':password_hash'] = password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 12]);
            }
            if (isset($data['monthly_uploads'])) {
                $fields[] = 'monthly_uploads = :monthly_uploads';
                $params[':monthly_uploads'] = $data['monthly_uploads'];
            }
            if (isset($data['subscription_end'])) {
                $fields[] = 'subscription_end = :subscription_end';
                $params[':subscription_end'] = $data['subscription_end'];
            }
            if (isset($data['is_subscription_active'])) {
                $fields[] = 'is_subscription_active = :is_subscription_active';
                $params[':is_subscription_active'] = $data['is_subscription_active'];
            }
            if (isset($data['moderator_level'])) {
                $fields[] = 'moderator_level = :moderator_level';
                $params[':moderator_level'] = $data['moderator_level'];
            }
            if (isset($data['is_super_admin'])) {
                $fields[] = 'is_super_admin = :is_super_admin';
                $params[':is_super_admin'] = $data['is_super_admin'];
            }
            
            if (empty($fields)) {
                return false;
            }
            
            $query = "UPDATE users SET " . implode(', ', $fields) . " WHERE id = :id AND deleted_at IS NULL";
            $stmt = $this->db->prepare($query);
            
            foreach ($params as $key => $value) {
                $stmt->bindValue($key, $value);
            }
            
            return $stmt->execute();
        } catch (Exception $e) {
            error_log("UserRepository update error: " . $e->getMessage());
            return false;
        }
    }
}