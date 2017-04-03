@extends ('layouts.master')
@section ('content')
<div class="close-modal" data-dismiss="modal">
  <div class="lr">
      <div class="rl"></div>
  </div>
</div>
<div class="modal-body">
  <div class="container">
    <h1 align="center">Contact Wade</h1>
    <hr class="star-primary">
      <form class="form-horizontal" method="POST" action="#" id="modalContactForm">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      {{ csrf_field() }}
        <div class="form-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">   
          <label for="contactname">Name</label> 
          <input type="text" class="form-control" id="contactname" name="contactname" placeholder="Your Name" required data-validation-required-message="Please enter your name.">
          <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="form-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
          <label for="contactemail">Email</label> 
          <input type="email" class="form-control" id="contactemail" name="contactemail" placeholder="Email Address" required data-validation-required-message="Please enter a valid email address.">
          <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="form-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
          <label for="contactmessage">Message</label> 
          <textarea class="form-control" id="contactmessage" name="contactmessage" placeholder="Message" required data-validation-required-message="Please enter a message to send."></textarea>
          <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="clearfix">
        <button type="submit" class="btn btn-success btn-lg">Send Wade A Message!
        </button>
        </div>
      </form>
      <br>
      <div id="successmodal"></div>
    <div class="modal-footer">
      <div class="clearfix text-center">
      <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
      </div>
    </div>
  </div>
</div>
@include ('layouts.errors')
@endsection