<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Project;

class MainController extends Controller
{
    public function home(){
        return view('pages.home');
    }

}

