@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Booking overview<a class="float-right" href="/home">Home</a></a></div>
                <div class="card-body">
                    <h3>Detailed information</h3>
                    <table>
                    <tr><th>Booking</th><th>Data</th></tr>
                    @foreach ($booking as $book)
                    <tr><td>Start:</td><td>{{ date("Y-m-d H:i:s", $book->start_booking) }}</td></tr>
                    <tr style="border-bottom: 1px solid black;"><td>Eind:</td><td>{{ date("Y-m-d H:i:s", $book->eind_booking) }}</td></tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection




