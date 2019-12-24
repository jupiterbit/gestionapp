@extends('layout')

@section('title',$project->title)

@section('content')
<h1>{{$project->title}}</h1>  
<p>{{$project->description}}</p>
<small>{{$project->updated_at}}</small>


@endsection