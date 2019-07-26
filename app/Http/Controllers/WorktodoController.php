<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Worktodo;
use App\User;

class WorktodoController extends Controller
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
          Worktodo::create([
              'user_id' => Auth::id(),
              'task' => request('task'),
              'description' =>request('description')
          ]);
          return back();
      }
      /**
       * Display the specified resource.
       *
       * @param  \App\Worktodo  $householditem
       * @return \Illuminate\Http\Response
       */
      public function show(Worktodo $worktodo)
      {
          return view('userpages.updateworktodo', compact('worktodo'));
      }
      public function showDelete(Worktodo $worktodo)
      {
          return view('userpages.deleteworktodo', compact('worktodo'));
      }
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Householditem  $householditem
       * @return \Illuminate\Http\Response
       */
       public function update(Worktodo $worktodo)
       {
           $worktodo->update(
               request([
                   'task',
                   'description'
               ])
           );
           return redirect('/userpages.chorelistjob');
       }
       /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Householditem  $householditem
        * @return \Illuminate\Http\Response
        */
       public function destroy(Worktodo $worktodo)
       {
           $worktodo->delete();
           return redirect('/userpages.chorelistjob');
       }
       public function destroyAll()  {

           $destroyWorktodos = Worktodo::all()->where('user_id', Auth::id());

           foreach($destroyWorktodos as $destroyWorktodo){
               $destroyWorktodo->delete();
           }

           return back();
       }
}
