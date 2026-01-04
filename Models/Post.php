class Photo {
    private ?int $id;
    private int $userId;
    private string $title;
    private ?string $description;
    private string $filePath;
    private int $fileSize;
    private string $mimeType;
    private string $dimensions;
    private string $status;
    private ?DateTime $publishedAt;
    private int $viewCount;
    private int $likeCount;
    private DateTime $createdAt;
    private DateTime $updatedAt;

    public function __construct(
        ?int $id,
        int $userId,
        string $title,
        ?string $description,
        string $filePath,
        int $fileSize,
        string $mimeType,
        string $dimensions,
        string $status,
        ?DateTime $publishedAt,
        int $viewCount,
        int $likeCount,
        DateTime $createdAt,
        DateTime $updatedAt
    ) {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->description = $description;
        $this->filePath = $filePath;
        $this->fileSize = $fileSize;
        $this->mimeType = $mimeType;
        $this->dimensions = $dimensions;
        $this->status = $status;
        $this->publishedAt = $publishedAt;
        $this->viewCount = $viewCount;
        $this->likeCount = $likeCount;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}