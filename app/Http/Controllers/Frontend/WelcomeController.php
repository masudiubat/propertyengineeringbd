<?php

namespace App\Http\Controllers\Frontend;

use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function landing()
    {
        $projectCategories = ProjectCategory::with('projects')->get();
        $projects = Project::with('project_categories')->get();

        return view('welcome', ['projectCategories' => $projectCategories, 'projects' => $projects]);
    }
}
