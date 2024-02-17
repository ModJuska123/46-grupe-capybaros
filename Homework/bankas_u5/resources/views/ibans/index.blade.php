@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Esamų klientų sąskaitos
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Klientas</th>
                                <th>IBAN</th>
                                <th>Balansas</th>
                                <th>Veiksmai</th>
                            </tr>
                            @forelse($ibans as $iban)
                                <tr>
                                    <td>{{ $iban->client->name }} {{ $iban->client->surname }}</td>
                                    <td>{{ $iban->iban_No }}</td>
                                    <td>{{ $iban->balance }}</td>
                                    <td>
                                        <a class="btn btn-outline-success m-1"
                                            href="{{ route('ibans-edit', $iban) }}">Redaguoti</a>
                                        <a class="btn btn-outline-danger m-1"
                                            href="{{ route('ibans-delete', $iban) }}">Trinti</a>
                                        <a class="btn btn-outline-secondary m-1"
                                            href="{{ route('ibans-show', $iban) }}">Peržiūrėti</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Clientų nėra</td>
                                </tr>
                            @endforelse
                        </table>
                        <div>
                            <a href="{{ route('ibans-create') }}" class="btn btn-outline-success">Pridėti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Esamų klientų sąskaitos')
