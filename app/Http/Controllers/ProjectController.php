<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$portfolio= Project::orderBy('created_at','DESC')->get();
        //$portfolio= Project::latest('updated_at')->get();
        //$portfolio= Project::latest()->paginate(3);
        
        return view('projects.index',[
            'projects'=> Project::latest()->paginate()
        ]);
    }

    public function edit(Project $project)
    {
              
        return view('projects.edit',[
            'project'=> $project
        ]);
    }
    public function update(Project $project, SaveProjectRequest $request)
    {
        /*
        $project->update([
            'title'=>request('title'),
            'url'=>request('url'),
            'description'=>request('description'),
        ]);
        */
        $project->update($request->validated());
              
        return redirect()->route('projects.show',$project);
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project) //Route bind 
    {        
        return view('projects.show',[
            'project' => $project
        ]);
    }

    public function create() 
    {        
        return view('projects.create');
    }

    public function store(SaveProjectRequest $request) 
    {           
        /*
        Project::create([
            'title' =>  request('title'),
            'url' => request('url'),
            'description' => request('description')
            ]);
        Project::create(request()->all());
        */
        /*
        $fields=request()->validate([
            'title'=>'required|min:3',
            'url'=>'required',
            'description'=>'required|min:3'
        ]);
        Project::create($fields);
        */
        Project::create($request->validated());
        
        return redirect()->route('projects.index');
    }
    
}
