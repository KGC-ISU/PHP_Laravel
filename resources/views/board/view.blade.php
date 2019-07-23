@extends('layout/master')

@section('content')

    <h2 class="mt-5">글 보기</h2>
    <table class="table table-striped mt-3">
        <tr>
            <th>글번호</th>
            <th width="60%">글제목</th>
            <th>글쓴이</th>
        </tr>
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->user()->first()->name}}</td>
        </tr>
    </table>

    <table class="table table-striped">
        <tr>
            <th width="100%">글 내용</th>
        </tr>
        <tr style="background-color: rgba(0, 0, 0, 0.15); color: #000;">
            <td>{{$data->content}}</td>
        </tr>
    </table>

@endsection