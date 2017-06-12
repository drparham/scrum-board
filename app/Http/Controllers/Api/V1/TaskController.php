<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskDeleteFormRequest;
use App\Http\Requests\TaskEditFormRequest;
use App\Http\Requests\TaskStoreFormRequest;
use App\Http\Requests\TaskUpdateFormRequest;
use App\Models\Task;
use App\Models\UserStory;
use Pta\Formbuilder\Facades\FormBuilder;

class TaskController extends Controller
{
    public function create($sprintId, $columnId, $storyId)
    {

        $task           = new Task();
        $task->sprint   = $sprintId;

        $form = FormBuilder::buildForm($task, 'POST', 'storeTask', 'create', null, null);

        return view('Sprints.tasks.create')->with(['form' => $form]);
    }

    public function store(TaskStoreFormRequest $request)
    {
        $userStory = UserStory::find($request->user_story_id);
        $task      = new Task();

        $task->user_story_id    = $request->user_story_id;
        $task->sprint_row_id    = $userStory->sprint_row_id;
        $task->sprint_column_id = $request->sprint_column_id;

        $task->title    = $request->title;
        $task->details  = $request->details;
        $task->points   = $request->points;
        $task->save();

        return redirect()->route('sprints', $userStory->sprint_id);
    }

    public function edit(TaskEditFormRequest $request, $id)
    {
        $form = FormBuilder::buildForm('Task', 'POST', 'updateTask', 'update', $id);

        return view('Sprints.tasks.edit')->with(['form' => $form]);
    }

    public function update(TaskUpdateFormRequest $request)
    {
        //update organization changes
    }

    public function delete(TaskDeleteFormRequest $request)
    {
        //remove organization
    }

}