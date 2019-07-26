<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Householdchore;
use App\User;


class HouseholdChoreController extends Controller
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

          'task' =>['required', 'min:1', 'max:100'],
          'description' =>['required', 'min:2', 'max:100']
      ]);
      Householdchore::create([
          'user_id' => Auth::id(),
          'task' => request('task'),
          'description' =>request('description')
      ]);
      return back();
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Householdchore  $householditem
   * @return \Illuminate\Http\Response
   */
  public function show(Householdchore $householdchore)
  {
      return view('userpages.updatehouseholdchore', compact('householdchore'));
  }
  public function showDelete(Householdchore $householdchore)
  {
      return view('userpages.deletehouseholdchore', compact('householdchore'));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Householditem  $householditem
   * @return \Illuminate\Http\Response
   */
  public function update( Householdchore $householdchore)
  {
      $householdchore->update(
          request([
              'task',
              'description'
          ])
      );
      return redirect('/userpages.chorelisthome');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Householditem  $householditem
   * @return \Illuminate\Http\Response
   */
  public function destroy(Householdchore $householdchore)
  {
      $householdchore->delete();
      return redirect('/userpages.chorelisthome');
  }
  public function destroyAll()  {

      $destroyHouseholdchores = Householdchore::all()->where('user_id', Auth::id());

      foreach($destroyHouseholdchores as $destroyHouseholdchore){
          $destroyHouseholdchore->delete();
      }

      return back();
  }
}
