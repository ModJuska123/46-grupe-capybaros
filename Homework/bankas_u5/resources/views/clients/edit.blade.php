@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Keisti kliento duomenis
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clients-update', $client) }}" method="post">
                            <div class="form-group mb-4">
                                <label>Vardas</label>
                                <input type="text" name="name" class="form-control" value="{{ $client->name }}">
                                <small class="form-text text-muted">Įvesti naujos kliento vardą</small>
                            </div>
                            <div class="form-group mb-4">
                                <label>Pavardė</label>
                                <input type="text" name="surname" class="form-control" >
                                <small class="form-text text-muted">Įveskite naują kliento pavardę</small>
                            </div>
                            <div class="form-group mb-4">
                                <label>Asmens kodas</label>
                                <input type="text" name="akId" class="form-control" value="{{ $client->surname }}">
                                <small class="form-text text-muted">Įveskite naują kliento asmens kodą</small>
                            </div>
                            <button type="submit" class="btn btn-outline-primary m-1">Keisti</button>
                            <a href="{{ route('clients-index') }}" class="btn btn-outline-secondary m-1">Atšaukti</a>
                            @csrf
                            @method('put')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Kliento duomenų keitimas')
