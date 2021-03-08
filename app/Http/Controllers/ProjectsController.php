<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        # code...
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        //
        return view('projects.index', [
            'projects'=>Project::orderBy('id', 'DESC')->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create', [
            'project'=>new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $forValidated)
    {
        //
        Project::create($forValidated->validated());
        return redirect()->route('projects.index')->with('status', 'El proyecto ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return view('projects.show',[
            'project'=>Project::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('projects.edit',[
            'project'=>Project::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, SaveProjectRequest $validateForm)
    {
        //
        $project = Project::findOrFail($id);
        $project->update($validateForm->validated());

        return redirect()->route('projects.show', $id)->with('status', 'El proyecto ha sido actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Project::destroy($id);
        return redirect()->route('projects.index')->with('status', 'El proyecto ha sido eliminado con exito');
    }
}
