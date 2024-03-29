@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-5">
                <div class="card-header">Ar tikrai ištrinti registraciją?</div>
                <div class="card-body">

                    {{-- @if( $mechanic->trucks()->count() > 0 )

                    <p>Atleidus {{ $mechanic->name }} {{ $mechanic->surname }} bus palikti be priežiūros sunkvežimiai:</p>
                    <ul class="list-group list-group-flush">
                        @foreach ($mechanic->trucks as $truck)
                        <li class="list-group-item"><a href="{{route('trucks-show', $truck)}}">{{ $truck->brand }} {{ $truck->plate }}</a></li>
                        @endforeach
                    </ul>
                    <a href="{{ route('mechanics-index') }}" class="btn btn-secondary mt-3">Atšaukti</a>

                    @else --}}

                    <form action="{{route('students-destroy', $student)}}" method="post">
                        <p>Atleisti {{ $student->name }} {{ $student->surname }}</p>
                        <button type="submit" class="btn btn-danger m-1">Ištrinti</button>
                        <a href="{{ route('students-index') }}" class="btn btn-secondary m-1">Atšaukti</a>
                        @csrf
                        @method('delete')
                    </form>

                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', 'Patvirtinti ištrynimą')