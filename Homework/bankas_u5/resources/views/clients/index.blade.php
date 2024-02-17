@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Klientų duomenys
                        <form>
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Rūšiuoti klientus</option>
                                            <option value="1">A-Z</option>
                                            <option value="2">Z-A</option>
                                            <option value="3">Nerūšiuota</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                                            href="{{ route('clients-delete', $client->id) }}">Trinti
                                            [{{ $client->ibans()->count() }}]</a>
                                        <a class="btn btn-outline-secondary m-1"
                                            href="{{ route('clients-show', $client->id) }}">Peržiūrėti</a>
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
