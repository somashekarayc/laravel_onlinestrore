@extends('layouts.app')
@section('title', $vData['title'])
@section('subtitle', $vData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($vData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product->getId()]) }}" class="btn bg-primary text-white">{{ $product->getName()}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
