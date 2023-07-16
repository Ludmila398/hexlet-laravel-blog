<!DOCTYPE html>

@extends('layouts.app')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>{{$article->name}}</h1>
    
    <div>{{$article->body}}</div>
@endsection
