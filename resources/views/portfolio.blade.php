@extends('layout')

@section('title','Portfolio')

@section('content')
<h1>Portfolio</h1> 
<ul>   
    @forelse ($portfolio as $item)
        <li>{{$item['title']}} <pre> {{var_dump($loop)}} </pre></li>
    @empty
        <li>Sin Proyectos</li>
    @endforelse   
</ul>
  
@endsection