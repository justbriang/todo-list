<?php

namespace App\Http\Livewire;

use App\Http\Resources\TasksResource;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TasksWire extends Component
{
    use WithPagination;
    public $task;
    public $title, $description, $due_date, $status, $searched;
    public $edit = false;
    public $delete = false;
    public $statusUpdate = false;

    public $statusFilter = ["All ", "Completed", "InComplete"];
    public $filterVal;

    protected $rules = [
        'title' => 'required|unique:tasks|max:255',
        'description' => 'required',
        'due_date' => 'required|date|after:now()',

    ];
    protected $rulesEdit = [
        'title' => 'sometimes|max:255',
        'status' => 'sometimes',
        'description' => 'sometimes',
        'due_date' => 'sometimes|date|after:now()',
    ];

    public function render()
    {


        if ($this->filterVal == 'Completed') {
            if ($this->searched == null || $this->searched == '') {
                $tasks = Task::where('status', true)->latest()->paginate(8);
            } else {
                $tasks =  Task::search($this->searched)->paginate(8);
            }
        } else if ($this->filterVal == 'InComplete') {
            if ($this->searched == null || $this->searched == '') {
                $tasks = Task::where('status', false)->latest()->paginate(8);
            } else {
                $tasks =  Task::search($this->searched)->paginate(8);
            }
        } else {
            if ($this->searched == null || $this->searched == '') {
                $tasks = Task::latest()->paginate(8);
            } else {
                $tasks =  Task::search($this->searched)->paginate(8);
            }
        }



        return view('livewire.tasks-wire', ['tasks' => $tasks]);
    }


    /*
     * Function to Open the modal and clear the textfields
     *
     * @return \Illuminate\Http\Response
     */
    public function openModal()
    {
        $this->task = null;
        $this->title = null;
        $this->description = null;
        $this->due_date = null;
        $this->status = null;
        $this->edit = !$this->edit;
    }

    /**
     * Add a newly created task to the database.
     */
    public function createTask()
    {
        // check whether the action is an update or create action
        // is task variable is null, then its a create otherwise an update
        if ($this->task == null) {
            // data validation
            $this->validate($this->rules);

            //create task using the relationship to the currently authenticated user
            Auth::user()->tasks()->create([
                'title' => $this->title,
                'description' => $this->description,
                'due_date' => $this->due_date,
            ]);
        } else {
            $this->validate($this->rulesEdit);

            $this->task->title = $this->title;
            $this->task->description = $this->description;
            $this->task->due_date = $this->due_date;
            $this->task->status = $this->status;
            $this->task->save();
        }
        $this->edit = !$this->edit;
    }

    public function updateStatus(Task $task)
    {
        $this->task = $task;
        $this->statusUpdate = true;
    }

    public function updateStatusOfTask()
    {
        $this->task->status = !$this->task->status;
        $this->task->save();
        $this->statusUpdate = false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function populateEdit(Task $task)
    {
        $this->task = $task;
        $this->title = $this->task->title;
        $this->due_date = Carbon::parse($this->task->due_date)->format('Y-m-d');
        $this->status = $this->task->status;

        $this->description = $this->task->description;

        $this->edit = !$this->edit;
    }

    /*
     * Update the specified task in the database (due_time or status)
     */
    public function confirmDeletion(Task $task)
    {
        $this->task = $task;
        $this->delete = !$this->delete;
    }
    public function deleteTask()
    {
        $this->task->delete();
        $this->delete = !$this->delete;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response(["message" => "Task deleted successfully"]);
    }
}
