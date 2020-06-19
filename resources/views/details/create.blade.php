@extends('layouts.main')
@section('main-content')
    <h1 class="mb-4">Create a new Detail</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
        
    <form action="{{route('details.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
        <input type="text" class="form-control" vlaue="{{old('name')}}"
            name="name" placeholder="detail name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" vlaue="{{old('gf')}}"
            name="gf" placeholder="detail gf">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" vlaue="{{old('assist')}}"
            name="assist" placeholder="detail assist">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection