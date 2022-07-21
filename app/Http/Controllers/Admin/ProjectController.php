<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::withTrashed()->get();
        return view ('admin.projects.index')->with(compact('projects'));
        

    }

    public function store(Request $request) 
    {
        $validated = $request->validate(
            [
            'name' => 'required',
            //'description' => '',
            'start' => 'date'
            
            ],
            [
            
            'name.required' => 'Es necesario ingresar un nombre para el proyecto.',
            'start.date' => 'La fecha no tiene formato adeacuado.'
            ]
        );


        Project::create($request->all());

        return back()->with('notification', 'El proyecto se ha registrado exitosamente.');
    }

    public function edit($id)
    {
        $project= Project::find($id);
        return view ('admin.projects.edit')->with(compact('project'));
    }

    public function update($id, Request $request)
    {
        $validated = $request->validate(
            [
            'name' => 'required',
            //'description' => '',
            'start' => 'date'
            
            ],
            [
            
            'name.required' => 'Es necesario ingresar un nombre para el proyecto.',
            'start.date' => 'La fecha no tiene formato adeacuado.'
            ]
        );

        Project::find($id)->update($request->all());
        return back()->with('notification', 'El proyecto se ha actualizado exitosamente.');
    }

    public function delete ($id)
    {
        Project::find($id)->delete();
        return back()->with('notification', 'El proyecto se ha deshabilitado correctamente.');

    }

    public function restore($id)
    {
        Project::withTrashed()->find($id)->restore();
        
        return back()->with('notification', 'El proyecto se ha habilitado correctamente.');

    }

}
