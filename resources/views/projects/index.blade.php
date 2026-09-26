@extends('layouts.projects')
@section('title', 'My Projects')
@section('content')


    <div class="container">
        <div class="d-flex py-4 gap-2">
            <a class="btn btn-outline-dark" href="{{ route('projects.create') }}">Modifica</a>

            {{--  --}}
        </div>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card">
                        <h2>{{ $project->name }}</h2>
                        <div class="card-body">
                            <p>Customer: {{ $project->customer }}</p>
                            <p>Period: {{ $project->period }}</p>
                            <p>Description: {{ $project->text }}</p>
                            <a href="{{ route('projects.show', $project) }}">Visualizza</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection
