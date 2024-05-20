@extends('layouts.app')
@section('title', 'Show')
@section('main')
    <ul class="list-group">
        <li class="list-group-item">
            {{$person->name}}
        </li>
        <li class="list-group-item">
        <div class="">
            {{$memo->text}}
        </div>
        </li>
  </ul>
@endsection