@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Daftar Track</h3>

    <table class="table table-bordered">
        <tr>
            <th>ID TRACK</th>
            <th>TRACK NAME</th>
            <th>ID ARTIST</th>
            <th>ID ALBUM</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->track_id }}</td>
            <td>{{ $row->track_name }}</td>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->album_id }}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection