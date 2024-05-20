@extends('layouts.app')
@section('title', 'Index')
@section('main')
    <ul class="list-group">
        @foreach ($memos as $memo)
        <li class="list-group-item">
            <a href="/memo/{{$memo->id}}">
                <div class="user">
                    {{$memo->userName()}}
                </div>
                <div class="memo">
                    {{$memo->text}}
                </div>
            </a>
        </li>
        @endforeach
    </ul>
@endsection