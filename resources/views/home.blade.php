@extends('layouts.main-layout')

@section('content')
    <h1>Movies</h1>
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-3 card">
                {{ $movie -> title}}
            </div>
            @endforeach
        </div>
    </div>
@endsection