<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showC(){

        $item  =  Category::all();
        return view ('showCategory',compact('item')); 
    }


    public function createC()
    {
        return view('createCategory');
    }


    public function storeC(Request $request)
    {
        $request->validate([
            'name'        => 'required|min:2|max:255',
        ]);
        
        
        $item = new Category();
    
        $item->name    = $request->name;
    
        $item->save();

        return redirect()->route('showCategory');
    }
    


    public function editC(string $id)
    {
        $new = Category::findOrFail($id);
        return view('editCategory',compact('new'));
    }


    public function updateC(Request $request, string $id)
    {
        $request->validate([
            'name'        => 'required|min:2|max:255',
            
        ]);

        $new = Category::findOrFail($id);

        $new->name    = $request->name;


        $new->save();

        return redirect()->route('showCategory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteC( Category $id)
    {
        $id->delete();
        return redirect()->route('showCategory');
    }
}
