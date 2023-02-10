<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Storage
use Illuminate\Support\Facades\Storage;
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
            'name' => 'required|string|max:64',
            'code_type' => 'required|string|max:32',
            'date' => 'required|date|before:tomorrow',
            'project_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max: 2048',
            'project_description' => 'nullable|string',
            'repo_link' => 'required|url',
        ]);

        // PUT IMG
        $img_path = Storage::put('uploads', $data['project_img']);
        $data['project_img'] = $img_path;

        $project = new Project();

        $project -> name = $data['name'];
        $project -> code_type = $data['code_type'];
        $project -> date = $data['date'];
        $project -> project_img = $data['project_img'];
        $project -> project_description = $data['project_description'];
        $project -> repo_link = $data['repo_link'];
        
        $project -> save();

        return redirect() -> route('project');
    }

    // --- projectDelete

    public function projectDelete(Project $project){

        $project -> delete();

        return redirect() -> route('project');
    }

    // --- projectEdit
    public function projectEdit(Project $project){

        $data = [
            'project' => $project
        ];
        return view('pages.projectEdit', $data);
    }

    public function projectUpdate(Request $request, Project $project){
        // $data = $request -> all();

        $data = $request -> validate([
            'name' => 'required|string|max:64',
            'code_type' => 'required|string|max:32',
            'date' => 'required|date|before:tomorrow',
            'project_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max: 2048',
            'project_description' => 'nullable|string',
            'repo_link' => 'required|url',
        ]);

        // $old_file = $project -> project_img;
        
        // PUT IMG
        $img_path = Storage::put('uploads', $data['project_img']);
        $data['project_img'] = $img_path;

        $project -> name = $data['name'];
        $project -> code_type = $data['code_type'];
        $project -> date = $data['date'];
        $project -> project_img = $data['project_img'];
        $project -> project_description = $data['project_description'];
        $project -> repo_link = $data['repo_link'];
        
        $project -> save();

        // Storage::delete($old_file);
        


        // add parameter Project
        $data = [
            'project' => $project
        ];
        return redirect() -> route('project.show', $data);
    }
}
