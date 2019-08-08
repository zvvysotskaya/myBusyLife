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
            <button type="submit" class="btn btn-danger">To Do Lists</button><br>
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
                         <tr>
                           <th style="width:5%"></th>
                           <th  style="width:20%">Grocery Name</th>
                           <th  style="width:10%">Quantity</th>
                           <th  style="width:63%">Description</th>
                          </tr>
                      </thead>
                      @foreach($groceries as $grocery)
                      <tbody class="table_shoppinglist">
                        <tr class="grocery1">
                          <td><input type="checkbox" name="completed"  onChange="checked" class="grocery"></td>
                          <td>{{$grocery->groceryname}}</td>
                          <td>{{$grocery->quantity}}</td>
                          <td>{{$grocery->description}}</td>
                        </tr>
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
                <table class="table table-hover clothes">
                    <thead class="table-warning">
                        <tr>
                             <th style="width:5%"></th>
                             <th  style="width:20%">Clothing Items</th>
                             <th  style="width:10%">Quantity</th>
                             <th  style="width:63%">Description</th>
                         </tr>
                     </thead>
                     @foreach($clothings as $clothing)
                     <tbody>
                       <tr class="clothes1">
                        <td ><input type="checkbox" name="completed" onChange="checked" class="clothes"></td>
                         <td>{{ $clothing->clothing }}</td>
                         <td>{{ $clothing->quantity }}</td>
                         <td>{{ $clothing->description }}</td>
                       </tr>
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
                          <th style="width:5%"></th>
                          <th  style="width:20%">Household Item Name</th>
                          <th  style="width:10%">Quantity</th>
                          <th  style="width:63%">Description</th>
                        </tr>
                    </thead>
                    @foreach($householditems as $householditem)
                    <tbody class="table_shoppinglist">
                      <tr class="household1">
                        <td><input type="checkbox" onChange="checked" class="household"></td>
                        <td>{{$householditem->itemname}}</td>
                        <td>{{$householditem->quantity}}</td>
                        <td>{{$householditem->description}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
