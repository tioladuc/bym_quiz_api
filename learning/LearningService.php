<?php

require_once __DIR__ . '/LearningRepository.php';

class LearningService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new LearningRepository();
    }

    public function list()
    {
        $data = $this->repo->list();

        return [
            'success' => true,
            'data' => $data
        ];
    }

    public function add($title, $description, $search)
    {
        if (!$title) {
            return [
                'success'=>false,
                'message'=>'Title required'
            ];
        }

        $searchJson = json_encode($search);

        $id = $this->repo->add($title, $description, $searchJson);

        return [
            'success'=>true,
            'id'=>$id
        ];
    }

    public function delete($id)
    {
        $this->repo->delete($id);

        return [
            'success'=>true
        ];
    }

    public function get($id)
    {
        $data = $this->repo->get($id);

        if (!$data) {
            return [
                'success'=>false,
                'message'=>'Suite not found'
            ];
        }

        return [
            'success'=>true,
            'data'=>$data
        ];
    }
}