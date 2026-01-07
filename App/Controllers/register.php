<?php

require_once __DIR__ . '/../Repositories/UserRepository.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
        'username' => trim($_POST['username'] ?? ''),
        'email' => trim($_POST['email'] ?? ''),
        'password' => $_POST['password'] ?? '',
        'bio' => trim($_POST['bio'] ?? ''),
    ];

    $errors = [];

    if ($data['username'] === '' || strlen($data['username']) < 3) {
        $errors['username'] = 'Username must be at least 3 characters';
    }


    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email address';
    }

    $userRepo = new UserRepository();
    
    if (!isset($errors['email'])) {
    if ($userRepo->emailExists($data['email'])) {
        $errors['email'] = 'This email is already registered';
    }
    }

    if (strlen($data['password']) < 8) {
        $errors['password'] = 'Password must be at least 8 characters';
    }

    if ($_POST['confirm_password'] === '') {
        $errors['confirm_password'] = 'Please confirm your password';
    } elseif ($data['password'] !== $_POST['confirm_password']) {
        $errors['confirm_password'] = 'Passwords do not match';
    }

    if ($data['bio'] !== '' && strlen($data['bio']) > 500) {
        $errors['bio'] = 'Bio must not exceed 500 characters';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $data;

        header("Location: /Views/register.view.php");
        exit();
    }

    $userRepo = new UserRepository();

    if ($userRepo->create($data)) {
        header("Location: /Views/login.view.php");
        exit();
    }

    $_SESSION['errors']['general'] = 'Registration failed';
    header("Location: /Views/register.view.php");
    exit();
}
