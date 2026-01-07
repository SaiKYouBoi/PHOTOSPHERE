<?php
require_once __DIR__ . '/../Repositories/UserRepository.php';

class Auth
{
    public static function login(string $email, string $password): bool
    {
        $userRepo = new UserRepository();
        $user = $userRepo->findByEmail($email);

        if ($user && password_verify($password, $user->getPasswordHash())) {
           
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['role'] = $user->getUserType();
            $_SESSION['user_email'] = $user->getEmail();

            return true;
        }

        return false;
    }

    public static function isAuthenticated(): bool
    {
        return isset($_SESSION['user_id']);
    }
    
    public static function getCurrentUser(): ?User
    {
        if (!self::isAuthenticated()) {
            return null;
        }

        $userRepo = new UserRepository();
        return $userRepo->find($_SESSION['user_id']);
    }
}