@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Esamų klientų sąskaitos
                    </div>


                    <form action="{{ route('ibans-index') }}">
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
                                    <div class="form-group mb-3">
                                        <label class="mt-4">Filtruoti</label>
                                        <select class="form-select mt-2" name="client_id">
                                        <option value="0">Visi</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}"
                                                    @if ($clientId == $client->id) selected @endif>
                                                    {{ $client->name }} {{ $client->surname }}</option>
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
                                        <a href="{{ route('ibans-index') }}"
                                            class="btn btn-outline-secondary mt-5 ms-1">Grįžti</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


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
                                            href="{{ route('ibans-edit', $iban) }}">Lėšos</a>
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
                <div class="mt-3">
                    @if ($perPage)
                        {{ $ibans->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('title', 'Esamų klientų sąskaitos')
