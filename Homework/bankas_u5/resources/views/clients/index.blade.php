@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Esamų klientų sąskaitos
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Vardas</th>
                                <th>Pavardė</th>
                                <th>Veiksmai</th>
                            </tr>
                            @forelse($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->surname }}</td>
                                    <td>
                                        <a class="btn btn-outline-success m-1"
                                            href="{{ route('clients-edit', $client->id) }}">Redaguoti</a>
                                        <a class="btn btn-outline-danger m-1"
                                            href="{{ route('clients-delete', $client->id) }}">Trinti</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Clientų nėra</td>
                                </tr>
                            @endforelse
                        </table>
                        <div>
                            <a href="{{ route('clients-create') }}" class="btn btn-outline-success">Pridėti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Esamų klientų sąskaitos')
