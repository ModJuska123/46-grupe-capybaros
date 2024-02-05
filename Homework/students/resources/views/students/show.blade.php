@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-5">
                <div class="card-header">Studentas: {{$student->name}} {{$student->surname}} <br> el. paštas: {{$student->email}}</div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('students-index') }}" class="btn btn-secondary m-1">Visi studentai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', 'Studento informacija')