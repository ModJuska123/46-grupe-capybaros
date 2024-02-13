@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sukurti naujo kliento sąskaitą
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clients-store') }}" method="post">
                            <div class="form-group mb-4">
                                <label>Vardas</label>
                                <input type="text" name="name" class="form-control">
                                <small class="form-text text-muted">Įvesti naujos kliento vardą</small>
                            </div>
                            <div class="form-group mb-4">
                                <label>Pavardė</label>
                                <input type="text" name="surname" class="form-control">
                                <small class="form-text text-muted">Įvesti naujo kliento pavardę</small>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Sukurti</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Įdarbinti naują mechaniką')
