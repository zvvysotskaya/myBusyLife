@extends('layouts.app')
@section('content')
@section('title', 'home')

<hr id="hrGreen">
<div id="whitebackground" class="d-flex">
    <div  class="col-2 offset-1 float-left imageHome">
        <img src="images/welcomeFlower.jpg"  alt="welcome flower" class="img-fluid float-left d-block ">
    </div>
    <div class="col-6 text-center">
        <h1>Welcome to My Busy Life!</h1>
    </div>
    <div class="col-2 offset-1 float-left imageHome">
        <img src="images/welcomeFlower.jpg" alt="welcome flower" class="img-fluid d-block float-left">
    </div>
</div>
<hr id="hrGreen" class="mb-5">
<div class="container">
    <h2>Register to My Busy Life today, and you can build online your family budget,
        create a shopping list, create a chore list, and more.
    </h2>
    <div class="text-center mb-5">
      @if (Route::has('login'))
          @auth
              <form action="{{'/home'}}">
                  <button type="submit" class="btn btn-info">Back To Your Account?</button>
              </form><br>
          @endauth
          @endif
             @if(Route::has('register'))
                <form action="{{ route('register') }}">
                  <button type="submit" class="btn btn-danger">Register<span class="spinner-grow spinner-grow-sm text-warning"></span></button>
                </form>
            @endif

    </div>
</div>

@endsection
