@extends('layout')

@section('title','Portafolio | '.$project->title)

@section('content')
<h1>{{$project->title}}</h1>  
<a href="{{route('projects.edit', $project)}}">@lang('Edit Project')</a>
<form method="POST" action="{{route('projects.destroy', $project)}}">
    @csrf @method('DELETE')
    <button>Delete</button>
</form>
<p>{{$project->description}}</p>
<small>{{$project->updated_at}}</small>


@endsection