<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function service(){
        $services = Service::orderby('created_at', 'DESC')->get();
        return view('front.services', compact('services'));
    }

    public function single($id){
        $service = Service::FindOrFail($id);
        return view('front.single', compact('service'));
    }


    public function portfolio(){
        $projects = Project::orderby('created_at', 'DESC')->get();
        return view('front.portfolio', compact('projects'));
    }

    public function contact(){
        return view('front.contact');
    }
}
