<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ isset($title) ? $title . ' :: ' : '' }} {{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-color: #100D31;
        }

        #main-body {
            padding: 3%;
            display: grid;
            grid-template-columns: 1fr 5fr;
            grid-gap: 25px;
        }

        .sidebar-container {
            grid-column: 1 / span 1;
        }

        .content {
            grid-column: 2 / span auto;
        }

    </style>
    @yield('styles_include')
</head>
<body>

@include('layouts.platform.nav')

<div id="main-body">

    @if(isset($has_sidebar) && $has_sidebar == true)
    <div class="sidebar-container">
        @include('layouts.platform.sidebar')
    </div>
    @endif

    <div class="content">
        @yield('content')
    </div>
</div>
@include('layouts.platform.footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

@yield('scripts_include')
</body>
</html>