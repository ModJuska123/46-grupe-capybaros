@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Priskirti klientui naują sąskaitą
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ibans-store') }}" method="post">
                            <div class="form-group mb-4">
                                <label>IBAN</label>
                                <input type="text" name="iban_No" class="form-control" value="{{ old('iban') }}">
                                <small class="form-text text-muted">Įveskite naujos sąskaitos numerį</small>
                            </div>
                            <div class="form-group mb-4">
                                <label>Likutis</label>
                                <input type="text" name="balance" class="form-control" value="{{ old('balance') }}">
                                <small class="form-text text-muted">Įvesti lėšų likutį</small>
                            </div>
                            <div class="form-group mb-4">
                                <select class="form-select" name="client_id">
                                    <option selected >Pasirinkite klientą iš sąrašo</option>
                                    @foreach ($clients as $client)
                                    <option value="{{ $client->id }}"
                                    {{-- @if(old('client_id', $clientId ? $clientId : 0)== $client->id) selected @endif --}}
                                    >{{ $client->name }} {{ $client->surname }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Priskirtite klientui naują sąskaitą</small>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Priskirti</button>
                            
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Sukurti naują sąskaitą')
