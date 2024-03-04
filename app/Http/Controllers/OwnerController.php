<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class OwnerController extends Controller
{
    public function index()
    {
        return view('owner.projects.index', [
            'projects' => Project::all(),
        ]);
    }
    public function create()
    {
        return view('owner.projects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $project = new Project();
        $project->name = $request->title;
        $project->description = $request->description;
        $project->status = $request->status;
        if ($request->url) {
            $project->url = $request->url;
        }
        if ($request->github) {
            $project->github = $request->github;
        }
        $project->save();

        return redirect()->route('projects.index');
    }
    public function show($id)
    {
        return view('owner.projects.show', [
            'project' => Project::findOrFail($id),
        ]);
    }
    public function edit(Project $project)
    {
        return view('owner.projects.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $project->name = $request->title;
        $project->description = $request->description;
        $project->status = $request->status;
        if ($request->url) {
            $project->url = $request->url;
        }
        if ($request->github) {
            $project->github = $request->github;
        }
        $project->save();

        return redirect()->route('projects.index');
    }
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
