<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Business Finder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/starterlayout.css" type="text/css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-expand-md navbar-light navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Search companies</a>
    </div>
    <ul class="nav navbar-nav">
            @guest
                <li><a href="{{ URL::to('home') }}">Login</a>
            @else
                <li><a href="{{ URL::to('company') }}">View All Companies</a></li>
                <li><a href="{{ URL::to('company/create') }}">Create a Company</a>
                <li><a href="{{ URL::to('home') }}">Admin</a>
            @endguest

    </ul>
</nav>
