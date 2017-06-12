<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\SprintColumnDeleteFormRequest;
use App\Http\Requests\SprintColumnEditFormRequest;
use App\Http\Requests\SprintColumnStoreFormRequest;
use App\Http\Requests\SprintColumnUpdateFormRequest;
use App\Models\SprintColumn;
use Pta\Formbuilder\Facades\FormBuilder;

class SprintColumnController extends Controller
{
    public function create($sprint_id)
    {
        $sprintColumn = new SprintColumn();
        $sprintColumn->setSetSprintId($sprint_id);

        $form = FormBuilder::buildForm($sprintColumn, 'POST', 'storeColumn', 'create', null, null);

        return view('Sprints.columns.create')->with(['form' => $form]);
    }

    public function store(SprintColumnStoreFormRequest $request)
    {
        $sprintColumn = new SprintColumn();

        $sprintColumn->sprint_id   = $request->sprint_id;
        $sprintColumn->name        = $request->name;
        $sprintColumn->order       = $request->order;
        $sprintColumn->save();

        return redirect()->route('sprints', $request->sprint_id);
    }

    public function edit(SprintColumnEditFormRequest $request, $id)
    {
        $form = FormBuilder::buildForm('SprintColumn', 'POST', 'updateColumn', 'update', $id);

        return view('Sprints.columns.edit')->with(['form' => $form]);
    }

    public function update(SprintColumnUpdateFormRequest $request)
    {
        //update organization changes
    }

    public function delete(SprintColumnDeleteFormRequest $request)
    {
        //remove organization
    }
}