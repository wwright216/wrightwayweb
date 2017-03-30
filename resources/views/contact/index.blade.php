@extends ('layouts.master')
@section ('content')
<div class="container">
<h1 align="center">Contact Wade</h1>
<meta name="csrf-token" content="{{ csrf_token() }}">
<hr class="star-primary">
<form class="form-horizontal" method="POST" action="#" id="contactForm">
  <div class="form-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">   
    <label for="name">Name</label> 
    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-validation-required-message="Please enter your name.">
    <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="form-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
    <label for="email">Email</label> 
    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required data-validation-required-message="Please enter a valid email address.">
    <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="form-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
    <label for="message">Message</label> 
    <textarea class="form-control" id="message" name="message" placeholder="Message" required data-validation-required-message="Please enter a message to send."></textarea>
    <p class="help-block text-danger"></p>
    </div>
  </div>
  <br>
  <div id="success"></div>
  <div class="form-group col-xs-12">
  <button type="submit" class="btn btn-success btn-lg">Send Wade A Message!
  </button>
  </div>
</form>
</div>
@include ('layouts.errors')
@endsection
@section('jsfooter')
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="/js/contact_me.js"></script>
@endsection