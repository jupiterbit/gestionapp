@extends('layout')

@section('title','Editar | '.$project->title)

@section('content')
<h1>@lang('Edit Project')</h1> 

<!-- Validadcion de errores del formulario -->
@include('partials.validation-errors')

<form method="POST" action="{{route('projects.update',$project)}}">
    @method('PATCH')
    @include('projects._form',['btnText'=>'Update Project'])  
</form>

<br><small>{{-- $project->description --}}</small>
  
@endsection