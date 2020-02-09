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

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bonafide Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Awaiting Approval</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <br>
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          @for ($i = 0; $i < 7; $i++) 
          <div class="card show">
            <div class="toast-header">
              <img src="https://" class="rounded mr-2" alt="">
              <div class="mr-auto">Atanda A
              <div class="badge badge-primary"><i class="fas fa-check-circle"></i> - #{{rand(10000, 99999)}}</div>
              </div>
            </div>
            <div class="toast-body">
              <div class="text-muted approve-user-details ">
                <div class="text-secondary">72, Olatunji Street, Ojota <i class="far fa-dot-circle text-warning"></i> Alhaji AbdulAzeez Atanda <i class="far fa-dot-circle text-warning"></i> aatanda.dammy@gmail.com</div>
                {{-- <div></div>
                <div></div> --}}
              </div>
              <div class="btn btn-sm btn-outline-success float-right m-1">Approve <i class="fas fa-check"></i></div>
              <div class="btn btn-sm btn-warning float-right m-1">Disapprove <i class="fas fa-times"></i></div>
            </div>
        </div>
        <br> @endfor


      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>



  </div>
  <div class="col-md-4">
    <!-- Flexbox container for aligning the toasts -->
    @for ($i = 0; $i
    < 7; $i++) <div class="toast show bg-light" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <div class="mr-auto">Atanda A
          <div class="badge badge-light">member</div>
        </div>
        <small class="text-muted">2 seconds ago</small>
        
      </div>
      <div class="toast-body">
        <i>New post:</i>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cupiditate quidem...</p>
      </div>
  </div>
  @endfor
</div>
</div>

</div>
@endsection