@extends('layouts.app')

@section('main')
<div class="container d-flex justify-center align-items-center w-75 h-100 mt-lg-5 m-5">
    <div class="row">
        <div class="col-md-8">
            <img src={{$movie->ImgUrl}} class="img-thumbnail" alt={{$movie->Title}}>
            <div class="card-body">
                <h5 class="card-title">{{$movie->Title}}</h5>
                <p class="card-text">{{$movie->Description}}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <p class="card-text"><small class="text-muted">{{$movie->Releasedate}}</small></p>
                <span class="price">${{ $movie->Price }}</span>
            </div>
        </div>
    </div>

</div>

@endsection

