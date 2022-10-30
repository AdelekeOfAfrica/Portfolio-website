<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return  Inertia::render('Projects/Index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'image'=>['required','image'],
            'name'=>['required','min:3'],
            'skill_id'=>['required'],
            'project_url'=>['required']

        ]);

        if($request->hasFile('image')){
            $image = $request->file('image')->store('projects');//projects is the name of the folder where the image will be solved  //
            Project::create([
                'skill_id'=>$request->skill_id,
                'name'=>$request->name,
                'image'=>$image,
                'project_url'=>$request->project_url

            ]);
            return Redirect::route('projects.index')->with('message','Project Created Successfully');
        }
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $skills = Skill::all();
        return Inertia::render('Projects/Edit',compact('project','skills'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $image = $project->image;
        $request->validate([
            'name'=>['required','min:3'],
            'skill_id'=>['required'],
        ]);
        if($request->hasFile('image')){
            Storage::delete($project->image);
            $image= $request->file('image')->store('projects');

        }
        $project->update([
            'name'=>$request->name,
            'skill_id'=>$request->skill_id,
            'image'=>$image,
            'project_url'=>$request->project_url,

        ]);
        return Redirect::route('projects.index')->with('message','Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        Storage::delete($project->image);
        $project->delete();

        return Redirect::back()->with('message','Project Deleted Successfully');
    }
}
