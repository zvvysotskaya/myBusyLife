@extends('layouts.app')
@section('content')
@section('title', 'clothes')
<h1>Create a Shopping List For Clothes</h1>
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
                    <form method="POST" action="/userpages.shoppinglistclothes" class="">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="clothing">Clothing:</label>
                            <input type="text" name="clothing" required="required" class="form-control">
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
                <h4>Clothing</h4>
                <br>
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width:30%">Clothing</th>
                                <th style="width:10%">Quantity</th>
                                <th style="width:40%">Description</th>
                                <th style="width:10%">Update</th>
                                <th style="width:10%">Delete</th>
                            </tr>
                        </thead>
                        @foreach($clothings as $clothing)
                        <tbody>
                            <th>{{ $clothing->clothing }}</th>
                            <th>{{ $clothing->quantity }}</th>
                            <th>{{ $clothing->description }}</th>
                            <th>
                                <form method="GET" action="/userpages/{{$clothing->id}}/updateclothes">
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </form>
                            </th>
                            <th>
                                <form method="GET" action="/userpages/{{$clothing->id}}/deleteclothes">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </th>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="text-center">
                        <form method="POST" action="{{ url('userpages/shoppinglistclothes') }}">
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
