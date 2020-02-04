@extends('layouts.welcome')

@section('content')
<div class="container">

<div class="jumbotron text-center jumbotron-custom">
  <h1 class="display-4">Ifesokan CDA</h1>
  <p class="lead">Welcome to Ifesokan CDA - our online hub to seamlessly carry out CDA activities with good record keeping. </p>
  <hr class="my-4">
  <p>If you are already a member, sign in below. Otherwise, contact the secretary to create an account for you.</p>
  <a class="btn btn-primary btn-md" href="/icda/public/registry" role="button">Sign In</a> 
  <a class="btn btn-success btn-md" href="/icda/public/contactus" role="button">Contact Us</a>
</div>
</div>
@endsection