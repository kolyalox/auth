@extends('layouts.app')

@section('content')

    <div class="container">
        <ul class="list-group">
            <li class="list-group-item active">{{$data->name}}</li>
            <li class="list-group-item">{{$data->email}}</li>
            <li class="list-group-item">{{$data->password}}</li>
            <li class="list-group-item">{{$data->created_at}}</li>
        </ul>
    </div>

@endsection
