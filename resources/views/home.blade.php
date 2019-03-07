@extends('layouts.app')

@section('content')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Hello {{ Auth::user()->name }}</h3>
<!--There are buttons to access created items-->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col4created">
      <div class="col-lg-12 col12created1 text-center">
        <p>shopping list</p>
      </div>
    </div>
    <div class="col-lg-4 col4created">
      <div class="col-lg-12 col12created2 text-center">
        <p>chore list</p>
      </div>
    </div>
    <div class="col-lg-4 col4created">
      <div class="col-lg-12 col12created1 text-center">
        <p>something else</p>
      </div>
    </div>
  </div>
</div>
<br>
<!--Create items-->

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col4create">
      <div class="col-lg-12 col12create text-center">
        <h4>Cretae a New Shopping List</h4>
        <br><br>
        <div class="dropdown">
          <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Categories
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li class="text-center"><a href="{{ url('userpages.shoppinglistgroceries')}}">Groceries</a></li>
            <li class="text-center"><a href="{{ url('userpages.shoppinglisthomegoods')}}">Home Goods</a></li>
            <li class="text-center"><a href="{{ url('userpages.shoppinglistclothes')}}">Clothes</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col4create">
      <div class="col-lg-12 col12create text-center">
      <a href="{{ url('userpages.chorelist')}}"><h4>Create a New Chore List</h4></a>
      <br><br>
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Categories
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li class="text-center"><a href="{{ url('userpages.chorelisthome')}}">Household</a></li>
          <li class="text-center"><a href="{{ url('userpages.chorelistjob')}}">Job</a></li>
          <li class="text-center"><a href="{{ url('userpages.chorelistentertainment')}}">Entertainment</a></li>
        </ul>
      </div>
      </div>
    </div>
    <div class="col-lg-4 col4create">
      <div class="col-lg-12 col12create text-center">
      </div>
    </div>
  </div>
</div>
<h1>ARCHIVE</h1>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col4created">
      <div class="col-lg-12 col12created1 text-center">
        <p>shopping</p>
      </div>
    </div>
    <div class="col-lg-4 col4created">
      <div class="col-lg-12 col12created2 text-center">
        <p>chore</p>
      </div>
    </div>
    <div class="col-lg-4 col4created">
      <div class="col-lg-12 col12created1 text-center">
        <p>something else</p>
      </div>
    </div>
  </div>
</div><br>


@endsection
