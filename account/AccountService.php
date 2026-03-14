<?php

require_once __DIR__ . '/AccountRepository.php';

class AccountService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new AccountRepository();
    }

    public function sendCode()
    {
        $code = rand(100000,999999);

        $this->repo->saveCode($code);

        return [
            'success'=>true,
            'code'=>$code
        ];
    }

    public function login($code)
    {        
        $valid = $this->repo->verifyCode($code);

        if (!$valid) {
            return [
                'success'=>false,
                'message'=>'Invalid code'
            ];
        }

        //$account = $this->repo->getAccountByEmail($email);

        /*if (!$account) {
            $this->repo->createAccount($email);
            $account = $this->repo->getAccountByEmail($email);
        }*/
        $account = $GLOBALS['USER'];

        return [
            'success'=>true,
            'data'=>$account
        ];
    }

    public function changeLanguage($language)
    {
        $this->repo->updateLanguage($language);

        return [
            'success'=>true
        ];
    }

    public function changeTheme($theme)
    {
        $this->repo->updateTheme($theme);

        return [
            'success'=>true
        ];
    }

    public function getThemeIndex()
    {
        $theme = $this->repo->getTheme();

        return [
            'success'=>true,
            'theme'=>$theme
        ];
    }

    public function getLanguages()
    {
        $languages = $this->repo->getLanguages();

        return [
            'success'=>true,
            'data'=>$languages
        ];
    }
}