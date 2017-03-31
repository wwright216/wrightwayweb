@extends ('layouts.master')
@section ('content')

<div class="modal-header">
  <div class="close-modal" data-dismiss="modal">
    <div class="lr">
        <div class="rl"></div>
    </div>
  </div>
</div>
<div class="modal-body">
  <div class="container" align="center">
  <img src="img/portfolio/8ball.png" class="img-responsive img-centered" alt="Magic 8-Ball">
    <div class="container">
  	<p align="center">The notorious magic 8-ball knows all! Ask a question below to see your fortune.
    </p>
    </div>
  <form class="form-horizontal" method="POST" action="/magic" id="magicForm">
  {{ csrf_field() }}
  		<div class="form-group">
  			<label class="sr-only" for="question">Question:
  			</label>
  			  <div class="input-group">
   				<input type="text" class="form-control" id="question" placeholder="Question ?" name="question" required>
  				</div>
      <br>
      <div id="successmagic"></div>
  		<button type="submit" class="btn btn-success">Ask!</button>
      </div>
  </form>
  <div class="modal-footer">
    <div class="clearfix text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
    </div>
  </div>
  </div>
</div>
@include ('layouts.errors')
@endsection
@section('jsfooter')
    <script src="/js/magic.js"></script>
@endsection