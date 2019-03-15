@extends('layouts.app')
@section('content')
<h1>Create A Groceries List</h1>
@Auth
<div class="text-center">
    <div class="btn-group">
        <form action="{{ '/userpages.shoppinglist' }}">
            <button type="submit" class="btn btn-danger">Shopping List</button>
        </form>
        <form action="{{ '/userpages.chorelist' }}">
            <button type="submit" class="btn btn-danger">Chore List</button>
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
        <h4>A Grocery List</h4>
        <br>
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
@endsection
