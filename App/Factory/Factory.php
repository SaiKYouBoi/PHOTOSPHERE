<?php

require_once __DIR__ . '/../Helpers/UserType.php';
require_once __DIR__ . '/../Models/BasicUser.php';
require_once __DIR__ . '/../Models/ProUser.php';
require_once __DIR__ . '/../Models/Moderator.php';
require_once __DIR__ . '/../Models/Admin.php';

class UserFactory
{
    public static function create(array $data): User
    {
        $id = $data['id'] ?? null;
        $username = $data['username'] ?? '';
        $email = $data['email'] ?? '';
        $passwordHash = $data['password_hash'] ?? '';
        $bio = $data['bio'] ?? null;
        $profilePhotoPath = $data['profile_picture'] ?? null;
        $createdAt = isset($data['created_at']) ? new DateTime($data['created_at']) : new DateTime();
        $lastLogin = isset($data['last_login']) ? new DateTime($data['last_login']) : null;
        $userType = $data['role'];

        $userArgs = [
            $id,
            $username,
            $email,
            $passwordHash,
            $bio,
            $profilePhotoPath,
            $createdAt,
            $lastLogin,
            $userType
        ];

        switch ($userType) {

            case UserType::PRO:
                return new ProUser(
                    ...array_merge($userArgs, [
                        isset($data['subscription_start']) ? new DateTime($data['subscription_start']) : new DateTime(),
                        isset($data['subscription_end']) ? new DateTime($data['subscription_end']) : null,
                        isset($data['is_active']) ? (bool)$data['is_active'] : true
                    ])
                );

            case UserType::MODERATOR:
                return new Moderator(
                    ...array_merge($userArgs, [
                        $data['moderator_level'] ?? 'junior',
                    ])
                );

            case UserType::ADMIN:
                return new Admin(
                    ...array_merge($userArgs, [
                        isset($data['is_super_admin']) ? (bool)$data['is_super_admin'] : false,
                        $data['admin_level'] ?? 1
                    ])
                );

            case UserType::BASIC:
            default:
                return new BasicUser(
                    ...array_merge($userArgs, [
                        $data['monthly_uploads'] ?? 0,
                        isset($data['last_login']) ? new DateTime($data['last_login']) : null
                    ])
                );
        }
    }
}
