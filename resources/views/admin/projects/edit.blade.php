@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        edit proj
    </h2>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div>
    <a href="{{ route('admin.projects.index')}}">torna indietro</a>

    <form action="{{ route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea type="text" class="form-control" id="text" name="text">{{ old('text')}}</textarea>
          </div>
          <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>

</div>
@endsection