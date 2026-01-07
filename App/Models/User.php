<?php 

class User {
    private ?int $id;
    private string $username;
    private string $email;
    private string $passwordHash;
    private ?string $bio;
    private ?string $profilePhotoPath;
    private DateTime $createdAt;
    private ?DateTime $lastLogin;
    private string $userType;
    private ?DateTime $deletedAt;

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
        ?DateTime $deletedAt = null 
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
        $this->bio = $bio;
        $this->profilePhotoPath = $profilePhotoPath;
        $this->createdAt = $createdAt;
        $this->lastLogin = $lastLogin;
        $this->userType = $userType;
        $this->deletedAt = $deletedAt;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function getProfilePhotoPath(): ?string
    {
        return $this->profilePhotoPath;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getLastLogin(): ?DateTime
    {
        return $this->lastLogin;
    }

    public function getUserType(): string
    {
        return $this->userType;
    }

    public function getDeletedAt(): ?DateTime
    {
        return $this->deletedAt;
    }

}