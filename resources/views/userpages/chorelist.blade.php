@extends('layouts.app')
@section('content')
<h3>Hello {{ Auth::user()->name }}</h3>
<h1>My Chore List</h1>
<h4>My Household Chore List</h4>
<h4>A Chore List For My Job</h4>
<h4>A Chore List For An Entertainment</h4>
@endsection
