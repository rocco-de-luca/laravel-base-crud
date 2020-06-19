<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fantacalcio</title>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav-brand">Fantacalcio</div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                <a href="{{route('details.index')}}" class="nav-link">Details</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('details.create')}}" class="nav-link">Add a new Detail</a>
                </li>

            </ul>
        </nav>
    </header>
    