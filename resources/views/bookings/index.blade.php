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
            @foreach ($bookings as $info)              
            <tr>
                <th scope="row">{{$info->id}}</th>
                <td>{{$info->guest_full_name}}</td>
                <td>{{ $info->guest_credit_card }}</td>
                <td>{{ $info->room }}</td>
                <td>{{ $info->from_date }}</td>
                <td>{{ $info->to_date }}</td>
                <td>
                    <a href="{{ route('bookings.show', $info->id) }}">Maggiori dettagli</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
