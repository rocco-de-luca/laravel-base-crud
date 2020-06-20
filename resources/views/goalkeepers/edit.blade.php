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
        
    <form action="{{route('goalkeepers.update', $goalkeeper->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Player Name</label>
        <input type="text" class="form-control" vlaue="{{old('name', $goalkeeper->name)}}"
            name="name" id="name" placeholder="detail name">
        </div>
        <div class="form-group">
            <label for="gs">Goal Subiti</label>
            <input type="text" class="form-control" vlaue="{{old('gf', $goalkeeper->gs)}}"
            name="gs" id="gs" placeholder="goalkeeper gs">
        </div>
        <div class="form-group">
            <label for="name">Penalty Shots</label>
            <input type="text" class="form-control" vlaue="{{old('penaltyshots', $goalkeeper->penaltyshots)}}"
            name="penaltyshots" id="prnaltyshosts" placeholder="goalkeeper penalty shots">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection