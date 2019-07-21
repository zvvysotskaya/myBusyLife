@extends('layouts.app')

@section('content')
@section('title', 'your page')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Hello {{ Auth::user()->name }}</h3>
<!--There are buttons to access created items-->
<div class="container-fluid">
    <div class="row">
        <div class="col-6 col4created">
            <div class="text-center">
                <a href="{{ url('userpages.shoppinglist') }}" class="btn btn-lg btn1 btn-block">
                    Created Shopping List
                </a>
            </div>
        </div>
        <div class="col-6 col4created">
            <div class="text-center">
                <a href="{{ url('userpages.chorelist') }}" class="btn btn-lg btn2 btn-block">
                    Created Chore List
                </a>
            </div>
        </div>
    </div>
</div>

<!--Create items-->

<div class="container-fluid">
    <div class="row">
        <div class="col-6 col4create">
            <div class="col-12 col12create text-center">
                <h4>Create a New Shopping List</h4>
                <br><br>
                <ul class="list-unstyled  justify-content-center">
                    <li class="mb-3">
                        <img src="images/icon_shopping_bag_green2.png" alt="icon shopping bag" class="img-fluid">
                    </li>
                    <li class="mb-3">
                    <div class="dropdown">
                        <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                            Categories
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="text-center"><a href="{{ url('userpages.shoppinglistgroceries') }}">Groceries</a></li>
                            <li class="text-center"><a href="{{ url('userpages.shoppinglisthouseholditems') }}">Household Items</a></li>
                            <li class="text-center"><a href="{{ url('userpages.shoppinglistclothes') }}">Clothes</a></li>
                        </ul>
                    </div><!--.dropdown-->
                    </li>
                </ul>
            </div><!--.col-12-->
        </div><!--.col-lg-6-->
        <div class="col-6 col4create">
            <div class="col-12 col12create text-center">
                <h4>Create a New Chore List</h4>
                <br><br>
                <ul class="list-unstyled  justify-content-center">
                    <li class="mb-3">
                        <img src="images/icon_thumbtack_blue2.png" alt="icon shopping bag" class="img-fluid">
                    </li>
                    <li class="mb-3">
                    <div class="dropdown">
                        <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                            Categories
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="text-center"><a href="{{ url('userpages.chorelisthome') }}">Household</a></li>
                            <li class="text-center"><a href="{{ url('userpages.chorelistjob') }}">Job</a></li>
                            <li class="text-center"><a href="{{ url('userpages.chorelistentertainment') }}">Entertainment</a></li>
                        </ul>
                    </div><!--dropdown-->
                    </li>
                </ul>
            </div><!--.col-12-->
        </div><!--.col-lg-6-->
    </div><!--.row-->
</div><!--.container-fluid-->
<h1 class="my-4">ARCHIVE</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-sm-12 col4create">
            <div class="text-center">
                <a href="#" class="btn btn-lg btn1 btn-block">
                    shopping
                </a>
            </div>
        </div>
        <div class="col-6  col-sm-12 col4create">
            <div class="text-center">
                <a href="#" class="btn btn-lg btn2 btn-block">
                    chore
                </a>
            </div>
        </div>        
    </div><!--.row-->
</div><!--.container-fluid-->
<br>


@endsection
