@extends('layouts.main')
@section('main-content')
<h1 class="mb-4">{{$goalkeeper->name}}</h1>
<ul class="list-group">
    <li class="list-group-item">
        ID: {{$goalkeeper->id}}
    </li>
    <li class="list-group-item">
        gs: {{$goalkeeper->gf}}
    </li>
    <li class="list-group-item">
        penalty shots: {{$goalkeeper->penaltyshots}}
    </li>
    <li class="list-group-item">
        Create at: {{$goalkeeper->created_at}}
    </li>
    <li class="list-group-item">
        Update at: {{$goalkeeper->updated_at}}
    </li>
</ul>

@endsection