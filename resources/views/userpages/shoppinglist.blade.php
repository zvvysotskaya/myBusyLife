@extends('layouts.app')
@section('content')
@section('title', 'shopping list')
<h3>Hello {{ Auth::user()->name }}</h3>
<h1>My Shopping List</h1>

<!--display buttons for a user account and a chore list-->

@auth
<div class="text-center">
    <div class="btn-group">
        <form action={{ '/userpages.chorelist' }}>
            <button type="submit" class="btn btn-danger">Chore List</button><br>
        </form>
        <form action={{ '/home' }}>
            <button class="btn btn-danger">Account</button>
        </form>
    </div>
</div>
@endauth

<!--display a groecery list-->

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
                    <form method="POST" action="{{ url('userpages/shoppinglist', [Auth::id()])}}">
                        @method('DELETE')
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-warning">Delete All</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col4create">
        </div>
    </div>
</div>

<!--Display  a clothing list-->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col4create">
        </div>
        <div class="col-lg-6 col4create">
            <div class="col-lg-12 col12create">
                <h4>A Clothing List</h4>
                    <div class="container">
                        <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Clothing Items</th>
                                      <th>Quantity</th>
                                      <th>Description</th>
                                  </tr>
                              </thead>
                              <!--
                              @foreach($groceries as $grocery)
                              <tbody>
                                  <th>{{$grocery->groceryname}}</th>
                                  <th>{{$grocery->quantity}}</th>
                                  <th>{{$grocery->description}}</th>
                              </tbody>
                              @endforeach
                          -->
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col4create">
        </div>
    </div>
</div>

<!--Display a shopping list for household items-->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col4create">
        </div>
        <div class="col-lg-6 col4create">
            <div class="col-lg-12 col12create">
                <h4>Household Items</h4>
                    <div class="container">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Houshold Item Name</th>
                                    <th>Quantity</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            @foreach($householditems as $householditem)
                            <tbody>
                                <th>{{$householditem->itemname}}</th>
                                <th>{{$householditem->quantity}}</th>
                                <th>{{$householditem->description}}</th>
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

{{date('m-d-y')}}
@endsection
