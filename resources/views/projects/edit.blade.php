@extends('layouts.projects')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h2>
                        @yield('title', 'Modifica il progetto')
                    </h2>
                    <div class="card-body">
                        <form action="{{ route('projects.update', $project->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    value={{ $project->name }}>
                            </div>
                            <div class="form-group">
                                <label for="customer">Customer</label>
                                <input type="text" name="customer" class="form-control" id="customer"
                                    value="{{ $project->customer }}">
                                <label for="period">Period</label>
                                <input type="text" name="period" class="form-control" id="period"
                                    value="{{ $project->period }}">
                            </div>
                            <div class="form-group">
                                <label for="text">Text</label>
                                <textarea name="text" class="form-control" width="100%" id="text">{{ $project->text }}</textarea>
                            </div>
                            <input type="submit" value="Salva" class="btn btn-primary">
                        </form>
                    </div>
