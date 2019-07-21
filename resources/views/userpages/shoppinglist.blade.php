@extends('layouts.app')
@section('content')
@section('title', 'shopping list')
<h3>Hello {{ Auth::user()->name }}</h3>
<h1 class="mb-lg-5 mb-md-4 mb-2">My Shopping List</h1>

<!--display buttons for a user account and a chore list-->

@auth
<div class="text-center">
    <div class="btn-group mb-0 mb-md-1 mb-lg-2">
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
<div class="bg_tb py-4">
    <div class="container">
        <div class="bg_box">
            <h4>The Grocery Shopping List</h4>
            <div class="container">
                <table class="table table-hover ">
                    <thead class="table-warning">
                         <tr >
                             <th class="text-center">Grocery Name</th>
                             <th class="text-center">Quantity</th>
                             <th class="text-center">Description</th>
                          </tr>
                      </thead>
                      @foreach($groceries as $grocery)
                      <tbody class="table_shoppinglist">
                          <th class="text-center">{{$grocery->groceryname}}</th>
                          <th class="text-center">{{$grocery->quantity}}</th>
                          <th class="text-center" >{{$grocery->description}}</th>
                      </tbody>
                      @endforeach
                  </table>
              </div>

          </div>
      </div>
</div>
<!--Display  a clothing list-->
<div class="bg_tb mt-5 py-4 mt-md-0 mt-sm-0">
    <div class="container">
        <div class="bg_box">
            <h4>The Shopping List For Clothes</h4>
            <div class="container">
                <table class="table table-hover">
                    <thead class="table-warning">
                        <tr>
                             <th class="text-center">Clothing Items</th>
                             <th class="text-center">Quantity</th>
                             <th class="text-center">Description</th>
                         </tr>
                     </thead>

                     @foreach($clothings as $clothing)
                     <tbody>
                         <th>{{ $clothing->clothing }}</th>
                         <th>{{ $clothing->quantity }}</th>
                         <th>{{ $clothing->description }}</th>
                     </tbody>
                     @endforeach
                 </table>
             </div>
         </div>
     </div>
 </div>

<!--Display a shopping list for household items-->

<div class="bg_tb mt-5 py-4 mt-md-0 mt-sm-0">
    <div class="container">
        <div class="bg_box">
            <h4>Household Items</h4>
            <div class="container">
                <table class="table table-hover">
                    <thead class="table-warning">
                        <tr>
                            <th class="text-center">Houshold Item Name</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Description</th>
                        </tr>
                    </thead>
                    @foreach($householditems as $householditem)
                    <tbody class="table_shoppinglist">
                        <th class="text-center">{{$householditem->itemname}}</th>
                        <th class="text-center">{{$householditem->quantity}}</th>
                        <th class="text-center">{{$householditem->description}}</th>
                    </tbody>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
