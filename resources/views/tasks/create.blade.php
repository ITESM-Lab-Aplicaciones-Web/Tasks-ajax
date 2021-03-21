@extends('layouts.main')
@section('content')
<h1>Crear una tarea</h1> <br>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    Descripción<input type="text" name="description"> <br>
    <button type="submit" class="btn btn-dark">OK</button>
</form>
<br>
<a href="{{ route('tasks.index') }}" class="btn btn-dark">
    Volver al índice
</a>


@endsection
