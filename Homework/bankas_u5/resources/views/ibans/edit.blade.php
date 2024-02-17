@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redaguoti sąskaitą
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ibans-update', $iban) }}" method="post">
                            <div class="form-group mb-4">
                                <label>IBAN: {{ $iban->iban_No }}</label>
                                {{-- <input type="text" name="iban_No" class="form-control">
                                <small class="form-text text-muted">Įveskite naują sąskaitos numerį</small> --}}
                            </div>
                            <div class="form-group mb-4">
                                <label>Likutis: {{ $iban->balance }} EUR</label >
                                <input type="text" name="addfunds" class="form-control">
                                <small class="form-text text-muted">Papildyti sąskaitą lėšomis</small>
                                
                                <input type="text" name="reducefunds" class="form-control">
                                <small class="form-text text-muted">Nuskaičiuoti lėšų nuo sąskaitos</small>
                            </div>
                            {{-- <div class="form-group mb-4">
                                <select class="form-select" name="client_id">
                                    <option selected >Pasirinkite klientą iš sąrašo</option>
                                    @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->name }} {{ $client->surname }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Priskirtite klientui naują sąskaitą</small>
                            </div> --}}
                            <button type="submit" class="btn btn-outline-primary m-1">Išsaugoti</button>
                            <a href="{{ route('ibans-index') }}" class="btn btn-outline-secondary m-1">Atšaukti</a>
                            @csrf
                            @method('put')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Redaguoti sąskaitą')
