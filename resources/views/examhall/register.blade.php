@extends('layouts.exam')

@section('content')
    <h2>Examhall Registration</h2>

    <form method="POST" action="{{ route('examhall.register.submit') }}" id='examform'>
        @csrf
        <div class="form-group">
            <label for="block_name">Block Name : </label>
            <input type="text"  class="form-control" name="block_name" id="block_name">
        </div>

        <div class="form-group">

            <label for="hall_no">Hall No : </label>
            <input type="text" name="hall_no" id="hall_no" class="form-control" >
        </div>

        <div class="form-group">
            <input type="hidden" name="form" id="form" value="block" class="form-control" >
        </div>



        <div class="form-group">
            <label for="capacity">Total no of seats</label>
            <input type="text" class="form-control" id="seat_capacity" name="seat_capacity" >
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>





