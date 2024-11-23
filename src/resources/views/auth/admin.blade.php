@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('logo')
<a class="header__login-link" href="/admin">logout</a>
@endsection

@section('content')