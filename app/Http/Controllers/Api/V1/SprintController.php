<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\SprintDeleteFormRequest;
use App\Http\Requests\SprintEditFormRequest;
use App\Http\Requests\SprintStoreFormRequest;
use App\Http\Requests\SprintUpdateFormRequest;
use App\Models\Sprint;

class SprintController extends Controller
{
    public function create($project_id)
    {
        return view('Sprints.create')->with(['id' => $project_id]);
    }

    public function store(SprintStoreFormRequest $request)
    {
        $sprint = new Sprint();

        $sprint->name       = $request->name;
        $sprint->project_id = $request->project_id;
        $sprint->start_date = $request->start_date;
        $sprint->end_date   = $request->end_date;
        $sprint->save();

        return redirect()->route('sprint', $sprint->id);
    }

    public function edit(SprintEditFormRequest $request, $id)
    {
        return view('Sprints.edit')->with(['id' => $id]);
    }

    public function update(SprintUpdateFormRequest $request)
    {
        //update organization changes
    }

    public function delete(SprintDeleteFormRequest $request)
    {
        //remove organization
    }}