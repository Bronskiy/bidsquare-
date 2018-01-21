<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
@if ( ! $SeoData->isEmpty() )
@foreach ($SeoData as $value)

<title>{{ $value->meta_title }}</title>
<meta name="keywords" content="{{ $value->meta_keywords }}">
<meta name="description" content="{{ $value->meta_description }}">

@endforeach
@else
<title>BidSquare</title>
@endif
<!--color theme of the status-bar (Chrome, Firefox OS and Opera)-->
<meta name="theme-color" content="#0288d1">
<!--iOS safari status-bar-->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent">
<!--windows phone status-bar-->
<meta name="msapplication-navbutton-color" content="#0288d1">
<meta name="msapplication-TileColor" content="#0288d1">
<meta name="msapplication-TileImage" content="img/favicon.ico">
<!--favicon-->
<link rel="icon" type="image/vnd.microsoft.icon" href="/assets/img/favicon.ico">
<link rel="SHORTCUT ICON" type="image/x-icon" href="/assets/img/favicon.ico">
<!--page title-->
<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" >
