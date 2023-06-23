@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Welcome</h1>

@foreach($events as $event)
    <p>{{ $event->title }} - {{ $event->description }}</p>
@endforeach

@endsection
