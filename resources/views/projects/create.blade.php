@extends('layout')

@section('title','Crear Proyecto')

@section('content')
<h1>@lang('Create New Project')</h1> 
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error )
<li>{{$error}}</li>
    @endforeach
    
</ul>
    
@endif

<form method="POST" action="{{route('projects.store')}}">
    @csrf
    <label for="">Titulo del Proyecto <br> <input type="text" name="title" placeholder="Escribe un titulo"></label> <br>
    <label for="">URL <br> <input type="text" name="url" placeholder="Escribe una url"></label> <br>
    <label for="">Descripcion del Proyecto <br> <textarea name="description">Escribe una descripcion</textarea></label>  <br>
    <button>@lang('Create Project')</button>
</form>


<br><small>{{-- $project->description --}}</small>
  
@endsection