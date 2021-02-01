@extends('layouts.main')

@section('content')
<form method="POST" action="{{ route('bookings.store') }}">

    @csrf
    <div class="mb-3">
      <label class="form-label">Nome e Cognome</label>
      <input type="text" class="form-control" name="guest_full_name" value="{{ old('guest_full_name') }}">
      @error('guest_full_name')
      <div class="error_type">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Numero Carta di Credito</label>
        <input type="text" class="form-control" name="guest_credit_card" value="{{ old('guest_credit_card') }}">
        @error('guest_credit_card')
      <div class="error_type">
        {{ $message }}
      </div>
      @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Numero Stanza</label>
        <input type="text" class="form-control" name="room" value="{{ old('room') }}">
        @error('room')
      <div class="error_type">
        {{ $message }}
      </div>
      @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Inizio Pernottamento</label>
        <input type="text" class="form-control" name="from_date" value="{{ old('from_date') }}">
        @error('from_date')
      <div class="error_type">
        {{ $message }}
      </div>
      @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Fine Pernottamento</label>
        <input type="text" class="form-control" name="to_date" value="{{ old('to_date') }}">
        @error('to_date')
      <div class="error_type">
        {{ $message }}
      </div>
      @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea type="text" class="form-control" name="more_details">{{ old('more_details') }}</textarea>
        @error('more_details')
      <div class="error_type">
        {{ $message }}
      </div>
      @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection