<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Grocery;
use App\Householditem;
use App\Clothing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function userindex()
    {
        return view('userpages.userindex');
    }
    public function chorelist()
    {
        return view('userpages.chorelist');
    }
    public function shoppinglist()
    {
        $householditems = Householditem::all()->where('user_id', Auth::id());
        $groceries = Grocery::all()->where('user_id', Auth::id());
        $clothings = Clothing::all()->where('user_id', Auth::id());
        return view('userpages.shoppinglist', compact('groceries', 'householditems', 'clothings'));//, 'householditems'));
    }
    public function shoppinglistgroceries()
    {

        $groceries = Grocery::all()->where('user_id', Auth::id());
        return view('userpages.shoppinglistgroceries', compact('groceries'));
    }
    public function shoppinglistclothes()
    {
      $clothings = Clothing::all()->where('user_id', Auth::id());
      return view('userpages.shoppinglistclothes', compact('clothings'));
    }
    public function shoppinglisthouseholditems()
    {
        $householditems = Householditem::all()->where('user_id', Auth::id());
        return view('userpages.shoppinglisthouseholditems', compact('householditems'));
    }
    public function chorelisthome()
    {
      return view('userpages.chorelisthome');
    }
    public function chorelistjob()
    {
      return view('userpages.chorelistjob');
    }
    public function chorelistentertainment()
    {
      return view('userpages.chorelistentertainment');
    }
}
