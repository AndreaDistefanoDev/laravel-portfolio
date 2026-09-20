@extends('layouts.projects')
@section('title','My Projects')
@section('content')

<div class="container">
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
    <li>{{ $project->name }}</li>
    <li>{{ $project->customer }}</li>
    <li>{{ $project->period }}</li>
    <li>{{ $project->text }}</li>



@endsection