<?php

require_once __DIR__ . '/../core/Database.php';
/*CREATE TABLE mcq_suites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    search JSON,
    articles_id TEXT,
    total_question INT,
    language VARCHAR(5),
    created_by VARCHAR(50),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE mcq_scores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    suite_id INT,
    total INT,
    passed INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
======================================
CREATE TABLE mcq_suites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    search JSON,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
*/
class McqRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::connect();
    }

    public function list()
    {
        $sql = "
        SELECT *
        FROM mcq_suites
        WHERE created_by = ? AND language = ? 
        ORDER BY id DESC
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $GLOBALS['USER']['code'], $GLOBALS['USER']['language'] ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($title, $search)
    {
        $sql = "
        INSERT INTO mcq_suites
        (title, search, 
        articles_id, total_question, created_by, created_at,  language)
        VALUES (?,  ?,
        ?, ?, ?, now(), ?)
        ";

        $data = $this->getRandomData();
        $article_id = $data[1];
        $total_Question = $data[0];

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $title,
            $search,
            $article_id,
            $total_Question,
            $GLOBALS['USER']['code'],
            $GLOBALS['USER']['language']
        ]);

        return $this->pdo->lastInsertId();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM mcq_suites WHERE id = ? AND created_by = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $id, $GLOBALS['USER']['code'] ]);
    }

    public function get($id)
    {
        $sql = "
        SELECT *
        FROM mcq_suites
        WHERE id = ? AND created_by = ?
        ";

        $stmt = $this->pdo->prepare("INSERT mcq_stats(suite_id, createdOn) VALUES(?, now())");
        $stmt->execute([ $id ]);

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $id, $GLOBALS['USER']['code'] ]);

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $data['articles'] = $this->getDataForSuite($data['articles_id']);
        return $data;
    }

    public function addScore($suiteId, $total, $passed)
    {
        $sql = "
        INSERT INTO mcq_scores (suite_id, total, passed)
        VALUES (?, ?, ?)
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $suiteId,
            $total,
            $passed
        ]);
    }

    public function getRandomData()
    {
        $sql = "
        SELECT *
        FROM data_mcq
        WHERE language = ? 
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $GLOBALS['USER']['language'] ]);

        $arrayData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $questions = "";//rand(int $min, int $max)
        $count = 0;
        for ($i=0 ; $i < 10 ; $i++ ) { 
            $count++;
            $questions .= ($questions=="" ? "" : ",") . $arrayData[ rand(0, count($arrayData)-1) ]['id'];
        }

        return array($count, $questions);
    }

    public function getDataForSuite($data_ids)
    {
        $sql = "
        SELECT *
        FROM data_learning
        WHERE id IN ($data_ids)
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $arrayData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arrayData;
    }
}