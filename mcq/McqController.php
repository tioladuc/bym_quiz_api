<?php

require_once __DIR__ . '/McqService.php';

class McqController
{
    private $service;

    public function __construct()
    {
        $this->service = new McqService();
    }

    public function list($body)
    {
        return $this->service->list();
    }

    public function add($body)
    {
        $title = $body['title'] ?? '';
        $search = $body['search'] ?? [];

        return $this->service->add($title, $search);
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

    public function addScore($body)
    {
        $suiteId = $body['suite_id'] ?? null;
        $total = $body['total'] ?? 0;
        $passed = $body['passed'] ?? 0;

        if (!$suiteId) {
            return ['success'=>false,'message'=>'Missing suite_id'];
        }

        return $this->service->addScore($suiteId, $total, $passed);
    }
}