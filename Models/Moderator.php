class Moderator extends User {
    private string $moderatorLevel;
    private int $moderationCount;

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
        string $moderatorLevel,
        int $moderationCount
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
        $this->moderatorLevel = $moderatorLevel;
        $this->moderationCount = $moderationCount;
    }
}
