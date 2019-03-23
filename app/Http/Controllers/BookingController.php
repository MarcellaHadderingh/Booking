<?php

namespace App\Http\Controllers;

use App\booking;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

class BookingController extends Controller
{

    public function storeData(Request $request) {
        date_default_timezone_set('Europe/Amsterdam');
        if (!request('start_booking')) {
            $startBook = time();
        } else {
            if (strtotime(request('start_booking')) < time()) {
                Session::put('error', "Error! You are trying to book an accomodation in the past!");
                return view('home');
            }
            $startBook = strtotime(request('start_booking'));
        }
        if (!request('eind_booking')) {
            $eindBook = time() + 604800;
        } else {
            if (strtotime(request('eind_booking')) < time()) {
                Session::put('error', "Error! You are trying to book an accomodation with an end-time in the past!");
                return view('home');
            }
            $eindBook = strtotime(request('eind_booking'));
        }
        if (!request('hoevaak')) {
            $hoevaak = 1;
        } else {
            $hoevaak = request('hoevaak');
        }
        for ($i = 0; $i < $hoevaak; $i++) {
            if ($i >= 1) {
                $startBook = $startBook + 604800;
                if ($startBook > $eindBook) {
                    continue;
                }
            }
            $nieuweBooking = new Booking();
            $nieuweBooking->user_id = Auth::user()->id;
            $nieuweBooking->start_booking = $startBook + 3600;
            $nieuweBooking->eind_booking = $eindBook + 3600;
            $nieuweBooking->save();
        }
        Session::put('status', "Gesaved!");
        return Redirect::route('home');
    }

    public function getData() {
        $booking = Booking::where('user_id', Auth::user()->id)->get();
        return view('test', ['booking' => $booking]);
    }
}
