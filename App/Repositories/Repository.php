<?php

require_once __DIR__ . '/../Models/User.php';


interface Repository
{
    public function find(int $id): ?User;
    public function findByEmail(string $email): ?User;
    public function create(array $data): bool;
}
