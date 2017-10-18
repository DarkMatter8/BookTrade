<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  <title>@yield('title')</title>
  <!-- Favicons !-->
  <!-- <link rel="icon" type="image/png" sizes="64x64" href="{!! URL::asset('images/favicons/favicon-64x64.png') !!}">
  <link rel="icon" type="image/png" sizes="32x32" href="{!! URL::asset('images/favicons/favicon-32x32.png') !!}">
  <link rel="icon" type="image/png" sizes="16x16" href="{!! URL::asset('images/favicons/favicon-16x16.png') !!}"> -->
  <!-- Favicons Ends !-->
  @include('includes.styles')
</head>
<body>
  <noscript>Please enable JavaScript to continue.</noscript>
  
  
  @yield('content')
  @include('includes.scripts')
</body>
</html>