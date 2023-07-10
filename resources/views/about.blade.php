<!DOCTYPE html>
<!-- Хранится в resources/views/about.blade.php -->

@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('header', 'О блоге')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <p>Эксперименты с Laravel на Хекслете</p>
@endsection