<?php

namespace App\Http\Controllers;

//use App\Models\Product;
use App\Models\Property;
//use App\Models\Ride;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PropertyPicture;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $data = Property::all();

        return view('properties.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('properties.add_property');
    }



    public function store(Request $request)
    {


        $slug = Str::slug($request->name);
        $new_property = new Property();
        $new_property->name = $request['name'];
        $new_property->price = $request['price'];
        $new_property->property_desc = $request['property_desc'];
        $new_property->property_type = $request['property_type'];
        $new_property->property_cat = $request['property_cat'];
        $new_property->property_bed = $request['property_bed'];
        $new_property->property_location = $request['property_location'];


        $new_property->slug = $slug;


        $new_property->save();
        $id =  $new_property->id;



        if ($request->hasFile('property_picture') && $request->file('property_picture')->isValid()) {
            $new_property_pic = Property::find($id);
            $property_picture = $request->file('property_picture');
            $name = Str::slug($request->name) . '.' . $property_picture->getClientOriginalExtension();
            $destinationPath = public_path('properties');
            $property_picture->move($destinationPath, time() . '-' . $name);
            $db_file = time() . '-' . $name;

            $new_property_pic->property_picture = $db_file;
            $new_property_pic->save();
        }



        return Redirect::to('/property_pictures/' . $id);

        //return Redirect::to('properties')->with('success', 'Property added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit_property($id)
    {
        $ride = Property::where('id', $id)->first();

        return view('properties.edit_property', compact('ride'));
    }



    public function property_update(Request $request, $id)
    {
        $slug = Str::slug($request->name);
        $update_property = Property::find($id);
        $update_property->name = $request['name'];
        $update_property->price = $request['price'];
        $update_property->property_desc = $request['property_desc'];
        $update_property->property_type = $request['property_type'];
        $update_property->property_cat = $request['property_cat'];
        $update_property->property_bed = $request['property_bed'];
        $update_property->property_location = $request['property_location'];
        $update_property->slug = $slug;


        $update_property->save();





        if ($request->hasFile('property_picture') && $request->file('property_picture')->isValid()) {
            $update_ride_pic = Property::find($id);
            $property_picture = $request->file('property_picture');
            $name = Str::slug($request->name) . '.' . $property_picture->getClientOriginalExtension();
            $destinationPath = public_path('properties');
            $property_picture->move($destinationPath, time() . '-' . $name);
            $db_file = time() . '-' . $name;

            $update_ride_pic->property_picture = $db_file;
            $update_ride_pic->save();
        }


        return Redirect::to('/property_pictures/' . $id);
        //return Redirect::to('properties')->with('success', 'Property updated successfully.');

        //return redirect()->back()->with('success', 'regulation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::find($id)->delete();

        return redirect()->back()->with('success', 'Property deleted successfully.');
    }


    public function property_pictures($id)
    {

        $property = Property::find($id);

        $property_pics = PropertyPicture::where('property_id', $id)->get();
        return view('properties.add_property_pictures', compact('property', 'property_pics'));
    }





    public function propertpicties(Request $request, $id)
    {

        //return $id;
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('properties'), $imageName);

        $new_picture = new PropertyPicture();
        $new_picture->name = $imageName;
        $new_picture->property_id = $id;
        $new_picture->save();

        return response()->json(['success' => $imageName]);
    }


    public function deletepics($id)
    {
        PropertyPicture::find($id)->delete();

        return redirect()->back();
    }



    public function propertybooking(Request $request)
    {
        // return $request;
        $email_data = array(
            'property_link' => $request['property_link'],
            'property_name' => $request['property_name'],
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'feedback' => $request['message'],
            'email' => 'emmanuel@e3tech.com.ng',
        );
        Mail::send('emails.propertybookingemail', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'],)
                ->subject('Property Inspection')
                ->from('emmanuel@e3tech.com.ng', 'Boomanage Properties');
        });


        return redirect()->back()->with('success', 'Thank you for your Feedback.');
    }
}
