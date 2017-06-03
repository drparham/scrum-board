<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectEditFormRequest;
use App\Http\Requests\ProjectStoreFormRequest;
use App\Http\Requests\ProjectUpdateFormRequest;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function create()
    {
        return view('Projects.create');
    }

    public function store(ProjectStoreFormRequest $request)
    {
        $project = new Project();

        $project->name    = $request->name;
        $project->user_id = (int) $request->user_id;
        $project->save();

        return redirect()->route('projects', $project->id);
    }

    public function edit(ProjectEditFormRequest $request, $id)
    {
        return view('Projects.edit')->with(['id' => $id]);
    }

    public function update(ProjectUpdateFormRequest $request)
    {
        //update organization changes
    }

    public function delete(ProjectDeleteFormRequest $request)
    {
        //remove organization
    }
}