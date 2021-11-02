<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.loginBS');
    }

    public function login(Request $request){

        if($request->isMethod('post')) {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                if(Auth::user()->role==1){
                    $request->session()->regenerate();
                    // return redirect()->intended('dashboard');
                    // return view('admin.dashboardBS');
                    return redirect()->route('dashboard');
                } else {
                    return redirect('/');
                }
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        return view('admin.loginBS');
    }

    public function logout() {
        if (Auth::check()){
            Auth::logout();
        }
        return redirect('admin');
    }

    public function dashboard(){
        $user = User::count();
        $job = Job::count();
        $dept = Department::count();
        return view('admin.dashboardBS', ["user"=>$user,"job"=>$job,"dept"=>$dept]);
    }

    public function test(){
        return view('admin.test');
    }
}
