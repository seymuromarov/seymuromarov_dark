<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Message;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function saveMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'message' => 'required|min:2',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return $validator->messages();
        }

        Message::create([
            'name' => $request->name,
            'message' => $request->message,
            'email' => $request->email,
            'ip' => $_SERVER['REMOTE_ADDR']
        ]);

        return "ok";
    }

    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
    }

}
