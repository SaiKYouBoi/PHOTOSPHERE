<?php

require_once __DIR__ . '/User.php';

class Admin extends User {
    private bool $isSuperAdmin;
    private int $adminLevel;

    public function __construct(
        ?int $id,
        string $username,
        string $email,
        string $passwordHash,
        ?string $bio,
        ?string $profilePhotoPath,
        DateTime $createdAt,
        ?DateTime $lastLogin,
        string $userType,
        bool $isSuperAdmin,
        int $adminLevel
    ) {
        parent::__construct(
            $id,
            $username,
            $email,
            $passwordHash,
            $bio,
            $profilePhotoPath,
            $createdAt,
            $lastLogin,
            $userType
        );
        $this->isSuperAdmin = $isSuperAdmin;
        $this->adminLevel = $adminLevel;
    }

    public function getIsSuperAdmin(): bool
    {
        return $this->isSuperAdmin;
    }
}