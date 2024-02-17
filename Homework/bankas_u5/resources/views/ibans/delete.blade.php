@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ar tikrai norite išrtinti kliento duomenis?
                    </div>
                    <div class="card-body">
                            <form action="{{ route('ibans-destroy', $iban) }}" method="post">
                                <p>Ištrinti sąskaitą:<br>{{ $iban->iban_No }}<br>{{ $iban->balance }} EUR<br></p>
                                <button type="submit" class="btn btn-outline-danger m-1">Ištrinti</button>
                                <a href="{{ route('ibans-index') }}" class="btn btn-outline-secondary m-1">Atšaukti</a>
                                @csrf
                                @method('delete')
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Patvirtinti ištrynimą')
