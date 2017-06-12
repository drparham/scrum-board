<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoryDeleteFormRequest;
use App\Http\Requests\UserStoryEditFormRequest;
use App\Http\Requests\UserStoryStoreFormRequest;
use App\Http\Requests\UserStoryUpdateFormRequest;
use App\Models\SprintRow;
use App\Models\UserStory;
use Pta\Formbuilder\Facades\FormBuilder;

class UserStoryController extends Controller
{
    public function create($sprint_id)
    {
        $userStory = new UserStory();
        $userStory->setSetSprintId($sprint_id);

        $form = FormBuilder::buildForm($userStory, 'POST', 'storeStory', 'create', null, null);

        return view('Sprints.userstories.create')->with(['form' => $form]);
    }

    public function store(UserStoryStoreFormRequest $request)
    {
        $row = new SprintRow();
        $row->sprint_id = $request->sprint_id;
        $row->save();

        $userStory = new UserStory();

        $userStory->sprint_id       = $request->sprint_id;
        $userStory->sprint_row_id   = $row->id;
        $userStory->name            = $request->name;
        $userStory->description     = $request->description;
        $userStory->type            = $request->type;
        $userStory->save();

        return redirect()->route('sprints', $request->sprint_id);
    }

    public function edit(UserStoryEditFormRequest $request, $id)
    {
        $form = FormBuilder::buildForm('UserStory', 'POST', 'updateStory', 'update', $id);

        return view('Sprints.userstories.edit')->with(['form' => $form]);
    }

    public function update(UserStoryUpdateFormRequest $request)
    {
        //update organization changes
    }

    public function delete(UserStoryDeleteFormRequest $request)
    {
        //remove organization
    }
}