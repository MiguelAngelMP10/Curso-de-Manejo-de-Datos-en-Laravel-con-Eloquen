<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function getAllProjects()
    {
        $projects = Project::all();
        return $projects;
    }

    public function getTenProjects()
    {
        $projects = Project::take(10)->get();
        return $projects;
    }
}