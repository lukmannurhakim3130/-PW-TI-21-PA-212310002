@extends('layouts.main')
@section('content')
<table class="table">
    <tr>
        <th>NPM</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Alamat</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{ $d['npm'] }}</td>
        <td>{{ $d['name'] }}</td>
        <td>{{ $d['gender'] }}</td>
        <td>{{ $d['alamat'] }}</td>
    </tr>
    @endforeach
</table>    
@endsection