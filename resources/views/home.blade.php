@extends('layout.layout')
@section('cont')

  <div class="text-center mt-5 ">
    <h1 class="py-4">Benvenuti alla pagina del Festival</h1>
    <a href="{{route('songs.index')}}" class="btn btn-primary fs-3">Vai ai partecipanti!!</a>
  </div>
 
@endsection