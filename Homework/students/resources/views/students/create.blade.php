@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Sukurti naują paskyrą</div>
                    <div class="card-body">
                        <form action="{{route('students-store')}}" method="post">
                            <div class="form-group mb-3">
                                <label>Vardas</label>
                                <input type="text" name="name" class="form-control">
                                <small class="form-text text-muted">Įveskite studento vardą</small>
                            </div>
                            <div class="form-group mb-3">
                                <label>Pavardė</label>
                                <input type="text" name="surname" class="form-control">
                                <small class="form-text text-muted">Įveskite naujo studento pavardę</small>
                            </div>
                            <div class="form-group mb-3">
                                <label>El. paštas</label>
                                <input type="text" name="email" class="form-control">
                                <small class="form-text text-muted">Įveskite naujo studento el. paštą</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Sukurti</button>
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@yield('title', 'Sukurti naują paskyrą')
