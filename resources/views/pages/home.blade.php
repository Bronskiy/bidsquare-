@extends('layouts.default')
@section('content')



<section id="home-section" class="parallax-window d-flex align-items-center">
  <div class="container text-wrapper d-flex flex-column align-items-center justify-content-center">
    @if ( ! $HomePageData->isEmpty() )
    @foreach ($HomePageData as $value)

      {!! $value->slider_title !!}
      {!! $value->slider_text !!}
      {!! $value->main_section !!}
      {!! $value->secondary_section !!}

      {!! $value->error_404_title !!}
      {!! $value->error_404_text !!}

    @endforeach
    @endif




    <h1 class="display-5 text-white font-weight-black mb-1">We Works With Focus And Understanding</h1>
    <p class="mb-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque et harum impedit ipsum itaque necessitatibus officia. Adipisci asperiores fugit, illum iusto magnam officia porro.</p>
    <div class="btn-box d-flex">
      <a href="#" class="btn-card">Read More</a>
    </div>
  </div>
</section>

<section id="services">
  <div class="container">

  </div>
</section>

<section id="send-newsletter">
  <div class="container">
    <div class="row send-row">
      <div class="col-md d-flex flex-column justify-content-center">
        <h3 class="mb-1 font-weight-bold">Sign Up for <span class="font-weight-black">Newsletter</span></h3>
        <p class="m-0">We’ll be with you on every walk of life on how to identify new opportunities.
        </p>
      </div>
    </div>
  </div>
</section>
@stop
