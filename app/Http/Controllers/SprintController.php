<?php

namespace App\Http\Controllers;

use App\Http\Requests\SprintIndexFormRequest;
use App\Models\Sprint;

class SprintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(SprintIndexFormRequest $request, $sprint_id)
    {
        $sprint = Sprint::where('id', $sprint_id)->with(['sprintRows', 'sprintColumns'])->first();

        return view('Sprints.index')->with(['sprint' => $sprint]);
    }

}