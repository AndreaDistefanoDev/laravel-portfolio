@extends('layouts.projects')
@section('title', $project->name)
@section('content')
    <div class="card">
        <h2>{{ $project->name }}</h2>
        <div class="card-body">
            <p>Customer: {{ $project->customer }}</p>
            <p>Period: {{ $project->period }}</p>
            <p>Description: {{ $project->text }}</p>
        </div>
    </div>
@endsection
