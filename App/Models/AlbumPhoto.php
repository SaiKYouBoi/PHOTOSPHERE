<?php

class AlbumPhoto {
    private int $albumId;
    private int $photoId;
    private DateTime $addedAt;

    public function __construct(
        int $albumId,
        int $photoId,
        DateTime $addedAt
    ) {
        $this->albumId = $albumId;
        $this->photoId = $photoId;
        $this->addedAt = $addedAt;
    }
}