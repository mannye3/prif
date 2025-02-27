<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Entity;
use App\Models\Category;
use App\Models\Regulation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegulationController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
        $this->middleware('permission:regulation-list|regulation-create|regulation-edit|regulation-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:regulation-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:regulation-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:regulation-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $data = Regulation::all();


        $categories = Category::all();
        return view('regulations.index', compact('data', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entities = Entity::all();
        $categories = Category::all();
        $alpha =  \DB::table('alpha')->get();




        return view('regulations.add_regulation', compact('entities', 'categories', 'alpha'));
    }


    public function getCategory(Request $request)
    {
        $category_id = \DB::table('subcategories')
            ->where('category_id', $request->category_id)
            ->get();

        if (count($category_id) > 0) {
            return response()->json($category_id);
        }
    }


    // public function getSubcategories(Request $request)
    // {
    //     $subcategories = \DB::table('subcategories')
    //         ->where('category_id', $request->category_id)
    //         ->get();

    //     if (count($subcategories) > 0) {
    //         return response()->json($subcategories);
    //     }
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return  $request;
        //    $this->validate($request, [
        //        'name' => 'required',

        //    ]);




        //Check if $request has uploaded file and whether it's a valid file 







        $slug = Str::slug($request->title);
        $new_regulation = new regulation();
        $new_regulation->title = $request['title'];
        $new_regulation->price = $request['price'];
        $new_regulation->year_id = $request['year_id'];
        $new_regulation->month_id = $request['month_id'];
        $new_regulation->entity_id = $request['entity_id'];
        $new_regulation->category_id = $request['category_id'];
        $new_regulation->subcategory_id = $request['subcategory_id'];
        $new_regulation->alpha_id = $request['alpha_id'];
        //$new_regulation->document_tag = $document_tag;
        $new_regulation->slug = $slug;


        $new_regulation->save();
        $id =  $new_regulation->id;

        $new_document_tag = regulation::find($id);
        $year = Year::find($request['year_id'])->first();

        $new_document_tag->document_tag =   $request['title'] . '-' . $year->name;
        $new_document_tag->slug =   $slug . '-' . $year->name;
        $new_document_tag->save();

        // $new_document_tag->regulation_doc = $document_tag;



        if ($request->hasFile('regulation_doc') && $request->file('regulation_doc')->isValid()) {
            $new_regulation_doc = regulation::find($id);
            $regulation_doc = $request->file('regulation_doc');
            $name = Str::slug($request->title) . '.' . $regulation_doc->getClientOriginalExtension();
            $destinationPath = public_path('regulations');
            $regulation_doc->move($destinationPath, time() . '-' . $name);
            $db_file = time() . '-' . $name;

            $new_regulation_doc->regulation_doc = $db_file;
            $new_regulation_doc->save();
        }

        // FOR APPROVAL
        $email_data = array(
            'email' => 'aboajah.emmanuel@fmdqgroup.com',
            'doc_name' => $request['title'],
        );
        Mail::send('emails.documentuplaod', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'],)
                ->subject('Document Upload')
                ->from('no-reply@fmdqgroup.com', 'Financial Markets Regulations & Rules Repository Portal');
        });




        //return   $new_regulation;   


        return redirect()->back()->with('success', 'regulation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regulation = Regulation::find($id);

        return view('categories.show', compact('regulation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regulation = Regulation::find($id);

        return view('categories.edit', compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',

        ]);

        $regulation = Regulation::find($id);

        $regulation->update($request->all());

        return redirect()->back()->with('success', 'regulation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Regulation::find($id)->delete();

        return redirect()->back()->with('success', 'regulation deleted updated successfully.');
    }



    public function redirectToUrl($selectedValue)
    {

        $entities = Entity::all();
        $categories = Category::all();
        $alpha =  \DB::table('alpha')->get();
        $years =  \DB::table('years')->get();
        $months =  \DB::table('months')->get();


        return view('regulations.add_new', [
            'selectedValue' => $selectedValue, 'entities' => $entities, 'categories' => $categories, 'alpha' => $alpha, 'years' => $years, 'months' => $months
        ]);
    }


    public function regstatus(Request $request, $id)
    {

        $update_status = regulation::find($id);


        $update_status->status = $request['status'];
        $update_status->note = $request['note'];
        if ($request['status'] == 1) {

            // APPROVED DOCUMENT 
            $email_data = array(
                'email' => 'aboajah.emmanuel@fmdqgroup.com',
                'doc_name' => $update_status->title,
            );
            Mail::send('emails.documentapproved', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'],)
                    ->subject('Document Approved')
                    ->from('no-reply@fmdqgroup.com', 'Financial Markets Regulations & Rules Repository Portal');
            });
        }


        if ($request['status'] == 2) {

            // REJECT DOCUMENT 
            $email_data = array(
                'email' => 'aboajah.emmanuel@fmdqgroup.com',
                'doc_name' => $update_status->title,
                'note' => $request['note'],
            );
            Mail::send('emails.documentrejected', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'],)
                    ->subject('Document Rejected')
                    ->from('no-reply@fmdqgroup.com', 'Financial Markets Regulations & Rules Repository Portal');
            });
        }
        $update_status->save();

        return redirect()->back()->with('success', 'Document approved successfully.');
    }
}
