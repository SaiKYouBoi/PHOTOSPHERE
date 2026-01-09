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
    
    switch ($currentUser->getUserType()) {
        case 'basic':
            header("Location: /Views/basicuser.view.php");
            break;
        case 'admin':
            header("Location: /Views/basicuser.view.php");
            break;
        default:
            
            break;
    }

}else{
    $_SESSION['auth'] = 'Problem in authantification';
    header("Location: /Views/login.view.php");
    exit();
}
