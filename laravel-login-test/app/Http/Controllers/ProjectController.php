<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Project;

class ProjectController extends Controller
{
    public function portfolio(){

        $projects = Project::all();
        $data = [
            'projects' => $projects,
        ];

        return view('pages.portfolio', $data);
    }
}
