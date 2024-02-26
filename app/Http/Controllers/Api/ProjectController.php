<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller{
    public function index() {
        $projects = Project::with('type', 'technologies')->paginate();
        return response()->json([
            "success"=>true,
            "results"=>$projects
        ]);
    }
    public function show(Project $project) {
        return response()->json([
            "success"=>true,
            "results"=>$project
        ]);
    }
}
