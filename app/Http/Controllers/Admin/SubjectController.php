<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    //
    public function index()
    {
        $subjects = Subject::all();
        return view('Admin.subjects.index',[
            'subjects' => $subjects
        ]);
    }

    public function create()
    {
        // dd(123);
        return view('Admin.subjects.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Subject::create([
            'name' => $request->name,
        ]);

        return redirect()->route('subjects.index');
    }
    public function edit($id)
    {
        // dd($id);
        $sub = Subject::where('id','=',$id)->first();

        return view('Admin.subjects.edit',[
            'sub' => $sub
        ]);
    }
    public function update(Request $request,$id)
    {
        Subject::where('id','=',$id)->update([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('message','subject update successfully');
    }

    public function delete($id)
    {
        Subject::where('id','=',$id)->delete($id);
        return redirect()->back()->with('err_message','subject delete successfully');
    }

}
