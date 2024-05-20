@extends('layouts.app')
@section('title', 'People')
@section('main')
  <ul class="list-group">
    @foreach ($people as $person)
    <li class="list-group-item">
      <div class="">
        {{$person->name}}
      </div>
    </li>
    @endforeach
  </ul>
@endsection