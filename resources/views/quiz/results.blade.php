@extends ('layouts.master')
@section ('content')
<h1 align="center">Quiz Grade:</h1>
<br>
<p align="center">
@if ($score == 100)
Congratulations! You scored 100%! You must be a Man City fan, too.
@else
You scored {{ $score }}%. Try again and see if you can get a perfect score!
@endif
</p>
@endsection