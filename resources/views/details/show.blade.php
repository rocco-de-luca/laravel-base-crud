@extends('layouts.main')
@section('main-content')
<h1 class="mb-4">{{$detail->name}}</h1>
<ul class="list-group">
    <li class="list-group-item">
        ID: {{$detail->id}}
    </li>
    <li class="list-group-item">
        gf: {{$detail->gf}}
    </li>
    <li class="list-group-item">
        assist: {{$detail->assist}}
    </li>
    <li class="list-group-item">
        Create at: {{$detail->created_at}}
    </li>
    <li class="list-group-item">
        Update at: {{$detail->updated_at}}
    </li>
</ul>

@endsection