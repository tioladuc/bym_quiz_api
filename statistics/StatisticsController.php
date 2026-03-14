<?php

require_once __DIR__ . '/StatisticsService.php';

class StatisticsController
{
    private $service;

    public function __construct()
    {
        $this->service = new StatisticsService();
    }

    public function allAccessData($body)
    {
        return $this->service->allAccessData();
    }

    public function quiz($body)
    {
        return $this->service->quiz();
    }
}