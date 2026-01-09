<?php
require_once __DIR__ . '/../Repositories/PhotoRepository.php';
session_start();


$title = $_POST["title"];

$description = $_POST["description"];

$tags = json_decode($_POST["tags"], true);

$image = $_FILES["photofile"];

$imagesize = $_FILES["photofile"]["size"];

if ($image !== null) {

    $ext = pathinfo($image["name"], PATHINFO_EXTENSION);

    $img_name = "image-" . uniqid() . ".$ext";

    $image_path = __DIR__ . "/../../assets/$img_name";

    move_uploaded_file($image["tmp_name"], $image_path);

} else {

    $_SESSION['maxsize'] = 'File too large. Maximum allowed size is 20MB';
    header("Location: /Views/gallery.view.php");
    exit();
}

$info = getimagesize($image_path);

$dimensions = "{$info[0]}x{$info[1]}";

$post = [
    'user_id' => $_SESSION['user_id'],
    'title' => $title,
    'description' => $description,
    'file_path' => $img_name,
    'file_size' => $imagesize,
    'mime_type' => $ext,
    'dimensions' => $dimensions,
];

$photoRepo = new PhotoRepository();


$photoRepo->create($post, $tags);

header("Location: /Views/gallery.view.php");