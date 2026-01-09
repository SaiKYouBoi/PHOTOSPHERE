<?php

class Post {
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
    private array $tags = [];

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
        DateTime $updatedAt,
        array $tags
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
        $this->tags = $tags;
    }

    public function getId(): ?int { return $this->id; }
    public function getUserId(): int { return $this->userId; }
    public function getTitle(): string { return $this->title; }
    public function getDescription(): ?string { return $this->description; }
    public function getFilePath(): string { return $this->filePath; }
    public function getFileSize(): int { return $this->fileSize; }
    public function getMimeType(): string { return $this->mimeType; }
    public function getDimensions(): string { return $this->dimensions; }
    public function getStatus(): string { return $this->status; }
    public function getPublishedAt(): ?DateTime { return $this->publishedAt; }
    public function getViewCount(): int { return $this->viewCount; }
    public function getLikeCount(): int { return $this->likeCount; }
    public function getCreatedAt(): DateTime { return $this->createdAt; }
    public function getUpdatedAt(): DateTime { return $this->updatedAt; }
    public function getTags(): array { return $this->tags; }
}