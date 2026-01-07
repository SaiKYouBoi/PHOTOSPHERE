<?php


class ProUser extends User {
    private DateTime $subscriptionStart;
    private ?DateTime $subscriptionEnd;
    private bool $isSubscriptionActive;

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
        DateTime $subscriptionStart,
        ?DateTime $subscriptionEnd,
        bool $isSubscriptionActive
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
        $this->subscriptionStart = $subscriptionStart;
        $this->subscriptionEnd = $subscriptionEnd;
        $this->isSubscriptionActive = $isSubscriptionActive;
    }
}