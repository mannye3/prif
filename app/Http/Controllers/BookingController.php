<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Models\Booking;
use App\Models\Location;
use App\Models\Direction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
    public function booking_request(Request $request)
    {
        $request;


        $new_direction = new Direction();
        $new_direction->origin = $request['b_pickup'];
        $new_direction->destination = $request['b_dropoff'];
        $new_direction->distance = $request['distance'];

        $exists = $new_direction->exists();
        if ($exists) {
            $b_request = Ride::paginate(10);
            return view('booking.booking_request', compact('b_request', 'request'));
        } else {

            $new_direction->save();
            $b_request = Ride::paginate(10);
            return view('booking.booking_request', compact('b_request', 'request'));
        }
    }



    public function booking_request_location(Request $request)
    {
        $request;


        $location = new Location();
        $location->place_id = $request->input('place_id');
        $location->formatted_address = $request->input('b_pickup');
        $location->latitude = $request->input('latitude');
        $location->longitude = $request->input('longitude');
        //$location->save();

        //$locationID = $location->id;



        $exists = $location->exists();
        if ($exists) {
            $get_location = Location::first();
            $locationID = $get_location->id;
            $b_request = Ride::paginate(10);
            return view('booking.booking_request_location', compact('b_request', 'request', 'locationID'));
        } else {

            $location->save();

            $b_request = Ride::paginate(10);
            return view('booking.booking_request_location', compact('b_request', 'request'));
        }
    }


    public function booking_details(Request $request)
    {
        // return $request;
        return view('booking.booking_details', compact('request'));
    }



    public function booking_payment($b_code)
    {

        $exists = Booking::where('b_code', $b_code)->where('status', 0)->exists();

        if ($exists) {
            $booking = Booking::where('b_code', $b_code)->first();
            return view('booking.booking_payment', compact('booking'));
        } else {
            return "Booking already exist";
        }

        // $booking = Booking::where('b_code', $b_code)->first();
        // return view('booking.booking_payment', compact('booking'));
    }



    public function booking_submit(Request $request)
    {

        $b_code = Str::random(6);

        $new_booking = new Booking();
        $new_booking->ride_id = $request['ride_id'];
        $new_booking->b_type = $request['b_type'];
        $new_booking->b_pickup = $request['b_pickup'];
        $new_booking->b_dropoff = $request['b_dropoff'];
        $new_booking->b_time = $request['b_time'];
        $new_booking->b_date = $request['b_date'];
        $new_booking->b_duration = $request['b_duration'];
        $new_booking->b_luggage = $request['b_luggage'];
        $new_booking->b_passenger = $request['b_passenger'];
        $new_booking->c_name = $request['c_name'];
        $new_booking->c_email = $request['c_email'];
        $new_booking->c_phone = $request['c_phone'];
        $new_booking->totalFare = $request['totalFare'];
        $new_booking->b_distance = $request['distance'];



        $new_booking->b_code = $b_code;

        $new_booking->save();



        return Redirect::to('/booking_payment/' . $b_code);
    }


    public function mapdetails()
    {

        $mapDetail = Direction::latest()->first(); // Assuming you have timestamps in the map_details table

        return response()->json($mapDetail);
    }


    public function getLocation($id)
    {
        $location = Location::findOrFail($id);
        return response()->json($location);
    }




    public function booking_confirmation($b_code)
    {

        $exists = Booking::where('b_code', $b_code)->exists();

        if ($exists) {
            $booking = Booking::where('b_code', $b_code)->first();
            return view('booking.booking_confirmation', compact('booking'));
        } else {
            return "errro";
        }

        // if ($b_code) {
        //     $booking = Booking::where('b_code', $b_code)->first();

        // } else {
        //     return "errro";
        // }
    }



    public function email_test($b_code)
    {

        $exists = Booking::where('b_code', $b_code)->exists();

        if ($exists) {
            $booking = Booking::where('b_code', $b_code)->first();
            return view('emails.email_test', compact('booking'));
        } else {
            return "errro";
        }

        // if ($b_code) {
        //     $booking = Booking::where('b_code', $b_code)->first();

        // } else {
        //     return "errro";
        // }
    }
}
