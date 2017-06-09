<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectDeleteFormRequest;
use App\Http\Requests\ProjectEditFormRequest;
use App\Http\Requests\ProjectStoreFormRequest;
use App\Http\Requests\ProjectUpdateFormRequest;
use App\Library\Data\ProjectTypeEnum;
use App\Models\Project;
use Illuminate\Http\Request;
use Pta\Formbuilder\Facades\FormBuilder;

class ProjectController extends Controller
{
    public function create(Request $request, $type, $id)
    {
        $name = title_case(ProjectTypeEnum::byOrdinal($type));

        $project = new Project();
        $project->setProjectableId($id);
        $project->setProjectableType($type);

        $form = FormBuilder::buildForm($project, 'POST', 'storeProject', 'create', null, null);

        return view('Projects.create')->with(['form' => $form, 'type' => $type, 'id' => $id, 'name' => $name]);
    }

    public function store(ProjectStoreFormRequest $request)
    {
        $projectTye = title_case(ProjectTypeEnum::byOrdinal($request->projectable_type));
        $project    = new Project();

        $parentModel   = 'App\\Models\\' . $projectTye;
        $parent        = $parentModel::find($request->projectable_id);

        $project->projectable_id    = $request->projectable_id;
        $project->projectable_type  = $projectTye;
        $project->name              = $request->name;
        $project->description       = $request->description;

        $project->projectable()->associate($parent);
        $project->save();

        return redirect()->route('projects', $project->id);
    }

    public function edit(ProjectEditFormRequest $request, $id)
    {
        $form = FormBuilder::buildForm('Project', 'POST', 'updateProject', 'update', $id);

        return view('Projects.edit')->with(['form' => $form]);
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