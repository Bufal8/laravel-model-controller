@extends('layouts.main-layout')

@section('content')
    <h1>Movies</h1>
    <div class="container">
        <div class="row ">
            @foreach($movies as $movie)
            <div class="p-3 col-5">
                <div class="card  card-header bg-primary text-light">
                    <h4>{{ $movie -> title}}</h4>
                </div>
                <div class="card-body  bg-dark text-light">
                    <h6>Rating: </h6> <strong>{{ $movie -> vote}}</strong>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection