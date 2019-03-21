@extends('layouts.itemheader')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col4create">
        </div>
        <div class="col-lg-6 col4create">
            <div class="col-lg-12 col12create">
                <div class="container">
                    <h4>Item name: {{$householditem->itemname}}</h4>
                    <h2>Delete?</h2>                    
                    <form method="POST" action="/userpages/{{$householditem->id}}/deletehouseholditem" class="text-center">
                        @method('DELETE')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col4create">
        </div>
    </div>
</div>
@endsection
