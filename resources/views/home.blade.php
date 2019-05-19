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
        <div class="col-lg-4 col4created">
            <div class="text-center">
                <a href="{{ url('userpages.shoppinglist') }}" class="btn btn-lg btn1 btn-block">
                    shopping list
                </a>
            </div>
        </div>
        <div class="col-lg-4 col4created">
            <div class="text-center">
                <a href="{{ url('userpages.chorelist') }}" class="btn btn-lg btn2 btn-block">
                    chore list
                </a>
            </div>
        </div>
        <div class="col-lg-4 col4created">
            <div class="text-center">
                <a href="#" class="btn btn-lg btn3 btn-block">
                    something else
                </a>
            </div>
        </div>
    </div>
</div>

<!--Create items-->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col4create">
            <div class="col-lg-12 col12create text-center">
                <h4>Create a New Shopping List</h4>
                <br><br>
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
                        Categories
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="text-center"><a href="{{ url('userpages.shoppinglistgroceries') }}">Groceries</a></li>
                        <li class="text-center"><a href="{{ url('userpages.shoppinglisthouseholditems') }}">Household Items</a></li>
                        <li class="text-center"><a href="{{ url('userpages.shoppinglistclothes') }}">Clothes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col4create">
            <div class="col-lg-12 col12create text-center">
                <h4>Create a New Chore List</h4>
                <br><br>
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
                        Categories
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="text-center"><a href="{{ url('userpages.chorelisthome') }}">Household</a></li>
                        <li class="text-center"><a href="{{ url('userpages.chorelistjob') }}">Job</a></li>
                        <li class="text-center"><a href="{{ url('userpages.chorelistentertainment') }}">Entertainment</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col4create">
            <div class="col-lg-12 col12create text-center">
            </div>
        </div>
    </div>
</div>
<h1>ARCHIVE</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col4created">
            <div class="text-center">
                <a href="#" class="btn btn-lg btn1 btn-block">
                    shopping
                </a>
            </div>
        </div>
    <div class="col-lg-4 col4created">
        <div class="text-center">
            <a href="#" class="btn btn-lg btn2 btn-block">
                chore
            </a>
        </div>
    </div>
    <div class="col-lg-4 col4created">
        <div class="text-center">
            <a href="#" class="btn btn-lg btn3 btn-block">
                something else
            </a>
        </div>
    </div>
</div>
<br>


@endsection
