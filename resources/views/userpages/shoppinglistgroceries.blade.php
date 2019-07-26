@extends('layouts.app')
@section('content')
<h1 class="mb-lg-4 mb-md-2 mb-0">Create/Manage The Grocery List</h1>
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
            <form method="POST" action="/userpages.shoppinglistgroceries" class="groceries">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="groceryname">Grocery Name:</label>
                    <input type="text" name="groceryname" required="required" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</lable>
                    <input type="text" name="quantity" required="required" class="form-control">
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
                        <th style="width:20%">Grocery Name</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:45%">Description</th>
                        <th style="width:10%">Update</th>
                        <th style="width:10%">Delete</th>
                    </tr>
                </thead>
                @foreach($groceries as $grocery)
                <tbody>
                    <th>{{$grocery->groceryname}}</th>
                    <th>{{$grocery->quantity}}</th>
                    <th>{{$grocery->description}}</th>
                    <th>
                        <form method="GET" action="/userpages/{{ $grocery->id }}/updategrocery">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </form>
                    </th>
                    <th>
                        <form method="GET" action="/userpages/{{ $grocery->id }}/deletegrocery">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </th>
                </tbody>
                @endforeach
            </table>
            <div class="text-center">
                <form method="POST" action="{{ url('userpages/shoppinglistgroceries') }}">
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
