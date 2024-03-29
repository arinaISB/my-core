<?php

namespace Core\src\Service\Authentication;

use Exceptions\UserNotFoundExceptions;
use Model\User;

interface AuthenticationInterface
{
    public function check(): bool;

    /**
     * @return User
     * @throws UserNotFoundExceptions
     */
    public function getCurrentUser(): User;
    public function login(string $password, string $email): bool;

    public function logout(): void;
}