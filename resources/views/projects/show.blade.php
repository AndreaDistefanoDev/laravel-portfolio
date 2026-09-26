@extends('layouts.projects')
@section('title', $project->name)
@section('content')
    <div class="d-flex py-4 gap-2">
        <a class="btn btn-outline-warning" href="{{ route('projects.edit', $project->id) }}">Modifica</a>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
        </button>
        {{--  --}}
    </div>
    <div class="card">
        <h2>{{ $project->name }}</h2>
        <div class="card-body">
            <p>Customer: {{ $project->customer }}</p>
            <p>Period: {{ $project->period }}</p>
            <p>Description: {{ $project->text }}</p>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Vuoi eliminare il progetto
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        <input type="submit" class="btn btn-outline-danger" type="text" value="Elimina definitivamente">
                        @csrf
                        @method('DELETE')

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
