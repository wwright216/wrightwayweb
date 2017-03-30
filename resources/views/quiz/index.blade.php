@extends ('layouts.master')
@section ('content')
<div class="container">
<p align="center">I am a huge fan of Manchester City Football Club (MCFC) of the English Premier League. I have played soccer since I was a child and this has always been my team of choice. Below you will find a fun little quiz about the team and their history. Good luck!
</p>
<hr>
<br>
<form class="form-horizontal" method="POST" action="/quiz" id="quiz">

  {{ csrf_field() }}
<ol>

<div class="form-group">
	  <li>
	  	<label>Who is Man City's Manager?</label>
	  </li>
</div>

<div class="radio">
  <label>
    <input type="radio" name="Question1" id="Q1A" value="A" required>
    A) Roberto Mancini
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question1" id="Q1B" value="B">
    B) José Mourinho
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question1" id="Q1C" value="C">
    C) Pep Guardiola
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question1" id="Q1D" value="D">
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
    <input type="radio" name="Question2" id="Q2A" value="A" required>
    A) 2013-14
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question2" id="Q2B" value="B">
    B) 2011-12
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question2" id="Q2C" value="C">
    C) 2015-16
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question2" id="Q2D" value="D">
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
    <input type="radio" name="Question3" id="Q3A" value="A" required>
    A) Orlando City SC
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question3" id="Q3B" value="B">
    B) New York City FC
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question3" id="Q3C" value="C">
    C) Seatle Sounders FC
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question3" id="Q3D" value="D">
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
    <input type="radio" name="Question4" id="Q4A" value="A" required>
    A) Group Stage
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question4" id="Q4B" value="B">
    B) Round of 16
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question4" id="Q4C" value="C">
    C) Quarter-Finals
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="Question4" id="Q4D" value="D">
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
</div>
@include ('layouts.errors')
@endsection