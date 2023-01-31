<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbacks;
use App\Models\Requests;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $feedback = Feedbacks::all();
        $reqs = Requests::all();
        return view('admin.admin', compact('feedback','reqs'));
    }

}
