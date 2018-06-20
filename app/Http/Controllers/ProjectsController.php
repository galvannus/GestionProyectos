<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\CreateProjectRequest; 
use Illuminate\Http\Request;
use DB;
use App\Career;
use App\Http\Requests\CreateCareerRequest;

class ProjectsController extends Controller
{
    public function show()
    {
        $projects = Project::paginate(7);

	    return view('projects.show',[
	    	'projects' => $projects,
	    ]);
        
    }

    public function create(CreateProjectRequest $request)
    {
        if($request->hasFile('documents')){
            $file = $request->file('documents');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/documents/', $name);
        }
        $project = Project::create([
            
            
            'project_name' => $request->input('project'),
            'objetive' => $request->input('objetivo'),
            'description' => $request->input('descipcion'),
            'specific_objetive' => $request->input('especifico'),
            'justification' => $request->input('justificacion'),
            'author' => $request->input('autor'),
            'career_id' => $request->input('career'),
            'documents' => $name
            
        ]);
        return redirect('/projects/show');
    }
    public function form()
    {   
        $careers = DB::table('careers')->get();
        return view('projects.form',[
            'careers' => $careers,
        ]);
    }
    public function detalles(Project $project)
    {
        return view('projects.detalles', [
            'project' => $project,
        ]);
    }
}
