@extends('layouts.main')

@section('page-title', 'Descrizione')


@section('main-content')
<h1 class="mb-3 mt-3">
    Descrizione
</h1>
<div class="row">
    @foreach ($comics as $comic)
        <div class="col-3 mb-3">
            <div class="card height" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $comic['title'] }}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comic['series'] }}</h6>
                  <p class="card-text text-warning fw-bold">{{ $comic['sale_date'] }}</p>
                  <p class="card-text my-card">{{ $comic['description'] }}</p>
                  <a href="{{ route('home') }}" class="card-link">Go to Home</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection