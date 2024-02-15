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
                                <label>IBAN</label>
                                <input type="text" name="iban" class="form-control">
                                <small class="form-text text-muted">Įveskite naujos sąskaitos numerį</small>
                            </div>
                            <div class="form-group mb-4">
                                <label>Likutis</label>
                                <input type="text" name="balance" class="form-control">
                                <small class="form-text text-muted">Įvesti naujo kliento pavardę</small>
                            </div>
                            <div class="form-group mb-4">
                                <select class="form-select" name="mechanic_id">
                                    <option selected value="0">Pasirinkite klientą iš sąrašo</option>
                                    @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->name }} {{ $client->surname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Pridėti</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Įdarbinti naują mechaniką')
