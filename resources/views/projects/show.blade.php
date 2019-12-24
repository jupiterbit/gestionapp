@extends('layout')

@section('title','Portafolio | '.$project->title)

@section('content')
<h1>{{$project->title}}</h1>  
<a href="{{route('projects.edit', $project)}}">@lang('Edit Project')</a>
<p>{{$project->description}}</p>
<small>{{$project->updated_at}}</small>


@endsection