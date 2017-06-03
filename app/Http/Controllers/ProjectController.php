<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(ProjectIndexFormRequest $request, $project_id)
    {
        $project = Project::where('id', $project_id)->first();

        return view('Projects.index')->with(['project' => $project]);
    }
}