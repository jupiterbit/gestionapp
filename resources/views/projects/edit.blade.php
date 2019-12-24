@extends('layout')

@section('title','Editar | '.$project->title)

@section('content')
<h1>@lang('Edit New Project')</h1> 
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error )
<li>{{$error}}</li>
    @endforeach
    
</ul>
    
@endif

<form method="POST" action="{{route('projects.update',$project)}}">
    @csrf @method('PATCH')
<label for="">Titulo del Proyecto <br> <input type="text" name="title" placeholder="Escribe un titulo" value="{{ old('title',$project->title)}}"></label> <br>
    <label for="">URL <br> <input type="text" name="url" placeholder="Escribe una url" value="{{old('url',$project->url)}}"></label> <br>
    <label for="">Descripcion del Proyecto <br> <textarea name="description" >{{old('description',$project->description)}}</textarea></label>  <br>
    <button>@lang('Update Project')</button>
</form>

<br><small>{{-- $project->description --}}</small>
  
@endsection