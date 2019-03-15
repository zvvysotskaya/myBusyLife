@extends('layouts.app')
@section('content')
@section('title', 'shopping list')
<h3>Hello {{ Auth::user()->name }}</h3>
<h1>My Shopping List</h1>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col4create">
  </div>
  <div class="col-lg-6 col4create">
    <div class="col-lg-12 col12create">
      <h4>A Grocery List</h4>
      <div class="container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Grocery Name</th>
              <th>Quantity</th>
              <th>Description</th>
            </tr>
          </thead>
            @foreach($groceries as $grocery)
          <tbody>
            <th>{{$grocery->groceryname}}</th>
            <th>{{$grocery->quantity}}</th>
            <th>{{$grocery->description}}</th>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
    <div class="col-lg-3 col4create">
    </div>
  </div>
</div>
<h4>A Clothes Shopping List</h4>
<h4>Household Items</h4>
@auth
<a href="/userpages.chorelist">Chore List</a><br>
<a href="/home">Your Account</a>
@endauth
{{date('m')}}
@endsection
