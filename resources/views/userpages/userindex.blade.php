@extends('layouts.app')
@section('content')

<h2>Hello {{ Auth::user()->name }}</h2>
<h1>This is your account</h1>
@auth
<div >
  <a href="{{url('userpages.shoppinglist')}}">Create Shopping List</a>
</div>
<div>
  <a href="{{url('userpages.chorelist')}}">Create Chore List</a>
</div>
@endauth

@endsection
