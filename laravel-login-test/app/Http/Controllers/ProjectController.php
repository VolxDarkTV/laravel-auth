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

    // --- projectShow
    public function projectShow(Project $project){

        // $project = Project::find($id);

        // $data = [
        //     'project' => $project
        // ];

        return view('pages.projectShow', compact('project'));
    }

    // --- projectCreate
    public function projectCreate(){

        return view('pages.projectCreate');
    }

    // --- projectStore
    public function projectStore(Request $request){

        // $data = $request -> all();
        $data = $request -> validate([
            'name' => 'required|string|max:64|alpha',
            'code_type' => 'required|string|max:32|alpha:ascii',
            'date' => 'required|date|before:today',
            'project_img' => 'required',
            'project_description' => 'nullable|string',
        ]);

        $project = new Project();

        $project -> name = $data['name'];
        $project -> code_type = $data['code_type'];
        $project -> date = $data['date'];
        $project -> project_img = $data['project_img'];
        $project -> project_description = $data['project_description'];
        
        $project -> save();

        return redirect() -> route('guestHome');
    }

    // projectDelete

    public function projectDelete(Project $project){

        $project -> delete();

        return redirect() -> route('guestHome');
    }
}
