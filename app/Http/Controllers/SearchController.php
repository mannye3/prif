<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Regulation;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    { 
         // $search = $request->input('title');
            $title = $request['title'];
            $search = Regulation::where('title', 'like', '%'.$title.'%')->paginate(10);
            $total = $search->count();
       

         if(count($search) == 0){
            return view('search.index',['search' => null,'title' => $title, 'total' => $total]);
            }

        return view('search.index', compact('search','title','total'));
        
        

  
         
    }





    public function categorysearch(Request $request ,$category_slug, $title)
    { 
              $catergory = Category::where('slug',$category_slug)->first();

               $search = Regulation::where('title', 'like', '%'.$title.'%')
            ->where('category_id', $catergory->id)->paginate(10);
            $total = $search->count();
       

         if(count($search) == 0){
            return view('search.categorysearch',['search' => null,'title' => $title, 'total' => $total]);
            }

            
        return view('search.categorysearch', compact('search','title','total'));
        
        

  
         
    }


    
}
