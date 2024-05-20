@extends('layouts.app')
@section('title', 'Add')
@section('main')
    <ul class="list-group">
        @foreach ($memos as $memo)
        <li class="list-group-item">
        <div class="user">
            {{$memo->userName()}}
        </div>
        <div class="memo">
            {{$memo->text}}
        </div>
        </li>
        @endforeach
    </ul>
@endsection