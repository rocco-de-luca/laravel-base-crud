@extends('layouts.main')
@section('main-content')
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
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </section>
@endsection