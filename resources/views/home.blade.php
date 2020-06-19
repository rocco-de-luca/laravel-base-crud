@extends('layouts.main')
@section('main-content')
    
    <section class="players">
        <h2 class="text-primary">Formazione</h2>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Club</th>
            </tr>
        <tbody>
            @foreach ($players as $player)
                <tr>
                <td>{{$player->name}}</td>
                <td>{{$player->club}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </section>
@endsection