@extends('layouts.default')
@section('title', 'Home')
@section('content')


@if ( ! $HomePageData->isEmpty() )
@foreach ($HomePageData as $value)

<section id="home-section" class="d-flex align-items-center" style="background:url('{{ asset('uploads') . '/'.  $value->slider_background }}')">
  <div class="container text-wrapper d-flex flex-column align-items-center justify-content-center">

    {!! $value->slider_title !!}
    <h1 class="display-5 text-white font-weight-black mb-1">We Works With Focus And Understanding</h1>
    {!! $value->slider_text !!}
    <p class="mb-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque et harum impedit ipsum itaque necessitatibus officia. Adipisci asperiores fugit, illum iusto magnam officia porro.</p>

  </div>
</section>

<section id="services">
  <div class="container">
    {!! $value->main_section !!}

  </div>
</section>

<section id="send-newsletter">
  <div class="container">
    <div class="row send-row">
      <div class="col-md d-flex flex-column justify-content-center">
        {!! $value->secondary_section !!}
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

@stop
