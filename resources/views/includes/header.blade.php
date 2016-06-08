<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ URL::asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

    <script src="{{ URL::asset('js/plupload.js') }}"></script>
    <script src="{{ URL::asset('js/plupload.html5.js') }}"></script>
    <script src="{{ URL::asset('js/loader.js') }}"></script>
    <!-- include summernote css/js-->
    <link href="{{ URL::asset('components/summernote/dist/summernote.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('components/summernote/dist/summernote.min.js') }}"></script>

</head>
<body>
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">The final project</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ URL::asset('/') }}">Home</a></li>
                        <li class="{{ Request::is('add') ? 'active' : ''}}"><a href="{{ URL ::asset('add') }}">New post</a></li>
                        <li class="{{ Request::is('addChannel') ? 'active' : ''}}"><a href="{{ URL ::asset('addChannel') }}">New channel</a></li>
                        <li class="{{ Request::is('addContact') ? 'active' : ''}}"><a href="{{ URL::asset('addContact') }}">Contact</a></li>
                        <li class="{{ Request::is('addCharts') ? 'active' : ''}}"><a href="{{ URL::asset('addCharts') }}">Statistics</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Likes and Dislekes</a></li>
                                <li><a href="#">Comments</a></li>
                                <li><a href="#">Number of views</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::check())
                            <li class="{{ Request::is('logout') ? 'active' : ''}}"><a href=" {{ URL::asset('logout') }}">Logout</a></li>
                        @else
                            <li class="{{ Request::is('login') ? 'active' : ''}}"><a href=" {{ URL::asset('login') }}">Login</a><li>
                            <li class="{{ Request::is('register') ? 'active' : ''}}"><a href=" {{ URL::asset('register') }}">Register</a><li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
