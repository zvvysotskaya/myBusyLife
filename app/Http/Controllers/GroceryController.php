<?php

namespace App\Http\Controllers;

//use App\Grocery;
use Illuminate\Http\Request;
use App\Grocery;
use App\User;
use Illuminate\Support\Facades\Auth;

class GroceryController extends Controller
{


 public function __construct()
 {
     $this->middleware('auth');
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      request()->validate([

        'groceryname' =>['required', 'min:2', 'max:100'],
        'quantity' =>['required', 'min:1', 'max:100'],
        'description' =>['required', 'min:1', 'max:250']
      ]);
      Grocery::create([
        'user_id' => Auth::id(),
        'groceryname' => request('groceryname'),
        'quantity' => request('quantity'),
        'description' => request('description')
      ]);
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function show(Grocery $grocery)
    {
        return view('userpages.updategrocery', compact('grocery'));
    }

    public function showDelete(Grocery $grocery)
    {
        return view('userpages.deletegrocery', compact('grocery'));
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function update(Grocery $grocery)
    {
        $grocery->update(
            request([
                'groceryname',
                'description',
                'quantity'
            ])
        );
        return redirect('/userpages.shoppinglistgroceries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grocery $grocery)
    {
        $grocery->delete();
        return redirect('/userpages.shoppinglistgroceries');
    }

    public function destroyAll()
    {
        //$grocery->delete();
        $destroyGroceries = Grocery::all()->where('user_id', Auth::id());

        foreach($destroyGroceries as $destroyGrocery){
            $destroyGrocery->delete();
        }

        return back();
    }
}
