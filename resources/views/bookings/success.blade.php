@extends('layouts.main')

@section('content')
<div class="successPage container d-flex align-items-center justify-content-center">
    <div class="row d-flex align-items-center justify-content-center" id="success">
        <p>Nuova prenotazione inserita con successo! <a href="{{ route('bookings.index') }}">Torna indietro</a></p>
    </div>
</div>
@endsection