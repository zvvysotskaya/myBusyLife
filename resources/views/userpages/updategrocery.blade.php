@extends('layouts.itemheader')
@section('content')
<div class="container">
    <h2>Update grocery</h2>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col4create">
        </div>
        <div class="col-lg-6 col4create">
            <div class="col-lg-12 col12create">
                <div class="container">
                    <form method="POST" action="/userpages/{{$grocery->id}}/updategrocery" class="groceries">
                        @method('PATCH')
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="groceryname">Grocery Name:</label>
                            <input type="text" name="groceryname" value="{{$grocery->groceryname}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</lable>
                            <input type="text" name="quantity" value="{{$grocery->quantity}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" value="{{$grocery->description}}" class="form-control">
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
