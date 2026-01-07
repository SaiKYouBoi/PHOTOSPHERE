<?php

require_once __DIR__ . '/User.php';

class BasicUser extends User {
    private int $monthlyUploadCount;
    private ?DateTime $lastResetDate;

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
        int $monthlyUploadCount,
        ?DateTime $lastResetDate
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
        $this->monthlyUploadCount = $monthlyUploadCount;
        $this->lastResetDate = $lastResetDate;
    }
}