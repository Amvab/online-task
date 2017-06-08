<?php
namespace App\Repositories;


interface TaskInterface
{

    public function findAll($sort = ['by' => 'id', 'sort' => 'DESC']);

    public function find($id);

    public function save($data);

    public function update($id, $data);

    public function delete($id);


}
