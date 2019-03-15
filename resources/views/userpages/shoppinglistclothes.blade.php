@extends('layouts.app')
@section('content')
@section('title', 'clothes')
<h1>Create A Shopping List For Clothes</h1>
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
@endsection
