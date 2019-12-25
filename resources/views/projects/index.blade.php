@extends('layout')

@section('title','Portfolio')

@section('content')
<h1>Portfolio</h1> 

<a href="{{route('projects.create')}}">@lang('New Project')</a>

<ul>   
    @forelse ($projects as $project)
        <li><a href="{{route('projects.show',$project)}}">{{$project->title}}</a></li> 
    @empty
        <li>Sin Proyectos</li>
    @endforelse   
</ul>
{{ $projects->links() }}

<br><small>{{-- $project->description --}}</small>
  
@endsection