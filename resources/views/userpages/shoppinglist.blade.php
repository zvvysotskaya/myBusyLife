@extends('layouts.app')
@section('content')
@section('title', 'shopping list')
<h3>Hello {{ Auth::user()->name }}</h3>
<h1>My Shopping List</h1>
<h4>A Shopping List For Groceries</h4>
<h4>A Shopping List For Clothes</h4>
<h4>A Shopping List For Home Goods</h4>
@auth
<a href="/userpages.chorelist">Chore List</a>
<a href="/home">Your Account</a>
@endauth
@endsection
