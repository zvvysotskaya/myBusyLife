@extends('layouts.app')
@section('content')
<h3>Hello {{ Auth::user()->name }}</h3>
<h1>Create A Chore List</h1>
@endsection
