@extends('layouts.app')
@section('title', $vData["title"])
@section('subtitle', $vData["subtitle"])
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-4 ms-auto">
<p class="lead">{{ $vData["description"] }}</p>
</div>
<div class="col-lg-4 me-auto">
<p class="lead">{{ $vData["author"] }}</p>
</div>
</div>
</div>
@endsection

