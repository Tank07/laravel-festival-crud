@extends('layout.layout')
@section('cont')
<div class="contaner text-center">
    <div class="row justify-content-center p-5">
        <div class="card py-3 text-center" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$song->poster}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">{{$song->author}}</h2>
                        <h5 class="card-title">{{$song->title}}</h5>
                        <p class="card-text">
                            Famosissima canzone dell'anno {{$song->year}} per tutti gli amanti del genere {{$song->genre}}
                        </p>
                        <h5 class="card-title text-capitalize">stato di salute attuale: {{$song->status}}</h5>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <a href="{{route('songs.index')}}" class="btn btn-primary fs-3">Torna ai partecipanti</a>
</div>

@endsection
