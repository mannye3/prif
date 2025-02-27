<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EntityController extends Controller
{ /**
    * create a new instance of the class
    *
    * @return void
    */
   function __construct()
   {
        $this->middleware('permission:entity-list|entity-create|entity-edit|entity-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:entity-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:entity-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:entity-delete', ['only' => ['destroy']]);
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Request $request)
   {

       
       $data = Entity::all();

       return view('entities.index',compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('categories.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request, [
           'name' => 'required',
           
       ]);
      
   
       $slug = Str::slug($request->name);

       $new_entity = new Entity();
       $new_entity->name = $request['name'];
       $new_entity->slug = $slug;

       $new_entity->save();   
     
   
       return redirect()->back()->with('success', 'Entity created successfully.');

       
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $entity = Entity::find($id);

       return view('categories.show', compact('entity'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $entity = Entity::find($id);

       return view('categories.edit',compact('entity'));
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

       $entity = Entity::find($id);
   
       $entity->update($request->all());
   
       return redirect()->back()->with('success', 'Entity updated successfully.');

   
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Entity::find($id)->delete();
   
       return redirect()->back()->with('success', 'Entity deleted updated successfully.');

    
   }
}