<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data_student = \App\Models\Students::all();
        // dd($data_student);
        return view('index', ['data_student' => $data_student]);
    }

    public function create(Request $request){
        \App\Models\Students::create($request->all());
        // dd($data_student);
        return redirect('/studentdata')->with('success', 'New Data Insert');
    }

    public function update(Request $request, $id){
        $data_student = \App\Models\Students::find($id);
        $data_student -> update($request->all());
        // return view('edit', ['data_student'=>$data_student]);
        return redirect('/studentdata')->with('success', 'Data Succesfully Updated');
    }

    public function delete($id){
        $data_student = \App\Models\Students::find($id);
        $data_student -> delete($data_student);
        return redirect('/studentdata')->with('success', 'Data Succesfully Deleted');
    }
}
