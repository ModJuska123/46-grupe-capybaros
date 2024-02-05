@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-5">
                <div class="card-header">Keisti studento duomenis</div>
                <div class="card-body">
                    <form action="{{route('students-update', $student)}}" method="post">
                        <div class="form-group mb-3">
                            <label>Vardas</label>
                            <input type="text" name="name" class="form-control" value="{{$student->name}}">
                            <small class="form-text text-muted">Įveskite naują studento vardą</small>
                        </div>
                        <div class="form-group mb-3">
                            <label>Pavardė</label>
                            <input type="text" name="surname" class="form-control" value="{{$student->surname}}">
                            <small class="form-text text-muted">Įveskite naują studento pavardę</small>
                        </div>
                        <div class="form-group mb-3">
                            <label>El. paštas</label>
                            <input type="text" name="email" class="form-control" value="{{$student->email}}">
                            <small class="form-text text-muted">Įveskite naują studento el. paštą</small>
                        </div>
                        <button type="submit" class="btn btn-primary m-1">Keisti</button>
                        <a href="{{ route('students-index') }}" class="btn btn-secondary m-1">Atšaukti</a>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', 'Studento duomenų keitimas')