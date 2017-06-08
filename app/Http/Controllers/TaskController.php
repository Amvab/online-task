<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Repositories\TaskInterface;

class TaskController extends Controller
{

    protected $task;

    /**
     * TaskController constructor.
     * @param TaskInterface $task
     */
    public function __construct(TaskInterface $task)
    {
        $this->task = $task;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['tasks'] = $this->task->findAll();

        return view('Task/index', $data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Task/create');
    }


    /**
     * @param TaskFormRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(TaskFormRequest $request)
    {
        $input = $request->all();
        try {

            $this->task->save($input);
            Flash::success("Data Created Successfully");

        } catch (\Throwable $t) {
            Flash::error($t->getMessage());
        }

        return redirect(route('task.index'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['task'] = $this->task->find($id);

        return view('Task/edit', $data);
    }

    /**
     * @param TaskFormRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(TaskFormRequest $request, $id)
    {
        $input = $request->all();
        try {
            $this->task->update($id, $input);
            Flash::success("Data Updated Successfully");
        } catch (\Throwable  $t) {
            Flash::error($t->getMessage());
        }

        return redirect(route('task.edit', ['id' => $id]));
    }


    public function destroy($id)
    {
        try {
            $this->task->delete($id);
            Flash::success("Data deleted Successfully");
        } catch (\Throwable  $t) {

            Flash::error($t->getMessage());
        }

        return redirect(route('task.index'));
    }


}
