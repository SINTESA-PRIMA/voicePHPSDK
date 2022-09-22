<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib;

/**
 * Interface for defining the behavior of Authentication.
 */
interface BasicAuthCredentials
{
    /**
     * String value for username.
     */
    public function getUsername(): string;

    /**
     * String value for password.
     */
    public function getPassword(): string;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $username
     * @param string $password
     */
    public function equals(string $username, string $password): bool;
}
