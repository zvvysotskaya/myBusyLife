@extends('layouts.itemheader')
@section('content')
<div class="bg-tb mt-5 py-4 mt-md-0 mt-sm-0">
    <div class="container">
        <div class="bg_box">
            <h4>Task: {{ $householdchore->task }}</h4>
            <h2>Delete?</h2>
            <form method="POST" action="/userpages/{{ $householdchore->id }}/deletehouseholdchore" class="text-center">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>
</div>
@endsection
