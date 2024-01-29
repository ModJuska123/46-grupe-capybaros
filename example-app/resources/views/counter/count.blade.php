@extends('layout')
@section('body')

@if ($result !== '')
    <h1>Result: {{$result}}</h1>
@endif

<form action="{{route('do-count')}}" method="post">  {{-- do-count yra sugalvota nuoroda web dalyje: ->name('do-count'), iskviesiu funk. route ir liepiu eiti i do-count --}}
    <input type="text" name="count1">
    <input type="text" name="count2">
    <button type="submit">Submit</button>
    @csrf                                      {{-- Cross-site request forgery (CSRF) kodas leidziantis apsisaugoti nuo formos padirbinrjimo --}}
</form>
@endsection

@section('title', 'Magic Counter')