@extends('layouts.app')
@section('title', $vData['title'])
@section('subtitle', $vData['subtitle'])
@section('content')
    <div class="card">
        <div class="card-header">
            Purchase Completed
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Congratulations, purchase completed. Order number is <b>#{{ $vData['order']->getId() }}</b>
            </div>
        </div>
    </div>
@endsection
