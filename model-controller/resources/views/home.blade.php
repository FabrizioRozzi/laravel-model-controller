@extends('layout.main')

@section('content')
  <ul>
    @foreach ($films as $film)
      <li>Titolo: {{$film['title']}}</li>
      <li>Titolo originale: {{$film['original_title']}}</li><hr>
    @endforeach
  </ul>
@endsection