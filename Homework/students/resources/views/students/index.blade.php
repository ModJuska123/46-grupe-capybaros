@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Studentų sąrašas</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>El. paštas</th>
                            {{-- <th>El. paštas</th> --}}
                            <th>Veiksmai</th>
                        </tr>
                        @forelse ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->surname }}</td>
                            <td>{{ $student->email }}</td>
                            <td>
                                <a class="btn btn-success m-1" href={{ route('students-edit', $student) }}>Redaguoti</a>  {{-- prie edit g.b. nurodytas id --}}
                                <a class="btn btn-danger m-1" href={{ route('students-delete', $student) }}>Ištrinti</a>
                                <a class="btn btn-secondary m-1" href={{ route('students-show', $student) }}>Peržiūrėti</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">Studentų nėra</td>
                        </tr>
                        @endforelse
                    </table>
                    <div>
                        <a href="{{ route('students-create') }}" class="btn btn-success">Pridėti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', 'Dirbantys Mechanikai')