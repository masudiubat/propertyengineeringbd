<?php

namespace App\Http\Controllers\Frontend;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function projects()
    {
        return view('pages.frontend.project');
    }

    public function show($id)
    {
        $project = Project::with('project_galleries', 'project_categories')->findOrFail($id);
        return view('pages.frontend.project-show', ['project' => $project]);
    }
}
