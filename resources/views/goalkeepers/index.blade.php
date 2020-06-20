@extends('layouts.main')
@section('main-content')
@if (session('deleted'))
   <div class="alert alert-success"> 
    {{session('deleted')}} was delete 
    </div>
@endif
    <h1 class="mb-4">Goalkeepers</h1>
    <section class="Goalkeepers">
        <table class="table">
            <tr>
               <th>ID</th>
               <th>name</th>
               <th>gs</th>
               <th>penalty shots</th>
               <th></th>
               <th></th>
               <th></th> 
            </tr>
        <tbody>
            @foreach ($goalkeepers as $goalkeeper)
                <tr>
                <td>{{$goalkeeper->id}}</td>
                    <td>{{$goalkeeper->name}}</td>
                    <td>{{$goalkeeper->gs}}</td>
                    <td>{{$goalkeeper->penaltyshots}}</td>
                    <td>
                    <a class="btn btn-success" href="{{route('goalkeepers.show', $goalkeeper->id)}}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('goalkeepers.edit', $goalkeeper->id)}}">Update</a>
                    </td>
                    <td>
                    <form action="{{route('goalkeepers.destroy', $goalkeeper->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </section>
@endsection