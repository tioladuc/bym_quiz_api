<?php

require_once __DIR__ . '/../core/Database.php';
/*CREATE TABLE learning_suites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    search JSON,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE mcq_scores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    suite_id INT,
    total INT,
    passed INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);*/
class StatisticsRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::connect();
    }

    public function allAccessData()
    {
        $sql = "SELECT title, description, search, total_question, created_by, created_at,  language, createdOn as viewDate, 'Learning' as category
        FROM learning_suites, learning_stats WHERE learning_stats.suite_id = learning_suites.id AND language = ? AND created_by = ?
        
        UNION 
        
        SELECT title, '' as description, search, total_question, created_by, created_at,  language, createdOn as viewDate, 'Mcq' as category
        FROM mcq_suites, mcq_stats WHERE mcq_stats.suite_id = mcq_suites.id AND language = ? AND created_by = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $GLOBALS['USER']['language'], $GLOBALS['USER']['code'], 
                         $GLOBALS['USER']['language'], $GLOBALS['USER']['code'] ]);

        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    

    public function sumQuestions()
    {
        $sql = "SELECT mcq_suites.*, mcq_scores.passed, mcq_scores.created_at as playedDate  FROM mcq_suites, mcq_scores WHERE mcq_suites.id = mcq_scores.suite_id AND language = ? AND created_by = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $GLOBALS['USER']['language'], $GLOBALS['USER']['code']  ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}