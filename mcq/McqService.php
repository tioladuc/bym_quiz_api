<?php

require_once __DIR__ . '/McqRepository.php';

class McqService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new McqRepository();
    }

    public function list()
    {
        $data = $this->repo->list();

        foreach ($data as &$item) {
            $item['search'] = json_decode($item['search'], true);
        }

        return [
            'success'=>true,
            'data'=>$data
        ];
    }

    public function add($title, $search)
    {
        if (!$title) {
            return [
                'success'=>false,
                'message'=>'Title required'
            ];
        }

        $searchJson = json_encode($search);

        $id = $this->repo->add($title, $searchJson);

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

        $data['search'] = json_decode($data['search'], true);

        return [
            'success'=>true,
            'data'=>$data
        ];
    }

    public function addScore($suiteId, $total, $passed)
    {
        $this->repo->addScore($suiteId, $total, $passed);

        return [
            'success'=>true
        ];
    }
}