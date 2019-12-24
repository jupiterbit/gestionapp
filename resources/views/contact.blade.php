@extends('layout')

@section('title','Contact')

@section('content')
<h1>{{__('Contact')}}</h1>   


<form method="POST" action="{{route('messages.store')}}">
    @csrf <!-- token para formularios: blade -->
    First name:<br>
<input name="name" placeholder="name" value="{{old('name')}}"><br>   
    {!! $errors->first('name', '<small>:message</small><br>') !!} 
    Email:<br>
    <input type="email" name="email" placeholder="email" value="{{old('email')}}"><br>
    {!! $errors->first('email', '<small>:message</small><br>') !!} 
    Subject:<br>
    <input name="subject" placeholder="subject" value="{{old('subject')}}"><br>
    {!! $errors->first('subject', '<small>:message</small><br>') !!} 
    Mensaje:<br>
    <textarea name="content" placeholder="Mensaje ..." >{{old('content')}}</textarea><br>
    {!! $errors->first('content', '<small>:message</small><br>') !!} 
    <button type="submit">Enviar</button>
</form>

@endsection