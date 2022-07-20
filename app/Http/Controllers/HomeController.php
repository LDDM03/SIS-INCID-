<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Incident;

use App\Models\User;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function getReport()
    {
        $categories = Category::where('project_id', 1)->get();

        return view('report')->with(compact('categories'));
    }

    public function postReport(Request $request)
    {

        $validated = $request->validate(
        [
        'category_id' => 'sometimes|exists:categories,id',
        'severity' => 'required|in:M,N,A',
        'title' => 'required|min:5',
        'description' => 'required|min:15',
        
        ],
        [
        'category_id.exists' => 'Debes seleccionar una categoria ',
        'title.required' => 'Es necesario ingresar un título para la incidencia.',
        'title.min' => 'El titulo debe presentar al menos 5 caracteres.',
        'description.required' => 'Es necsario ingresar una descripción para incidencia.',
        'description.min' => 'La descripción debe presentar al menos 15 caracteles.'
        ]
    );

        $incident = new Incident();
        $incident-> category_id = $request->input ('category_id') ?: null;
        $incident-> severity = $request->input('severity');
        $incident->title = $request->input('title');
        $incident->description = $request->input('description');
        $incident->client_id = auth()->user()->id;
        $incident->save(); 
        
        return back();

    }


    
}
