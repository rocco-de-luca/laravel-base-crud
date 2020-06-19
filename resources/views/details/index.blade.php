@extends('layouts.main')
@section('main-content')
@if (session('deleted'))
   <div class="alert alert-success"> 
    {{session('deleted')}} was delete 
    </div>
@endif
    <h1 class="mb-4">Details</h1>
    <section class="Details">
        <table class="table">
            <tr>
               <th>ID</th>
               <th>name</th>
               <th>gf</th>
               <th>assist</th>
               <th></th>
               <th></th>
               <th></th> 
            </tr>
        <tbody>
            @foreach ($details as $detail)
                <tr>
                <td>{{$detail->id}}</td>
                    <td>{{$detail->name}}</td>
                    <td>{{$detail->gf}}</td>
                    <td>{{$detail->assist}}</td>
                    <td>
                    <a class="btn btn-success" href="{{route('details.show', $detail->id)}}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('details.edit', $detail->id)}}">Edit</a>
                    </td>
                    <td>
                    <form action="{{route('details.destroy', $detail->id)}}" method="POST">
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