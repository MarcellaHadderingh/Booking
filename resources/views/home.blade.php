@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:70px;">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard<div class='float-right'><a href="/test">Overview</a></a></div>
            </div>

                    <div class="card-body">
                        @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                            <?php Session::forget('error'); ?>
                        </div>
                        @endif
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <?php Session::forget('status'); ?>
                        </div>
                        @endif
                        <h3>Booking</h3>
                        <p>Enter your arrival and departure date here</p>
                        <form method="POST" action="{{ route('booking') }}">
                            @csrf
                            @method('POST')
                           <strong>Arrival</strong><input type="datetime" name="start_booking" placeholder="Arrival 1/1/2019 12:00" style="margin:0 10px;">
                           <strong>Departure</strong><input type="datetime" name="eind_booking" placeholder=" Departure 2/2/2019 12:00" style="margin:0 10px;">
                           <strong>How often </strong><input type="number" min="1" max="52" name="hoevaak">
                            <input type="submit" value="save" class="button">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
