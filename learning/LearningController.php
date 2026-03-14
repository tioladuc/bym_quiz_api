<?php

require_once __DIR__ . '/LearningService.php';

class LearningController
{
    private $service;

    public function __construct()
    {
        $this->service = new LearningService();
    }

    public function list($body)
    {
        return $this->service->list();
    }

    public function add($body)
    {
        $title = $body['title'] ?? '';
        $description = $body['description'] ?? '';
        $search = $body['search'] ?? [];

        return $this->service->add($title, $description, $search);
    }

    public function delete($body)
    {
        $id = $body['id'] ?? null;

        if (!$id) {
            return ['success'=>false,'message'=>'Missing id'];
        }

        return $this->service->delete($id);
    }

    public function get($body)
    {
        $id = $body['id'] ?? null;

        if (!$id) {
            return ['success'=>false,'message'=>'Missing id'];
        }

        return $this->service->get($id);
    }
}