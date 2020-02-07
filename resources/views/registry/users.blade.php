@extends('layouts.app');
<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline">
        <a class="nav-link " href="new-user">Register New User</a>
        <a class="nav-link active" href="#">
            View Users
            <span class="badge badge-pill bg-light align-text-bottom">27</span>
          </a>
        <a class="nav-link" href="#">e-Voting</a>
        <a class="nav-link" href="#">Forum</a>
        <a class="nav-link" href="#">Blog</a>
        <!-- <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a> -->
    </nav>
</div>



@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @for ($i = 0; $i < 7; $i++)             
              <div class="card show" >
                <div class="toast-header">
                  <img src="https://" class="rounded mr-2" alt="">
                  <div class="mr-auto">Atanda A <div class="badge badge-primary"><i class="fas fa-check-circle"></i></div></div>
                </div>
                <div class="toast-body">
                    <div class="btn btn-sm btn-outline-success float-right m-1">Approve <i class="fas fa-check"></i></div>
                    <div class="btn btn-sm btn-warning float-right m-1">Disapprove <i class="fas fa-times"></i></div>
                </div>
              </div>
              <br>
            @endfor
            
        </div>
        <div class="col-md-4">
            <!-- Flexbox container for aligning the toasts -->
            @for ($i = 0; $i < 7; $i++)             
              <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <img src="..." class="rounded mr-2" alt="...">
                  <div class="mr-auto">Atanda A <div class="badge badge-primary">member</div></div>
                  <small class="text-muted">2 seconds ago</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  <b>New post:</b>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cupiditate quidem...</p>
                </div>
              </div>
            @endfor
        </div>
    </div>

</div>
@endsection