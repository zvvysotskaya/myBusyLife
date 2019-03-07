<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      return view('userpages.shoppinglist');
    }
    public function shoppinglistgroceries()
    {
      return view('userpages.shoppinglistgroceries');
    }
    public function shoppinglistclothes()
    {
      return view('userpages.shoppinglistclothes');
    }
    public function shoppinglisthomegoods()
    {
      return view('userpages.shoppinglisthomegoods');
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
