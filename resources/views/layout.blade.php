<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!--css -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!--end css->
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    @yield('style')
</head>
<body>
<div class="container" style="margin-top: 80px;">
    <div class="col-sm-11">
        @include('flash::message')
    </div>
    @yield('content')
</div>

<!--footer -->
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')
</body>
</html>
