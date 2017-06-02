<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        $organizations = $user->organizations;
        $projects      = $user->projects;

        return view('home')->with(['organizations' => $organizations, 'projects' => $projects]);
    }
}
