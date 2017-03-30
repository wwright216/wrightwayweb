@extends ('layouts.master')
@section ('content')

<div class="container" style="text-align: center;">
<p>The Magic 8-Ball says, "{{ $answeroutput }}"</p>

<br>

<form class="form-inline" action="/magic" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label class="sr-only" for="Question">Question: </label>
    <div class="input-group">
      <input type="text" class="form-control" id="Question" placeholder="Question ?" name="Question" required>
  	</div>
  </div>
<button type="submit" class="btn btn-success">Ask!</button>
</form>
</div>
@include ('layouts.errors')
@endsection