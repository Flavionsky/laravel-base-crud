@extends('layouts.main')

@section('content')
<form method="POST" action="{{ route('bookings.update', $guest->id) }}">

    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Nome e Cognome</label>
      <input type="text" class="form-control" name="guest_full_name" value="{{ $guest->guest_full_name }}">
      @error('guest_full_name')
      <div class="error_type">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Numero Carta di Credito</label>
        <input type="text" class="form-control" name="guest_credit_card" value="{{ $guest->guest_credit_card }}">
      </div>
      <div class="mb-3">
        <label class="form-label">Numero Stanza</label>
        <input type="text" class="form-control" name="room" value="{{ $guest->room }}">
      </div>
      <div class="mb-3">
        <label class="form-label">Inizio Pernottamento</label>
        <input type="text" class="form-control" name="from_date" value="{{ $guest->from_date }}">
      </div>
      <div class="mb-3">
        <label class="form-label">Fine Pernottamento</label>
        <input type="text" class="form-control" name="to_date" value="{{ $guest->to_date }}">
      </div>
      <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea type="text" class="form-control" name="more_details">{{ $guest->more_details }}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection