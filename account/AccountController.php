<?php

require_once __DIR__ . '/AccountService.php';

class AccountController
{
    private $service;

    public function __construct()
    {
        $this->service = new AccountService();
    }

    public function sendCode($body)
    {
        return $this->service->sendCode();
    }

    public function login($body)
    {
        $code = $body['code'] ?? '';

        return $this->service->login($code);
    }

    public function changeLanguage($body)
    {
        $language = $body['language'] ?? '';

        return $this->service->changeLanguage($language);
    }

    public function changeTheme($body)
    {
        $theme = $body['theme'] ?? 0;

        return $this->service->changeTheme($theme);
    }

    public function getThemeIndex($body)
    {
        return $this->service->getThemeIndex();
    }

    public function getLanguages($body)
    {
        return $this->service->getLanguages();
    }
}