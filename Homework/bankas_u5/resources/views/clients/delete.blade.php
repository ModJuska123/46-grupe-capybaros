@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ar tikrai norite išrtinti kliento duomenis?
                    </div>
                    <div class="card-body">
                        @if($client->ibans()->count() > 0)

                            <p>Įštrinti kliento {{ $client->name }} {{ $client->surname }} negalima, nes jis turi sąskaitų ir lėšų likutį:</p>
                            <ul class="list-group list-group-flush">
                                @foreach ($client->ibans as $iban)
                                    <li class="list-group-item"><a href="{{ route('ibans-show', $iban) }}"> {{ $iban->iban_No }} {{ $iban->balance }} EUR<a/></li>
                                @endforeach
                            </ul>
                            <a href="{{ route('clients-index') }}" class="btn btn-outline-secondary m-1">Atšaukti</a>

                        @else

                            <form action="{{ route('clients-destroy', $client) }}" method="post">
                                <p>Ištrinti kliento sąskaitą:<br>Vardas Pavardė: {{ $client->name }}
                                    {{ $client->surname }}<br>Asmens kodas: {{ $client->akId }}</p>
                                <button type="submit" class="btn btn-outline-danger m-1">Ištrinti</button>
                                <a href="{{ route('clients-index') }}" class="btn btn-outline-secondary m-1">Atšaukti</a>
                                @csrf
                                @method('delete')
                            </form>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Ar tikrai norite išrtinti sąskaitą?')
