@extends('layouts.app')

@section('content')
    <ul style="list-style: none;
    width: 100%;
    height: 400px;
    padding: 0 6%;">
    @foreach($data as $el)
            <li style="width: 250px; display: block; height: 155px; float: left;">
                <div class="container">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">{{$el->name}}</h4>
                        <hr>
                        <a href="{{route('users-info', ['user' => $el->id])}}" class="btn btn-success">Подробнее</a>
                    </div>
                </div>
            </li>
    @endforeach
    </ul>
@endsection
