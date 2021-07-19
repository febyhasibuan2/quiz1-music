@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Daftar Played</h3>

    <table class="table table-bordered">
        <tr>
            <th>ID ARTIST</th>
            <th>ID ALBUM</th>
            <th>ID TRACK</th>
            <th>PLAYED</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->album_id }}</td>
            <td>{{ $row->track_id }}</td>
            <td>{{ $row->played }}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection