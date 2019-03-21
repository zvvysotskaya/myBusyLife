<?php

namespace App\Http\Controllers;

use App\Householditem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class HouseholditemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
    public function store()
    {
        request()->validate([
            'itemname' =>['required', 'min:2', 'max:200'],
            'quantity' =>['required', 'min:1', 'max:100'],
            'description' =>['required', 'min:2', 'max:100']
        ]);
        Householditem::create([
            'user_id' => Auth::id(),
            'itemname' => request('itemname'),
            'quantity' => request('quantity'),
            'description' =>request('description')
        ]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Householditem  $householditem
     * @return \Illuminate\Http\Response
     */
    public function show(Householditem $householditem)
    {
        return view('userpages.updatehouseholditem', compact('householditem'));
    }

    public function showDelete(Householditem $householditem)
    {
        return view('userpages.deletehouseholditem', compact('householditem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Householditem  $householditem
     * @return \Illuminate\Http\Response
     */
    public function edit(Householditem $householditem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Householditem  $householditem
     * @return \Illuminate\Http\Response
     */
    public function update( Householditem $householditem)
    {
        $householditem->update(
            request([
                'itemname',
                'quantity',
                'description'
            ])
        );
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Householditem  $householditem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Householditem $householditem)
    {
        $householditem->delete();
        return redirect('/userpages.shoppinglisthouseholditems');
    }
}
