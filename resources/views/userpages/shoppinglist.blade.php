@extends('layouts.app')
@section('content')
<h3>Hello {{ Auth::user()->name }}</h3>
<h1>Create A Shopping List</h1>
@auth
<a href="/userpages.chorelist">Chore List</a>
<a href="/home">Your Account</a>
@endauth
@endsection
