@extends('layouts.main')

@section('content')
<form method="POST" action="{{ route('bookings.store') }}">

    @csrf
    <div class="mb-3">
      <label class="form-label">Nome e Cognome</label>
      <input type="text" class="form-control" name="guest_full_name">
    </div>
    <div class="mb-3">
        <label class="form-label">Numero Carta di Credito</label>
        <input type="text" class="form-control" name="guest_credit_card">
      </div>
      <div class="mb-3">
        <label class="form-label">Numero Stanza</label>
        <input type="text" class="form-control" name="room">
      </div>
      <div class="mb-3">
        <label class="form-label">Inizio Pernottamento</label>
        <input type="text" class="form-control" name="from_date">
      </div>
      <div class="mb-3">
        <label class="form-label">Fine Pernottamento</label>
        <input type="text" class="form-control" name="to_date">
      </div>
      <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea type="text" class="form-control" name="more_details"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection