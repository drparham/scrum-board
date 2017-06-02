<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationDeleteFormRequest;
use App\Http\Requests\OrganizationEditFormRequest;
use App\Http\Requests\OrganizationStoreFormRequest;
use App\Http\Requests\OrganizationUpdateFormRequest;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function create()
    {
        //show create org form
    }

    public function store(OrganizationStoreFormRequest $request)
    {
        //store org submission
    }

    public function edit(OrganizationEditFormRequest $request)
    {
        //show edit form
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