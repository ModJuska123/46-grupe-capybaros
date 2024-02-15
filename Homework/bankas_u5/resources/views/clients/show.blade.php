@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Klientas:<br> 
                    Vardas Pavardė: {{ $client->name }} {{ $client->surname }}<br>
                    Asmens Kodas {{ $client->akId }}<br>
                    Iban kodas: {{ $client->iban }}<br>
                    Sąskaitos likutis: {{ $client->balance }}
                    </div>
                    <div class="card-body">
                           
                           
                            <a href="{{ route('clients-index') }}" class="btn btn-outline-secondary m-1">Visi klientai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Cliento informacija')
