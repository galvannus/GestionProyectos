<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$projects = Project::paginate(7);

	    return view('welcome',[
	    	'projects' => $projects,
	    ]);
    }
}
