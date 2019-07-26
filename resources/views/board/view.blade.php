@extends('layout/master')

@section('content')

    <h1>{{ $data->title }}</h1>
    
    <div class="card">
        <div class="card-header">
            <span>{{ $data->user()->first()->name }} &nbsp</span>
            <span>{{ $data->created_at }}</span>
        </div>
        <div class="card-body">
            @foreach($files as $fileName)
                <img src="/image/{{ $fileName }}" alt="image">
            @endforeach
            {{ $data->content }}
        </div>
    </div>



@endsection