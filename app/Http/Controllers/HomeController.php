<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use App\Course;
class HomeController extends Controller
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
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // return view('home')->with('courses', $user->courses);

        if ($user->role =="Teacher")
            return view('profile.teacher.home')->with('courses', $user->courses);

        elseif ($user->role == "Learner")
            return view('profile.learner.profile')->with('courses', $user->courses);


        elseif ($user->role == "Admin")
            return view('profile.admin.home')->with('courses', $user->courses);


        else return view('home')->with('courses', $user->courses);
    }
}
