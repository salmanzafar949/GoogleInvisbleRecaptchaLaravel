@extends('layouts.app')
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
   <button type="submit" class="btn btn-success">Submit</button>
 </form>
@stop