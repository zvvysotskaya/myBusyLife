@extends('layouts.itemheader')
@section('content')
<div class="container">
    <h2>Update household Item</h2>    
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col4create">
        </div>
        <div class="col-lg-6 col4create">
            <div class="col-lg-12 col12create">
                <div class="container">
                    <form method="POST" action="/userpages/{{$householditem->id}}/updatehouseholditem" class="groceries">
                        @method('PATCH')
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="groceryname">Grocery Name:</label>
                            <input type="text" name="itemname" value="{{$householditem->itemname}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</lable>
                            <input type="text" name="quantity" value="{{$householditem->quantity}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" value="{{$householditem->description}}" class="form-control">
                        </div>
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col4create">
        </div>
    </div>
</div>

@endsection
