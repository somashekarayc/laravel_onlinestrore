@extends('layouts.app')
@section('title', $vData['title'])
@section('subtitle', $vData['subtitle'])
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/img/' . $vData['product']->getImage()) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $vData['product']->getName() }} (${{ $vData['product']->getPrice() }})
                    </h5>
                    <p class="card-text">{{ $vData['product']->getDescription() }}</p>
                    <p class="card-text"><small class="text-muted">Add to Cart</small></p>
                </div>
            </div>
        </div>

    </div>
@endsection
