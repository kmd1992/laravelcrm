<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('assets/styles/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/fonts/open-sans/styles.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/libs/tether/css/tether.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/styles/common.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/styles/pages/auth.min.css') }}" rel="stylesheet">
</head>
<body>	
@yield("login-container")
</body>
</html>
