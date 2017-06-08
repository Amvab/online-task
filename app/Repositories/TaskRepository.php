<?php
namespace App\Repositories;


use App\Task;

class TaskRepository implements TaskInterface
{


    /**
     * @param array $sort
     * @return mixed
     */
    public function findAll($sort = ['by' => 'id', 'sort' => 'DESC'])
    {

        $result = Task::orderBy($sort['by'], $sort['sort'])
            ->paginate(env('DEF_PAGE_LIMIT', '1000'));

        return $result;

    }


    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Task::find($id);
    }

    /**
     * @param $data
     * @return static
     */
    public function save($data)
    {


        return Task::create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data)
    {
        $task = Task::find($id);

        return $task->update($data);
    }


    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        return Task::destroy($id);
    }


}
