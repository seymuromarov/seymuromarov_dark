<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {

        if ($request->type == "Packages") {
            $projects = Project::where('type', 'package')->orderBy('id', 'desc')->paginate(3);
        } else {
            $projects = Project::where('type', 'project')->orderBy('id', 'desc')->paginate(3);
        }

        if ($request->ajax()) {
            return view('parts.projects', compact('projects'));
        }

        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('index', compact('projects', 'blogs'));


    }

    public function getBlog($id)
    {
        $blog = Blog::where('id', $id)->first();
        return $blog->body;
    }
}
