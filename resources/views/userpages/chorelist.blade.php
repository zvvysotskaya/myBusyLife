@extends('layouts.app')
@section('content')
@section('title', 'chore list')
<h3>Hello {{ Auth::user()->name }}</h3>
<h1 class="mb-lg-5 mb-md-4 mb-2">My To Do Lists</h1>

<!--display buttons for a user account and a chore list-->

@auth
<div class="text-center">
    <div class="btn-group mb-0 mb-md-1 mb-lg-2">
        <form action={{ '/userpages.shoppinglist' }}>
            <button type="submit" class="btn btn-danger">Shopping Lists</button>
        </form>
        <form action={{ '/home' }}>
            <button class="btn btn-danger">Account</button>
        </form>
    </div>
</div>
@endauth
<!--display a household chore list-->
<div class="bg_tb py-4">
    <div class="container">
        <div class="bg_box">
            <h4>My Household Chore List</h4>
            <div class="container">
                <table class="table table-hover ">
                    <thead class="table-warning">
                         <tr>
                           <th style="width:5%"></th>
                           <th  style="width:35%">Task</th>
                           <th  style="width:58%">Description</th>
                          </tr>
                      </thead>
                      @foreach($householdchores as $householdchore)
                      <tbody class="table_shoppinglist">
                        <tr class="householdchore1">
                          <td><input type="checkbox" checked="checked" class="householdchore"></td>
                          <td>{{ $householdchore->task }}</td>
                          <td>{{ $householdchore->description }}</td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
              </div><!--.container-->
          </div><!--.bg_box-->
      </div><!--.container-->
</div><!--.bg_tb-->
<div class="bg_tb mt-5 py-4 mt-md-0 mt-sm-0">
    <div class="container">
        <div class="bg_box">
            <h4>My To Do List</h4>
            <div class="container">
                <table class="table table-hover ">
                    <thead class="table-warning">
                         <tr>
                           <th style="width:5%"></th>
                           <th  style="width:35%">Task</th>
                           <th  style="width:58%">Description</th>
                          </tr>
                      </thead>
                      @foreach($mytodos as $mytodo)
                      <tbody class="table_shoppinglist">
                        <tr class="householdchore1">
                          <td><input type="checkbox" checked="checked" class="householdchore"></td>
                          <td>{{ $mytodo->task }}</td>
                          <td>{{ $mytodo->description }}</td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
              </div><!--.container-->
         </div>
     </div>
 </div>s
<!--Display  a to do list for work-->
<div class="bg_tb mt-5 py-4 mt-md-0 mt-sm-0">
    <div class="container">
        <div class="bg_box">
            <h4>Work Day To Do List</h4>
            <div class="container">
                <table class="table table-hover ">
                    <thead class="table-warning">
                         <tr>
                           <th style="width:5%"></th>
                           <th  style="width:35%">Task</th>
                           <th  style="width:58%">Description</th>
                          </tr>
                      </thead>
                      @foreach($householdchores as $householdchore)
                      <tbody class="table_shoppinglist">
                        <tr class="householdchore1">
                          <td><input type="checkbox" checked="checked" class="householdchore"></td>
                          <td>{{ $householdchore->task }}</td>
                          <td>{{ $householdchore->description }}</td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
              </div><!--.container-->
         </div>
     </div>
 </div>

@endsection
