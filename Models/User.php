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

    public function __construct(
        ?int $id,
        string $username,
        string $email,
        string $passwordHash,
        ?string $bio,
        ?string $profilePhotoPath,
        DateTime $createdAt,
        ?DateTime $lastLogin,
        string $userType
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
    }
}