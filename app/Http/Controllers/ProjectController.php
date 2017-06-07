<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectIndexFormRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(ProjectIndexFormRequest $request, $project_id)
    {
        $project = Project::where('id', $project_id)->with('sprints')->first();

        return view('Projects.index')->with(['project' => $project]);
    }
}