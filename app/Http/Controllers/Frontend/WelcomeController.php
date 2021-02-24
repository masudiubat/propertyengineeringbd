<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
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

        $products = Product::with('product_categories')->orderBy('id', 'DESC')->take(5)->get();

        return view('welcome', ['products' => $products, 'projectCategories' => $projectCategories, 'projects' => $projects]);
    }
}
