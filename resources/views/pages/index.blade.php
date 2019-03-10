@extends('layouts.app')
@section('content')
@section('title', 'home')
<div id="whitebackground">
  <hr id="hrGreen">
    <div id="box1"><img src="images/welcomeFlower.jpg" width="74" alt="welcome flower"></div>
      <div id="box2"><h1>Welcom to My Busy Life!</h1></div>
    <div id="box3"><img src="images/welcomeFlower.jpg" width="74" alt="welcome flower"></div>
  <hr id="hrGreen">
</div>
<br>
<br>
<h2>Register to My Busy Lif today, and you can build online your family budget,
  create a shopping list, create a chore list, and more.</h2>
  <div class="text-center">
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

<br><br><br><br>

</div>
@endsection
