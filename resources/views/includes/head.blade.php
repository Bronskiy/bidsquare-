<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
@if ( ! $SeoData->isEmpty() )
@foreach ($SeoData as $value)

<title> @yield('title') - {{ $value->meta_title }}</title>
<meta name="keywords" content="{{ $value->meta_keywords }}">
<meta name="description" content="{{ $value->meta_description }}">

@endforeach
@else
<title>BidSquare</title>
@endif
<link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="/assets/favicon/manifest.json">
<link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" >
