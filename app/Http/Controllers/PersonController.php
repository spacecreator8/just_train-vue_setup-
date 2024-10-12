<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
    public function create(){
        $title ='Creation user';
        return view('person.create', compact('title'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'login'=>'',
            'email'=>'',
            'password'=>'',
        ]);
        Person::create($data);
        return redirect()->route('person.login');
    }

    public function login(){
        $title = 'Authorization';
        return view('person.login', compact('title'));

    }

    public function auth(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($data)){
            return redirect()->route('person.acc');
        }else{
            $title = 'Authorization';
            return view('person.login', compact('title'));
        }
    }

    public function account(){
        $data = auth()->user();
        $title= 'Account';
        return view('person.account', compact('data', 'title'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('person.create');
    }


}
