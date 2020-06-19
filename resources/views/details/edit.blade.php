@extends('layouts.main')
@section('main-content')
    <h1 class="mb-4">Edit</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
        
    <form action="{{route('details.update', $detail->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Player Name</label>
        <input type="text" class="form-control" vlaue="{{old('name', $detail->name)}}"
            name="name" id="name" placeholder="detail name">
        </div>
        <div class="form-group">
            <label for="gf">Goal Fatti</label>
            <input type="text" class="form-control" vlaue="{{old('gf', $detail->gf)}}"
            name="gf" id="gf" placeholder="detail gf">
        </div>
        <div class="form-group">
            <label for="name">Assist</label>
            <input type="text" class="form-control" vlaue="{{old('assist', $detail->asist)}}"
            name="assist" id="assist" placeholder="detail assist">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection