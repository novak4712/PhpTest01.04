@extends('layouts.admin')



@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <h2 class="admin_title" style="text-align: center;">Панель администратора</h2>
    </div>
@endsection



@section('content')
    <div class="container">
        <div class="row">
            <form action="">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">

            </form>
        </div>
    </div>

@endsection