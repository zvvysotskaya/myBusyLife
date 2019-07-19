<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
       $this->middleware->('auth');
     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
         return back();
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
             $destroyClothin->delete();
         }

         return back();
     }
}
