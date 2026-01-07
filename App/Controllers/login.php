<?php

require_once __DIR__ . '/../Repositories/UserRepository.php';
require_once __DIR__ . '/Auth.php';
session_start();


$email = $_POST['email'] ?? '';   
$password = $_POST['password'] ?? '';

if(empty($email) || empty($email)){
    $errors['auth'] = 'Password and email are required';
    exit();
}

$userRepo = new UserRepository();
$user = $userRepo->findByEmail($email);


if (Auth::login($email, $password)) {
    
    $currentUser = Auth::getCurrentUser();

    var_dump($currentUser);
    var_dump($_SESSION['role']);
    exit();
    
    switch ($currentUser->getUserType()) {
        case 'basic':
            header("Location: /Views/basicuser.view.php");
            break;
        case 'admin':
            header("Location: /Views/basicuser.views.phpp");
            break;
        default:
            break;
    }
    
}else{
    $errors['auth'] = 'Problem in authantification ';
}
