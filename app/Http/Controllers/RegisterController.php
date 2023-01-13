<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' =>'required|max:255',
            'username' =>'required|min:3|max:255|unique:users',
            'email' =>'required|email:dns|max:255|unique:users',
            'password' =>'required|min:6|max:255',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        user::create($validatedData);

        // $request->session()->flash('status', 'Task was successful!');

        return redirect('/')->with('success','Registration Successful! Please Login');
    }

    }



