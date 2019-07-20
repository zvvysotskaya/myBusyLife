<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Clothing;
use Illuminate\Support\Facades\Auth;

class ClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
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
      {
        request()->validate([

          'clothing' =>['required', 'min:2', 'max:100'],
          'quantity' =>['required', 'min:1', 'max:100'],
          'description' =>['required', 'min:1', 'max:250']
        ]);
        Clothing::create([
          'user_id' => Auth::id(),
          'clothing' => request('clothing'),
          'quantity' => request('quantity'),
          'description' => request('description')
        ]);
        return back();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clothing  $grocery
     * @return \Illuminate\Http\Response
     */
     public function show(Clothing $clothing)
    {
        return view('userpages.updateclothes', compact('clothing'));
    }

    public function showDelete(Clothing $clothing)
    {
        return view('userpages.deleteclothes', compact('clothing'));
    }
  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clothing  $grocery
     * @return \Illuminate\Http\Response
     */
    public function update(Clothing $clothing)
    {
        $clothing->update(
            request([
                'clothing',
                'description',
                'quantity'
            ])
        );
        return redirect('/userpages.shoppinglistclothes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Clothing $clothing)
     {
         $clothing->delete();
         return redirect('/userpages.shoppinglistclothes');
     }
     public function destroyAll()
     {
         //$grocery->delete();
         $destroyClothings = Clothing::all()->where('user_id', Auth::id());

         foreach($destroyClothings as $destroyClothing){
             $destroyClothing->delete();
         }

         return back();
     }
}
