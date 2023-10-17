<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        //definisco un metodo per ottenere la lista dei proj. dal db e restituirla come JSON
        $projects = Project::all();
        return response()->json($projects);
    }
}
