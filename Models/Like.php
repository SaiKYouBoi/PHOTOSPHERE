class Like {
    private ?int $id;
    private int $userId;
    private int $photoId;
    private DateTime $createdAt;

    public function __construct(
        ?int $id,
        int $userId,
        int $photoId,
        DateTime $createdAt
    ) {
        $this->id = $id;
        $this->userId = $userId;
        $this->photoId = $photoId;
        $this->createdAt = $createdAt;
    }
}