@extends('layout.layout')
@section('cont')
<table class="table">
    <thead>
        <tr>
            <th scope="col" class="text-capitalize">copertina</th>
            <th scope="col" class="text-capitalize">autore</th>
            <th scope="col" class="text-capitalize">titolo</th>
            <th scope="col" class="text-capitalize">genere</th>
            <th scope="col" class="text-capitalize">anno di uscita</th>
            <th scope="col" class="text-capitalize">stato di salute</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($songs as $song )
        <tr>
            <td>
                <img src="{{ $song->poster }}" alt="" width="100px">
            </td>
            <td>{{ $song->title }}</td>
            <td>{{ $song->author }}</td>
            <td>{{ $song->genre }}</td>
            <td>{{ $song->year }}</td>
            <td>{{ $song->status }}</td>

        </tr>
        @empty

        @endforelse
@endsection