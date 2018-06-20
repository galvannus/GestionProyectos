<?php

namespace App\Http\Controllers;

use App\Career;
use App\Http\Requests\CreateCareerRequest;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function show()
    {
        $careers = Career::paginate(7);
        
        return view('careers.show',[
            'careers' => $careers,
        ]);
    }
    public function showproject($career_name)
    {
        $career = Career::find($career_name);

        return view('careers.showproject',[
            'career' => $career,
        ]);
    }
    
    public function create(CreateCareerRequest $request)
    {
        $career = Career::create([

            'career_name' => $request->input('career'),

        ]);
        return redirect('/carreras/show');
    }
    public function form()
    {
        return view('careers.form');
    }
}
