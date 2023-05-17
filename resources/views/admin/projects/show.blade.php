@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        {{ $project->title }}
    </h2>
<div>
    {{ $project->text }}

    <a href="{{ route('admin.projects.index')}}">Clicca qui</a>

</div>

</div>
@endsection