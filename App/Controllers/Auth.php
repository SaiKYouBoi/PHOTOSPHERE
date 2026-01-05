<?php

class Auth
{
    public static function login(string $email, string $password): bool
    {
        $userRepo = new UserRepository();
        $user = $userRepo->findByEmail($email);

        if ($user && password_verify($password, $user->getPasswordHash())) {
            if ($user->getDeletedAt() !== null) {
                return false;
            }

            $_SESSION['user'] = $user;
            $_SESSION['is_super_admin'] = $user instanceof Admin ? $user->getIsSuperAdmin() : false;

            return true;
        }

        return false;
    }

    public static function register(array $data): bool|User
    {
        $userRepo = new UserRepository();

        $data['role'] = $data['role'] ?? UserType::BASIC;


        if ($userRepo->create($data)) {
            
            $newUser = $userRepo->findByEmail($data['email']);
            
            if ($newUser) {
                self::login($data['email'], $data['password']);
            }
            
            return $newUser;
        }

        return false;
    }

    public static function logout(): void
    {
        session_unset();
        session_destroy();
    }
}

