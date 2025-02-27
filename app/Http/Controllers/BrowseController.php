<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Regulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Unicodeveloper\Paystack\Facades\Paystack;
use Unicodeveloper\Paystack\Paystack;

class BrowseController extends Controller
{
    public function index($slug)
    {

       

        $data = Category::where('slug', $slug)->first();

               $alpha = DB::table('regulations')
                ->join('alpha', 'regulations.alpha_id', '=', 'alpha.id')
                ->select('alpha.id','alpha.name')
                ->where('category_id', '=', $data->id)
                ->where('regulations.status',1)
                ->groupBy('alpha.id','alpha.name')
                ->get();



                 $years = DB::table('regulations')
                ->join('years', 'regulations.year_id', '=', 'years.id')
                ->select('years.id','years.name')
                ->where('category_id', '=', $data->id)
                ->where('regulations.status',1)
                ->groupBy('years.id','years.name')
                ->get();




             



                
        return view('categorypages.index',compact('data','alpha', 'years'));
    }




    public function alphaname($slug, $name)
    {

         $alpha = DB::table('alpha')->where('name', $name)->first();
          

           $regulations = Regulation::where('alpha_id',  $alpha->id )
         ->where('status',1)->paginate(10);

          $data = Category::where('slug', $slug)->first();

                $alphas = DB::table('regulations')
                ->join('alpha', 'regulations.alpha_id', '=', 'alpha.id')
                ->select('alpha.id','alpha.name')
                ->where('category_id', '=', $data->id)
               // ->where('regulations.status','=', 1)
                ->groupBy('alpha.id','alpha.name')
                ->get();



                
        return view('categorypages.regulations',compact('regulations','alpha','alphas','data'));
    }






    public function yearname($slug, $yname)
    {

  
         $alpha = DB::table('years')->where('name', $yname)->first();
          

           $regulations = Regulation::where('year_id',  $alpha->id )
           ->where('status',1)->paginate(10);

            $data = Category::where('slug', $slug)->first();

             $alphas = DB::table('regulations')
                ->join('years', 'regulations.year_id', '=', 'years.id')
                ->select('years.id','years.name')
                ->where('category_id', '=', $data->id)
                ->where('regulations.status',1)
                ->groupBy('years.id','years.name')
                ->get();



                
        return view('categorypages.regulations',compact('regulations','alpha','alphas','data'));
    }


    public function regulation($slug)
    {


         $regulations = Regulation::where('slug',  $slug )
         ->where('status',1)->first();
                
        return view('categorypages.regulation',compact('regulations'));
    }



    public function payment($slug)
    {

        //return "Payment";
        //  $regulations = Regulation::where('slug',  $slug )
        //  ->where('status',1)->first();
                
        return view('categorypages.payment');
    }




    public function categorysearchcate(Request $request,$category_id)
    { 
         // $search = $request->input('title');
            $title = $request['title'];
            //$category = $request['title'];
              $search = Regulation::where('title', 'like', '%'.$title.'%')
            ->where('category_id', $category_id)->paginate(10);
            $total = $search->count();
       

         if(count($search) == 0){
            return view('categorypages.categorysearch',['search' => null,'title' => $title, 'total' => $total]);
            }

            
        return view('categorypages.categorysearch', compact('search','title','total'));
        
        

  
         
    }


   


    


    
}
