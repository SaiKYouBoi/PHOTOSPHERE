<?php
class Comment {
    private ?int $id;
    private int $userId;
    private int $photoId;
    private ?int $parentId;
    private string $content;
    private bool $isEdited;
    private DateTime $createdAt;
    private DateTime $updatedAt;

    public function __construct(
        ?int $id,
        int $userId,
        int $photoId,
        ?int $parentId,
        string $content,
        bool $isEdited,
        DateTime $createdAt,
        DateTime $updatedAt
    ) {
        $this->id = $id;
        $this->userId = $userId;
        $this->photoId = $photoId;
        $this->parentId = $parentId;
        $this->content = $content;
        $this->isEdited = $isEdited;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}