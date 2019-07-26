@extends('layouts.app')
@section('content')
@section('title', 'houehold')


  <h1 class="mb-lg-4 mb-md-2 mb-0">Create/Manage The Household Chore List</h1>
  @Auth
  <div class="text-center">
      <div class="btn-group mb-lg-2 mb-md-1 mb-0">
          <form action="{{ '/userpages.shoppinglist' }}">
              <button type="submit" class="btn btn-danger">Shopping Lists</button>
          </form>
          <form action="{{ '/userpages.chorelist' }}">
              <button type="submit" class="btn btn-danger">To Do Lists</button>
          </form>
          <form action="{{ '/home' }}">
              <button type="submit" class="btn btn-danger">Account</button>
          </form>
      </div>
  </div>
  @endauth
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col4create">
      </div>
      <div class="col-lg-6 col4create">
      <div class="col-lg-12 col12create">
          <div class="container">
              <h4>Add to Your List</h4>
              <form method="POST" action="/userpages.chorelisthome" class="chores">
                  {{csrf_field()}}
                  <div class="form-group">
                      <label for="task">Task:</lable>
                      <input type="text" name="task" required="required" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="description">Description:</label>
                      <input type="text" name="description" required="requred" class="form-control">
                  </div>
                      <input type="submit" class="btn btn-primary" value="Create">
              </form>
              <br>
              <hr id="hrGreen">
              <br><br>
          </div>
          <h4>On Your List</h4>
          <br>
          <div class="container">
              <table class="table table-striped table-responsive">
                  <thead>
                      <tr>
                          <th style="width:30%">Task</th>
                          <th style="width:48%">Description</th>
                          <th style="width:10%">Update</th>
                          <th style="width:10%">Delete</th>
                      </tr>
                  </thead>
                  @foreach($householdchores as $householdchore)
                  <tbody>
                      <th>{{$householdchore->task}}</th>
                      <th>{{$householdchore->description}}</th>
                      <th>
                          <form method="GET" action="/userpages/{{ $householdchore->id }}/updatehouseholdchore">
                              <input type="submit" class="btn btn-primary" value="Update">
                          </form>
                      </th>
                      <th>
                          <form method="GET" action="/userpages/{{ $householdchore->id }}/deletehouseholdchore">
                              <input type="submit" class="btn btn-danger" value="Delete">
                          </form>
                      </th>
                  </tbody>
                  @endforeach
              </table>
              <div class="text-center">
                  <form method="POST" action="{{ url('userpages/chorelisthome') }}">
                      @method('DELETE')
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-warning">Delete All</button>
                  </form>
              </div>
          </div>
      </div>
      </div>
      <div class="col-lg-3 col4create">
      </div>
      </div>
  </div>
  @endsection
