<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(){
        return view('worker.index');
    }
    public function all(){
        $data = Worker::all();
        return response()->json($data,200);
    }
    public function show(Worker $id){
        return response()->json($id,200);
    }
    public function store(Request $request){
        Worker::create($request->all());
    }
    public function update(Request $request,Worker $id){
//        $worker = Worker::where('id',$id)->first();
//        $worker->update($request->all());
        $id->update($request->all());
        return response()->json(1,200);
    }
    public function delete(Worker $id){
        $id->delete();
        return response()->json(1,200);
    }
}
