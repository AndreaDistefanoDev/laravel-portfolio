@extends('layouts.projects')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h2>
                        @yield('title', 'Crea un nuovo progetto')
                    </h2>
                    <div class="card-body">
                        <form action="{{ route('projects.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="customer">Customer</label>
                                <input type="text" name="customer" class="form-control" id="customer">
                                <label for="period">Period</label>
                                <input type="text" name="period" class="form-control" id="period">
                            </div>
                            <div class="form-group">
                                <label for="text">Text</label>
                                <textarea name="text" class="form-control" width="100%" id="text"></textarea>
                            </div>
                            <input type="submit" value="Crea progetto" class="btn btn-primary">
                        </form>
