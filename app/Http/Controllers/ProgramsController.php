<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use DB;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::orderBy('created_at','desc')->get();
        return view('programs.index')->with('programs', $programs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'description' => 'required',
            'date' => 'required',
            'filename' => 'required',
            'date_time' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'

        ]);

        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }

        $program = new Program;
        $program->name = $request->input('name');
        $program->place = $request->input('place');
        $program->description = $request->input('description');
        $program->date = $request->input('date');
        $program->filename = $request->input('filename');
        $program->date_time = $request->input('date_time');
        $program->start_time = $request->input('start_time');
        $program->end_time = $request->input('end_time');
        $program->save();

        return redirect('/programs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $program=Program::find($id);
       return view('programs.show')->with('program', $program);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsex
     */
    public function edit($id)
    {
         $program=Program::find($id);
        return view('programs.edit')->with('program', $program);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'description' => 'required',
            'date' => 'required',
            'filename' => 'required',
            'date_time' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'

        ]);

        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }

        $program = Program::find($id);
        $program->name = $request->input('name');
        $program->place = $request->input('place');
        $program->description = $request->input('description');
        $program->date = $request->input('date');
        $program->filename = $request->input('filename');
        $program->date_time = $request->input('date_time');
        $program->start_time = $request->input('start_time');
        $program->end_time = $request->input('end_time');
        $program->save();

        return redirect('/programs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program= Program::find($id);
        $program->delete();

        return redirect('/programs');
    }
}
