@extends('layout')

@section('title','Crear Proyecto')

@section('content')
<h1>@lang('Create New Project')</h1> 

<!-- Validadcion de errores del formulario -->
@include('partials.validation-errors')

<form method="POST" action="{{route('projects.store')}}">  
    @include('projects._form',['btnText'=>'Create Project'])   
</form>


<br><small>{{-- $project->description --}}</small>
  
@endsection