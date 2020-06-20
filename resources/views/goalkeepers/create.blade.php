@extends('layouts.main')
@section('main-content')
    <h1 class="mb-4">Create a new Goalkeeper</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
        
    <form action="{{route('goalkeepers.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
        <input type="text" class="form-control" vlaue="{{old('name')}}"
            name="name" placeholder="goalkeepers name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" vlaue="{{old('gs')}}"
            name="gs" placeholder="goalkeepers gs">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" vlaue="{{old('penaltyshots')}}"
            name="penaltyshots" placeholder="goalkeepers penalty shots">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection