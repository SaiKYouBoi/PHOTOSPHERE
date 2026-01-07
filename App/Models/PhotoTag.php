<?php

class PhotoTag {
    private int $photoId;
    private int $tagId;

    public function __construct(
        int $photoId,
        int $tagId
    ) {
        $this->photoId = $photoId;
        $this->tagId = $tagId;
    }
}