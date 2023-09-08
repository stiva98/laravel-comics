@extends('layouts.main')

@section('page-title', 'Homepage')


@section('main-content')
<h1 class="mb-3 mt-3">
    Laravel Comics
</h1>
<div class="row">
    @foreach ($comics as $comic)
        <div class="col-3 mb-3">
            <div class="card height" style="width: 18rem;">
                <img src="{{ $comic['thumb'] }}" class="card-img-top img-h" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $comic['title'] }}</h5>
                  <p class="card-text text-warning fw-bold">{{ $comic['price'] }}</p>
                  <p class="card-text">{{ $comic['type'] }}</p>
                  <a href="{{ route('documentazione') }}" class="btn btn-warning text-black">Go Description</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection