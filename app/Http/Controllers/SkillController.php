<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Resources\SkillResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $skills=SkillResource::collection(skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('Skills/Create');//these goes into the skil folder then create.vue 
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
            'name'=>['required','min:3']

        ]);

        if($request->hasFile('image')){
            $image = $request->file('image')->store('skills');//skills is the name of the folder //
            Skill::create([
                'name'=>$request->name,
                'image'=>$image
            ]);
            return Redirect::route('skills.index')->with('message','Skill Created Successfully');
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
    public function edit(Skill $skill)
    {
        //
        
        return Inertia::render('Skills/Edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $image=$skill->image;
        $request->validate([
            'name'=>['required','min:3'],
        ]);

        if($request->hasfile('image')){
            Storage::delete($skill->image);
            $image = $request->file('image')->store('skills');
        }

        $skill->update([
            'name'=>$request->name,
            'image'=>$image
        ]);
        return Redirect::route('skills.index')->with('message','Skill Updated Successfully');
    }  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
        Storage::delete($skill->image);
        $skill->delete();

        return Redirect::back()->with('message','Skill Deleted Successfully');
    }
}
