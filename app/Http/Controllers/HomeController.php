<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Role;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function makeAdmin()
    {
        $u = Auth::user();
        if (!$u->roles()->find(1)) {
            $u->roles()->attach(Role::find(1));
        } else {

        return redirect(route('home'))->with('message','User is already admin');
        }
        return redirect(route('home'))->with('message','User is admin');
    }

    public function removeAdmin()
    {
        $u = Auth::user();
        $u->roles()->detach(Role::find(1));
        return redirect(route('home'))->with('message', 'User is not admin');
    }

    public function admin(Request $request)
    {

        $request->user()->authorizeRoles(['admin', 'editor']);
        return "Admin-Seite";
    }

}
