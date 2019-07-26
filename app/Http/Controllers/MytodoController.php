<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mytodo;
use App\User;

class MytodoController extends Controller
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
      Mytodo::create([
          'user_id' => Auth::id(),
          'task' => request('task'),
          'description' =>request('description')
      ]);
      return back();
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Mytodo  $householditem
   * @return \Illuminate\Http\Response
   */
  public function show(Mytodo $mytodo)
  {
      return view('userpages.updatemytodo', compact('mytodo'));
  }
  public function showDelete(Mytodo $mytodo)
  {
      return view('userpages.deletemytodo', compact('mytodo'));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Householditem  $householditem
   * @return \Illuminate\Http\Response
   */
  public function update(Mytodo $mytodo)
  {
      $mytodo->update(
          request([
              'task',
              'description'
          ])
      );
      return redirect('/userpages.chorelistentertainment');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Householditem  $householditem
   * @return \Illuminate\Http\Response
   */
  public function destroy(Mytodo $mytodo)
  {
      $mytodo->delete();
      return redirect('/userpages.chorelistentertainment');
  }
  public function destroyAll()  {

      $destroyMytodos = Mytodo::all()->where('user_id', Auth::id());

      foreach($destroyMytodos as $destroyMytodo){
          $destroyMytodo->delete();
      }

      return back();
  }
}
