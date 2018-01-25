@extends('layouts.default')
@section('title', 'Terms & Conditions')
@section('content')

<section id="breadcrumbs">
  <div class="container d-flex">
    <h1 class="mb-1">{!! $name !!}</h1>
    <div class="breadcrumb-box d-flex">
      <a href="/">Home</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a>{!! $name !!}</a>
    </div>
  </div>
</section>
@if ( ! $HomePageData->isEmpty() )
@foreach ($HomePageData as $value)

<section id="services" class="terms">
  <div class="container">
    {!! $value->terms_text !!}
  </div>
</section>

@endforeach
@endif

@stop
