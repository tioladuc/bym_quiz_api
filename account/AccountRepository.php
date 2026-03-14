<?php

require_once __DIR__ . '/../core/Database.php';
/*CREATE TABLE accounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE,
    language VARCHAR(10) DEFAULT 'en',
    theme_index INT DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE account_codes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    code VARCHAR(10),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE languages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(10),
    name VARCHAR(100)
);
INSERT INTO languages (code,name) VALUES
('en','English'),
('fr','Français'),
('es','Español');
*/
class AccountRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::connect();
    }

    public function saveCode($code)
    {
        $sql = "
        UPDATE users SET user_code = ? WHERE code = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $code, $GLOBALS['USER']['code'] ]);
    }

    public function verifyCode($code)
    {
        $sql = "
        SELECT *
        FROM users
        WHERE code = ? AND user_code = ?
        ORDER BY id DESC
        LIMIT 1
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $GLOBALS['USER']['code'] ,$code]);

        return $stmt->fetch(PDO::FETCH_ASSOC) ? true : false;
    }

    public function getAccountByEmail($email)
    {
        $sql = "
        SELECT *
        FROM users
        WHERE email = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createAccount($email)
    {
        $sql = "
        INSERT INTO accounts (email)
        VALUES (?)
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
    }

    public function updateLanguage($language)
    {
        $sql = "UPDATE users SET language=? WHERE code = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$language, $GLOBALS['USER']['code'] ]);
    }

    public function updateTheme($theme)
    {
        $sql = "UPDATE users SET theme=? WHERE code = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$theme,  $GLOBALS['USER']['code'] ]);
    }

    public function getTheme()
    {
        $sql = "
        SELECT theme
        FROM users
        WHERE code = ?
        LIMIT 1
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([  $GLOBALS['USER']['code'] ]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? $row['theme'] : 0;
    }

    public function getLanguages()
    {
        $sql = "
        SELECT code,name
        FROM languages
        ORDER BY name
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}