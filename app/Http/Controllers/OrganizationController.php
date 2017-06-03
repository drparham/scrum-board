<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationIndexFormRequest;
use App\Models\Organization;

class OrganizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(OrganizationIndexFormRequest $request, $organization_id)
    {
        $organization = Organization::where('id', $organization_id)->first();

        return view('Organizations.index')->with(['organization' => $organization]);
    }
}