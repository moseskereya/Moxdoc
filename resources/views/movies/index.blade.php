@extends('layouts.app')

@section('main')
    <div class="container mt-5">
        <div class="row">
             @foreach ($movies as $item)
                <div class="col-md-3">
                    <div class="card">
                    <a href="/movie/{{$item->id}}/show">
                    <img src={{$item->ImgUrl}} class="img-thumbnail" alt={{$item->Title}}>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$item->Title}}</h5>
                        <p class="card-text"><b>Released</b> {{$item->Releasedate}}</p>
                    </div>
                    </div>
                </div>
        @endforeach
        </div>
        {{$movies->links()}}
    </div>
@endsection