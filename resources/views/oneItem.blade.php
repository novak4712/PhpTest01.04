@extends('layouts.site')


@section('nav')
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route ('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route ('admin.index') }}">Admin</a>
                </li>

            </ul>
        </div>
    </nav>
@endsection


@section('content')

    <div class="container">
        <div class="row">

            @foreach($products as $product)

                <div class="card col" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $product->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->brand }}</h5>
                        <p class="card-text">{{ $product->discript }}</p>
                        <a href="#" class="btn btn-success">купить</a>
                    </div>
                </div>


            @endforeach
        </div>
    </div>

@endsection