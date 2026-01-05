<?php

class UserFactory
{
    public static function create(array $data): User
    {
        $id = $data['id'] ?? null;
        $username = $data['username'] ?? '';
        $email = $data['email'] ?? '';
        $passwordHash = $data['password_hash'] ?? '';
        $bio = $data['bio'] ?? null;
        $profilePhotoPath = $data['profile_photo_path'] ?? null;
        $createdAt = isset($data['created_at']) ? new DateTime($data['created_at']) : new DateTime();
        $lastLogin = isset($data['last_login']) ? new DateTime($data['last_login']) : null;
        $userType = $data['user_type'] ?? UserType::BASIC;
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
                $subscriptionStart = isset($data['subscription_start']) ? new DateTime($data['subscription_start']) : new DateTime();
                $subscriptionEnd = isset($data['subscription_end']) ? new DateTime($data['subscription_end']) : null;
                $isSubscriptionActive = isset($data['is_subscription_active']) ? (bool)$data['is_subscription_active'] : true;

                return new ProUser(
                    ...array_merge($userArgs, [$subscriptionStart, $subscriptionEnd, $isSubscriptionActive])
                );

            case UserType::MODERATOR:
                $moderatorLevel = $data['moderator_level'] ?? 'junior';
                $moderationCount = $data['moderation_count'] ?? 0;

                return new Moderator(
                    ...array_merge($userArgs, [$moderatorLevel, $moderationCount])
                );

            case UserType::ADMIN:
                $isSuperAdmin = isset($data['is_super_admin']) ? (bool)$data['is_super_admin'] : false;
                $adminLevel = $data['admin_level'] ?? 1;

                return new Admin(
                    ...array_merge($userArgs, [$isSuperAdmin, $adminLevel])
                );

            case UserType::BASIC:
            default:
                $monthlyUploadCount = $data['monthly_upload_count'] ?? 0;
                $lastResetDate = isset($data['last_reset_date']) ? new DateTime($data['last_reset_date']) : null;

                return new BasicUser(
                    ...array_merge($userArgs, [$monthlyUploadCount, $lastResetDate])
                );
        }
    }

    public static function createBasicUser(
        string $username,
        string $email,
        string $password,
        ?string $bio = null,
        ?string $profilePhotoPath = null
    ): BasicUser {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        
        return new BasicUser(
            null,
            $username,
            $email,
            $passwordHash,
            $bio,
            $profilePhotoPath,
            new DateTime(),
            null,
            UserType::BASIC,
            0,
            null
        );
    }

    public static function createProUser(
        string $username,
        string $email,
        string $password,
        DateTime $subscriptionEnd,
        ?string $bio = null,
        ?string $profilePhotoPath = null
    ): ProUser {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        
        return new ProUser(
            null,
            $username,
            $email,
            $passwordHash,
            $bio,
            $profilePhotoPath,
            new DateTime(),
            null,
            UserType::PRO,
            new DateTime(),
            $subscriptionEnd,
            true
        );
    }

    public static function createModerator(
        string $username,
        string $email,
        string $password,
        string $moderatorLevel = 'junior',
        ?string $bio = null,
        ?string $profilePhotoPath = null
    ): Moderator {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        
        return new Moderator(
            null,
            $username,
            $email,
            $passwordHash,
            $bio,
            $profilePhotoPath,
            new DateTime(),
            null,
            UserType::MODERATOR,
            $moderatorLevel,
            0
        );
    }

    public static function createAdministrator(
        string $username,
        string $email,
        string $password,
        bool $isSuperAdmin = false,
        int $adminLevel = 1,
        ?string $bio = null,
        ?string $profilePhotoPath = null
    ): Admin {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        
        return new Admin(
            null,
            $username,
            $email,
            $passwordHash,
            $bio,
            $profilePhotoPath,
            new DateTime(),
            null,
            UserType::ADMIN,
            $isSuperAdmin,
            $adminLevel
        );
    }

    public static function upgradeToPro(BasicUser $basicUser, DateTime $subscriptionEnd): ProUser
    {
        return new ProUser(
            $basicUser->getId(),
            $basicUser->getUsername(),
            $basicUser->getEmail(),
            $basicUser->getPasswordHash(),
            $basicUser->getBio(),
            $basicUser->getProfilePhotoPath(),
            $basicUser->getCreatedAt(),
            $basicUser->getLastLogin(),
            UserType::PRO,
            new DateTime(),
            $subscriptionEnd,
            true
        );
    }
}