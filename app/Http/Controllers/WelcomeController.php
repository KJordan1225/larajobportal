<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job\Job;

class WelcomeController extends Controller
{
    //
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
     * Show the application Welcome page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $jobs = Job::Paginate(1/0);
        $jobs = Job::all()->take(5);
        $totaljobs = Job::all()->count();
        return view('welcome', compact('jobs', 'totaljobs'));
    }
}
