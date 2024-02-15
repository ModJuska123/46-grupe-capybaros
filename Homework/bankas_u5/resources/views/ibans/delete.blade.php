@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ar tikrai norite išrtinti sąskaitą?
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clients-destroy', $client) }}" method="post">
                           <p>Ištrinti kliento sąskaitą:<br>Vardas Pavardė: {{ $client->name }} {{ $client->surname }}<br>Asmens kodas: {{ $client->akId }}</p>
                            <button type="submit" class="btn btn-outline-danger m-1">Ištrinti</button>
                            <a href="{{ route('clients-index') }}" class="btn btn-outline-secondary m-1">Atšaukti</a>
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Ar tikrai norite išrtinti sąskaitą?')
