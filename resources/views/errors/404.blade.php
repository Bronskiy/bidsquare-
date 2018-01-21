@extends('layouts.default')
@section('content')
<section id="breadcrumbs">
  <div class="container d-flex flex-column">
    <h1 class="font-weight-bold mb-1">404</h1>
    <div class="breadcrumb-box d-flex">
      <a href="/">Home</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a>404</a>
    </div>
  </div>
</section>
@if ( ! $HomePageData->isEmpty() )
@foreach ($HomePageData as $value)

<section id="services">
  <div class="container">
    {!! $value->error_404_title !!}
    {!! $value->error_404_text !!}
  </div>
</section>

@endforeach
@endif

@stop
