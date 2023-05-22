@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        {{ $project->title }}
    </h2>
<div>
    {{ $project->text }}

    <div>
        <img src="{{ asset('storage/'. $project->image)}}" alt="immagine progetto">
    </div>

    <a class="btn btn-primary" href="{{ route('admin.projects.edit',  $project->slug)}}">Edit</a>
    <a href="{{ route('admin.projects.index')}}">Torna indietro</a>

</div>

</div>
@endsection