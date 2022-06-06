@extends('layout.layout')
@section('cont')

    @if (session('message'))
        <div class="alert alert-success container">
            {{ session('message') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="text-capitalize fs-3 text-center">copertina</th>
                <th scope="col" class="text-capitalize fs-3 text-center">autore</th>
                <th scope="col" class="text-capitalize fs-3 text-center">titolo</th>
                <th scope="col" class="text-capitalize fs-3 text-center">genere</th>
                <th scope="col" class="text-capitalize fs-3 text-center">anno di uscita</th>
                <th scope="col" class="text-capitalize fs-3 text-center">stato di salute</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($songs as $song)
                <tr>
                    <td class="text-center">
                        <img src="{{ $song->poster }}" alt="" width="150px">
                    </td>
                    <td class="align-middle fs-5 text-center">{{ $song->title }}</td>
                    <td class="align-middle fs-5 text-center">{{ $song->author }}</td>
                    <td class="align-middle fs-5 text-center">{{ $song->genre }}</td>
                    <td class="align-middle fs-5 text-center">{{ $song->year }}</td>
                    <td class="align-middle fs-5 text-center">{{ $song->status }}</td>
                    <td class="align-middle fs-5 text-center">
                        <a href="{{ route('songs.show', $song->id) }}" class="text-capitalize btn btn-primary">vai alle
                            info</a>
                        <form action="{{ route('songs.destroy', $song->id) }}" method="POST" class="my-3"
                            data-name="{{ $song->title }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="text-capitalize btn btn-danger">
                                elimina
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse
        @endsection
