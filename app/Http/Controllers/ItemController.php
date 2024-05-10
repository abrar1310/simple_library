<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;


class ItemController extends Controller
{
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function show(){

        $item  =  Item::all();
        return view ('show',compact('item')); 
    }
    public function create()
    {
        $categories = Category::all();
        return view('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|min:2|max:255',
        ]);
        
        
        $item = new Item();
    
        $item->name           = $request->name;
        $item->type           = $request->type;
        $item->the_id          =$request->the_id;

    
        $item->save();

        return redirect()->route('show');
    }

    public function edit($id)
    {
        $new = Item::findOrFail($id);
        return view('edit',compact('new'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|min:2|max:255',
        ]);

        $new = Item::findOrFail($id);

        $new->name    = $request->name;
        $new->type    = $request->type;

        $new->save();

        return redirect()->route('show');
    }

    public function delete(Item $id)
    {
        $id->delete();
        return redirect()->route('show');
    }

    public function search(Request $request){
        $request->validate([
            'q' =>['string'],
        ]);
        $item  = Item::where('name','LIKE','%'.$request->q.'%')->get();
        return view('show',compact('item'));
}

public function books(){
    $item = Item::where('type','كتاب')->get();
    return view ('show',compact('item'));
}

public function summaries(){
    $item  = Item::where('type','ملخص')->get();
    return view ('show',compact('item'));
    }

    public function questions(){
        $item  = Item::where('type','دورات')->get();
        return view ('show',compact('item'));
        }
public function all(){
    $item  = Item::all();
    return view ('show',compact('item')); 
}
}
