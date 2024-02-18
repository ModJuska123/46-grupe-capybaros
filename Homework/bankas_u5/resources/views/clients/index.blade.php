@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Klientų duomenys
                        <form action="{{ route('clients-index') }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group mb-2">
                                            <label class="mt-4">Rūšiavimas</label>
                                            <select class="form-select" name="sort">
                                                @foreach ($sorts as $sortKey => $sortValue)
                                                    <option value="{{ $sortKey }}"
                                                        @if ($sortBy == $sortKey) selected @endif>
                                                        {{ $sortValue }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-2">
                                            <label class="mt-4">Rodyti puslapyje</label>
                                            <select class="form-select" name="per_page">
                                                @foreach ($perPageSelect as $perPageKey => $perPageValue)
                                                    <option value="{{ $perPageKey }}"
                                                        @if ($perPage == $perPageKey) selected @endif>
                                                        {{ $perPageValue }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-outline-primary mt-5">Rodyti</button>
                                            <a href="{{ route('clients-index') }}"
                                                class="btn btn-outline-secondary mt-5 ms-1">Grįžti</a>
                                        </div>
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
                <div class="mt-3">
                    @if ($perPage)
                        {{ $clients->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('title', 'Esamų klientų sąskaitos')
