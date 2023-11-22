@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/four.jpg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/five.jpg') }}"  class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/six.jpg') }}"  class="img-fluid rounded">
</div>
</div>
@endsection
