@extends ('layouts.master')
@section ('content')
  <div class="close-modal" data-dismiss="modal">
    <div class="lr">
        <div class="rl"></div>
    </div>
  </div>
</div>
<div class="modal-body">
<div class="container" align="left">
 <img src="/manchester-city-logo.png" class="img-responsive img-centered" alt="Man City Quiz">
<p align="center">I am a huge fan of Manchester City Football Club (MCFC) of the English Premier League. I have played soccer since I was a child and this has always been my team of choice. Below you will find a fun little quiz about the team and their history. Good luck!
</p>
<hr>
<br>
<form class="form-horizontal" method="POST" action="/quiz" id="quizForm" name="quizForm">
<meta name="csrf-token" content="{{ csrf_token() }}">
  {{ csrf_field() }}
<ol>

<div class="form-group">
	  <li>
	  	<label>Who is Man City's Manager?</label>
	  </li>
</div>

<div class="radio">
  <label>
    <input type="radio" name="Question1" id="Question1" value="A" required">
    A) Roberto Mancini
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question1" id="Question1" value="B">
    B) José Mourinho
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question1" id="Question1" value="C">
    C) Pep Guardiola
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question1" id="Question1" value="D">
    D) Luis Enrique
  </label>
</div>
<br>
<div class="form-group">
	  <li>
	  	<label>When did Manchester City last win the English Premier League?</label>
	  </li>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question2" id="Question2" value="A" required>
    A) 2013-14
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question2" id="Question2" value="B">
    B) 2011-12
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question2" id="Question2" value="C">
    C) 2015-16
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question2" id="Question2" value="D">
    D) 1967-68
  </label>
</div>
<br>
<div class="form-group">
    <li>
      <label>What team in the MLS is the "sister team" of Manchester City?</label>
    </li>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question3" id="Question3" value="A" required>
    A) Orlando City SC
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question3" id="Question3" value="B">
    B) New York City FC
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question3" id="Question3" value="C">
    C) Seatle Sounders FC
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question3" id="Question3" value="D">
    D) Toronto FC
  </label>
</div>
<br>
<div class="form-group">
    <li>
      <label>What is the furthest that Man City has made it in the Champions League?</label>
    </li>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question4" id="Question4" value="A" required>
    A) Group Stage
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question4" id="Question4" value="B">
    B) Round of 16
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question4" id="Question4" value="C">
    C) Quarter-Finals
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question4" id="Question4" value="D">
    D) Semi-Finals
  </label>
</div>
</ol>
<br>
<div class="containter">
  <div class="form-group">
  <button type="submit" class="btn btn-success">Grade My Quiz!
  </button>
  </div>
</div>
</form>
<div id="quizresults">
</div>
<br>
  <div class="modal-footer">
    <div class="clearfix text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
    </div>
  </div>
  </div>
</div>
@include ('layouts.errors')
@endsection