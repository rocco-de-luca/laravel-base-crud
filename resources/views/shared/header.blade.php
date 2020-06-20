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
           <img src="data:image/jpeg;base64,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" alt="Fantacalcio">
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
    