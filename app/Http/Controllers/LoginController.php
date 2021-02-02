<?php

namespace App\Http\Controllers;
use App\login;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index(){
        // $logins = Login::all();
        // return view('authentication.login')->with('logins', $logins);
    }

    public function create(){
        return view('authentication.login');
    }

    // public
    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required',
            'password' => 'required|min:8'
        ]);
        //

        $login = New Login([
            'email'=> $request->get('email'),
            'password' => $request->get('password'),
        ]); 
        $login->save();
        // return redirect()->route('index')->with('success', 'Redirected to Home');

    }

}
