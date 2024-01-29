@extends('layout')
@section('body')
<style>
    .bin {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    width: 500px;
    border: 1px solid #ccc;
    padding: 20px;
    margin-top: 20px;
    }
    .square{
        width: 50px;
        height: 50px;
        background-color: crimson;
        display: inline-block;
        margin: 5px;
    }
</style>

    <h1>Now is: {{$count}} Squares</h1>

<form action="{{route('do-squares')}}" method="post">  {{-- do-count yra sugalvota nuoroda web dalyje: ->name('do-count'), iskviesiu funk. route ir liepiu eiti i do-count --}}
    <input type="text" name="count">
    <button type="submit">Create Squares</button>
    @csrf                                      {{-- Cross-site request forgery (CSRF) kodas leidziantis apsisaugoti nuo formos padirbinrjimo --}}
    @method('PUT')                                      
</form>
<form action="{{route('add-squares')}}" method="post">  {{-- do-count yra sugalvota nuoroda web dalyje: ->name('do-count'), iskviesiu funk. route ir liepiu eiti i do-count --}}
    <input type="text" name="count">
    <button type="submit">Add</button>
    @csrf                                      {{-- Cross-site request forgery (CSRF) kodas leidziantis apsisaugoti nuo formos padirbinrjimo --}}
</form>

<div class= "bin">

    {{-- @foreach($squares as $square)
        <div class="square">{{$square}}</div>
    @endforeach --}}

    @forelse($squares as $square)
        <div class="square">{{$square}}</div>
    @empty
        <h2>No Squares</h2>
    @endforelse


</div>

@endsection

@section('title', 'Magic Squares')