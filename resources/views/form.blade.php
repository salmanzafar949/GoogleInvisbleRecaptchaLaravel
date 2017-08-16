@extends('layouts.app')
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
@section('content')
  @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
           <p class="text text-danger">
           {{ $error }}
           </p>
    @endforeach
  @endif
 <form action="form" method="post" id="form">
      {{csrf_field()}}
   <input type="text" name="name" class="form-control" placeholder="Enter your name">
   <input type="email" name="email" class="form-control" placeholder="Enter your Email">
   <input type="text" name="username" class="form-control" placeholder="Enter your username">
   @captcha()
   <button class="btn btn-success">Submit</button>
 </form>
 {{--  <script>
   $(doument).ready(function() {
             $('#form').submit();
   });
 </script>  --}}
@stop