<?php

namespace App\Http\Controllers;


use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertyPicture;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {

        $data = Property::paginate(10);
        return view('guest.welcome', compact('data'));
    }



    public function about()
    {

        return view('guest.about');
    }





    public function rent()
    {
        $data = Property::where('property_cat', 'Rent')->get();
        return view('guest.rent', compact('data'));

        //return view('guest.rent');
    }



    public function sale()
    {

        $data = Property::where('property_cat', 'Sale')->get();
        return view('guest.sale', compact('data'));

        //return view('guest.sale');
    }


    public function services()
    {

        return view('guest.services');
    }


    public function contact()
    {

        return view('contact');
    }



    public function projects()
    {

        $data = Property::paginate(10);
        return view('properties', compact('data'));
    }



    public function project($slug)
    {
        $data = Property::where('slug', $slug)->first();
        $property_pictures = PropertyPicture::where('property_id', $data->id)->get();
        return view('guest.property', compact('data', 'property_pictures'));
    }


    public function contactpost(Request $request)
    {
        // return $request;
        $email_data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'subject' => $request['subject'],
            'feedback' => $request['message'],
            'email' => 'emmanuel@e3tech.com.ng',
        );
        Mail::send('emails.feedbackemail', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'],)
                ->subject('Feedback')
                ->from('emmanuel@e3tech.com.ng', 'Boomanage Properties');
        });


        return redirect()->back()->with('success', 'Thank you for your Feedback.');
    }
}
