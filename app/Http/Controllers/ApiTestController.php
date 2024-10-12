<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiTestRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    public function index(){
        $data = Person::all();
        return response()->json($data,200);
    }

    public function store(Request $request){
        $data = $request->validated();
        Person::create($data);
        return redirect()->route('person.login');
    }

    public function testapi(){
        return view('test.showStr', ['title'=>'СУКА!']);
    }
    public function test2(Request $request){
        return $request;
    }
}
