@extends('layouts.main')

@section('content')

<table class="table">
    <thead>
        <tr>
            @foreach ($columns as $columnId => $columnValue)

                <th scope="col">{{ $columnValue }}</th>
            @endforeach
            <th></th>
            </tr>
    </thead>
    <tbody>           
        <tr>
            <th scope="row">{{$guest->id}}</th>
            <td>{{$guest->guest_full_name}}</td>
            <td>{{ $guest->guest_credit_card }}</td>
            <td>{{ $guest->room }}</td>
            <td>{{ $guest->from_date }}</td>
            <td>{{ $guest->to_date }}</td>
        </tr>
    </tbody>
</table>
<div class="container">
    <div class="row d-flex flex-column">
        <div class="col d-flex justify-content-center align-items-center flex-column">
            <h3>Dettagli</h3>
            <p>{{$guest->more_details}}</p>
        </div>
        <div class="col d-flex justify-content-center align-items-center flex-column">
            <h4>Torna alla pagina precedente</h4>
            <a href="{{route('bookings.index')}}"> <- indietro</a>
        </div>
    </div>
</div>
@endsection