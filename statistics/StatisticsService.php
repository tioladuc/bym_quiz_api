<?php

require_once __DIR__ . '/StatisticsRepository.php';

class StatisticsService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new StatisticsRepository();
    }

    public function allAccessData()
    {        
        $totalSuites = $this->repo->allAccessData();

        return [
            'success' => true,
            'data' => $totalSuites
        ];
    }

    public function quiz()
    {
        /*$totalAttempts = $this->repo->countQuizAttempts();
        $totalPassed = $this->repo->sumPassed();
        $totalQuestions = $this->repo->sumQuestions();

        $averageScore = 0;

        if ($totalQuestions > 0) {
            $averageScore = round(($totalPassed / $totalQuestions) * 100, 2);
        }*/

        return [
            'success' => true,
            'data' => $this->repo->sumQuestions()
        ];
    }
}