@extends('layouts.main')

@section('title', 'Products')

@section('content')

<h1>Products</h1>

@if($busca != "")
    <p>O usuário está buscando por {{ $busca }}</p>
@endif

@endsection
