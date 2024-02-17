@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><br>{{$iban->iban_No}}; {{$iban->balance}} EUR
                    </div>
                    <div class="card-body">
                        <p>Klientas: <a href="{{route('clients-show', $iban->client->id)}}"> {{ $iban->client->name }} {{ $iban->client->surname }} </a></p>
                        <div>
                            <a href="{{ route('clients-index') }}" class="btn btn-outline-secondary m-1">Visi klientai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Sąskaitos informacija')
