<!DOCTYPE html>
<html>
<head>
    <title>Business Finder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('company') }}">Company Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('company') }}">View All Companies</a></li>
        <li><a href="{{ URL::to('company/create') }}">Create a Company</a>
    </ul>
</nav>