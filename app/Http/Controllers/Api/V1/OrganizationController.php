<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationDeleteFormRequest;
use App\Http\Requests\OrganizationEditFormRequest;
use App\Http\Requests\OrganizationStoreFormRequest;
use App\Http\Requests\OrganizationUpdateFormRequest;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function create()
    {
        return view('Organizations.create');
    }

    public function store(OrganizationStoreFormRequest $request)
    {
        $org = new Organization();

        $org->name    = $request->name;
        $org->user_id = (int) $request->user_id;
        $org->save();

        return redirect()->route('organizations', $org->id);
    }

    public function edit(OrganizationEditFormRequest $request, $id)
    {
        return view('Organizations.edit')->with(['id' => $id]);
    }

    public function update(OrganizationUpdateFormRequest $request)
    {
        //update organization changes
    }

    public function delete(OrganizationDeleteFormRequest $request)
    {
        //remove organization
    }
}