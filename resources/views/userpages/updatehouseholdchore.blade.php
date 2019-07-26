@extends('layouts.itemheader')
@section('content')
<div class="container">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col4create">
        </div>
        <div class="col-lg-6 col4create">
            <div class="col-lg-12 col12create">
                <div class="container">
                    <h2>Update  Household Chore </h2>
                    <form method="POST" action="/userpages/{{$householdchore->id}}/updatehouseholdchore" class="householdchore">
                        @method('PATCH')
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="task">Task:</lable>
                            <input type="text" name="task" value="{{$householdchore->task}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" value="{{$householdchore->description}}" class="form-control">
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
