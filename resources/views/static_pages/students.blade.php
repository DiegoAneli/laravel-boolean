@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">

    @foreach (config('students') as $student)
    <div class="student">
      <div class="student-left">
        <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}">
      </div>

      <div class="student-right">
        <h3>{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
        <small>Ora lavora presso {{ $student['azienda'] }}</small>
      </div>

    </div>
    @endforeach



  </div>

</div>

@endsection
