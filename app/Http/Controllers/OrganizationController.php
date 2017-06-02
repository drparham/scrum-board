<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationIndexFormRequest;
use App\Models\Organization;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(OrganizationIndexFormRequest $request, $organization_id)
    {
        $user         = Auth::user();
        $organization = Organization::where('id', $organization_id)->first();

        return view('home')->with(['organization' => $organization]);
    }
}