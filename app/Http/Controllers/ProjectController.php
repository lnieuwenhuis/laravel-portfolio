<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('owner.projects.index');
    }
    public function create()
    {
        return view('owner.projects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'url' => 'required',
            'github' => 'required',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->url = $request->url;
        $project->github = $request->github;
        $project->save();

        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return view('owner.projects.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'url' => 'required',
            'github' => 'required',
        ]);

        $project->name = $request->name;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->url = $request->url;
        $project->github = $request->github;
        $project->save();

        return redirect()->route('projects.index');
    }
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
