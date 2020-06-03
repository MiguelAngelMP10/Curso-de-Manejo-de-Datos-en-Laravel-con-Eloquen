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

    public function insertProject()
    {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();

        return "Guardado";
    }

    public function updateProject()
    {
        $project = Project::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();

        return "Actualizado";
    }

    public function updateNameAllProjectsInactive()
    {
        Project::where('is_active', 0)
            ->update(['name' => 'Nuevo nombre al proyecto ♥']);
        return "Actualizaodos nombre de proyectos";
    }
}