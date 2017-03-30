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
<img src="img/portfolio/conversion.png" class="img-responsive img-centered" alt="Unit Conversion">
<div class="container">
<p align="center">
Using the tool below, please enter the value you would like to convert and select the unit of measure you would like to convert it to.
</p>
</div>
<div class="container">
<div class="col-md-5 col-sm-5 col-lg-5" style="float: left;">
<h5 align="center">Standard to Metric</h5>
<form class="form-inline" action="#" method="POST" id="convertStandard">
  {{ csrf_field() }}
  <input type="hidden" name="frmname" value="standard">
  <div class="form-group">
    <label class="sr-only" for="unitAmount">Amount</label>
      <div class="input-group">
        <input type="text" class="form-control" id="unitAmount" placeholder="Amount" name="unitAmount" required>
        <select class="form-control" name="unit">
          <option id="dollar" value="dollar">$ (USD) to &pound;</option>
          <option id="pound" value="pound">Pound to Kilogram</option>
          <option id="quart" value="quart">Quart to Liter</option>
          <option id="yards" value="yard">Yards to Meters</option>
          <option id="mile" value="mile">Mile to Kilometer</option>
       </select>
      </div>
      <br>
      </br>
  <button type="submit" class="btn btn-success">Convert!</button>
  </div>
</form>
</div>
<div class="col-md-5 col-sm-5 col-lg-5" style="float: right;">
<h5 align="center">Metric to Standard</h5>
<form class="form-inline" action="#" method="POST" id="convertMetric">
  {{ csrf_field() }}
  <input type="hidden" name="frmname" value="metric">
  <div class="form-group">
    <label class="sr-only" for="unitAmount">Amount</label>
      <div class="input-group">
        <input type="text" class="form-control" id="unitAmount" placeholder="Amount" name="unitAmount" required>
        <select class="form-control" name="unit">
          <option id="british pound" value="british pound">&pound; to $ (USD)</option>
          <option id="kilogram" value="kilogram">Kilogram(s) to Pound(s)</option>
          <option id="liter" value="liter">Liter(s) to Quart(s)</option>
          <option id="meter" value="meter">Meter(s) to Yard(s)</option>
          <option id="kilometer" value="kilometer">Kilometer(s) to Mile(s)</option>
       </select>
      </div>
      <br>
      </br>
  <button type="submit" class="btn btn-success">Convert!</button>
  </div>
</form>
</div>
</div>
<br>
<br>
<div class="modal-footer">
    <div class="clearfix text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
    </div>
</div>
@include ('layouts.errors')
@endsection