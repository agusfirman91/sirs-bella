<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        return view('home');
    }

    function data()
    {
        $data = User::where("iduser", "admin")->get();
        foreach ($data as $key => $user) {
            echo "iduser: " . $user->iduser . "</br>password: " . md5($user->password) . '</br>';
        }
    }
}
