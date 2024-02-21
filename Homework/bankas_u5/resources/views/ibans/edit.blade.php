@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Papildyti arba nuskaičiuoti lėšas
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ibans-update', $iban) }}" method="post">
                            <div class="form-group mb-4">
                                <label>Atlikti veiksmus sąskaitos viduje: {{ $iban->iban_No }}</label>
                            </div>
                            <div class="form-group mb-4">
                                <label>Likutis: {{ $iban->balance }} EUR</label>
                                <input type="text" name="addfunds" class="form-control">
                                <small class="form-text text-muted">Papildyti sąskaitą lėšomis EUR</small>

                                <input type="text" name="reducefunds" class="form-control">
                                <small class="form-text text-muted">Nuskaičiuoti lėšų nuo sąskaitos EUR</small>
                            </div>


                            <label class="mb-3 mt-3">Pervesti lėšas tarp sąskaitų iš {{ $iban->iban_No }}:</label>
                            {{-- <div class="mb-4">
                                <select class="form-select" name="donor_id">
                                    <option selected>Pasirinkite lėšų siuntėją</option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->surname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group mb-4">
                                <select class="form-select" name="recipient_id">
                                    <option selected>Pasirinkite lėšų gavėją</option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->surname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="transfer" class="form-control">
                                <small class="form-text text-muted">Pasirinkti sumą EUR</small>
                            </div>
                            <button type="submit" class="btn btn-outline-primary m-1">Išsaugoti</button>
                            <a href="{{ route('ibans-index') }}" class="btn btn-outline-secondary m-1">Atšaukti</a>
                            @csrf
                            @method('put')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Redaguoti sąskaitą')
