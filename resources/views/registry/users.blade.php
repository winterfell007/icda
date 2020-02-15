@extends('layouts.general');
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
    @include('inc.messages')
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" id="bonafide-tab" data-toggle="tab" href="#bonafide" role="tab" aria-controls="bonafide" aria-selected="false">Bonafide Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" id="awaiting-tab" data-toggle="tab" href="#awaiting" role="tab" aria-controls="awaiting" aria-selected="false">Awaiting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" id="disapproved-tab" data-toggle="tab" href="#disapproved" role="tab" aria-controls="disapproved" aria-selected="false">Disapproved</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <br>
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
        @if(!count($users))
        <p>No users here</p>
      @endif
          @foreach ($users as $user) 
          <div class="card show">
            <div class="toast-header">
              <img src="https://" class="rounded mr-2" alt="">
              <div class="mr-auto">{{ $user->username }}
              <div class="badge badge-primary"><i class="fas {{ $user->approval_status ? 'fa-check-circle' : 'fa-times-circle'}}"></i> - #{{$user->propertyID}}</div>
              </div>
            </div>
            <div class="toast-body">
              <div class="text-muted approve-user-details ">
                <div class="text-secondary">{{$user->address}}<i class="far fa-dot-circle text-warning"></i> {{$user->title}} {{ $user->firstname }} {{$user->lastname}} <i class="far fa-dot-circle text-warning"></i> {{$user->email}} <i class="far fa-dot-circle text-warning"></i> {{$user->membership}} </div>
                {{-- <div></div>
                <div></div> --}}
              </div>
              @if(!$user->approval_status)
              <form class="d-inline" action="users/approve/{{$user->id}}" method="post">
              @csrf
              @method('PUT')
              <button class="btn btn-sm btn-outline-success float-right m-1">Approve <i class="fas fa-check"></i></button>
              </form>
              @endif
              @if($user->approval_status == NULL)
              <form class="d-inline" action="users/disapprove/{{$user->id}}" method="post">
              @csrf
              @method('PUT')
              <button class="btn btn-sm btn-warning float-right m-1">Disapprove <i class="fas fa-times"></i></button>
              </form>
              @endif
            </div>
        </div>
         
        <br> 
        @endforeach


      </div>
      <div class="tab-pane fade" id="bonafide" role="tabpanel" aria-labelledby="bonafide-tab">
      @if(!count($bonafide_users))
        <p>No users here</p>
      @endif
      @foreach ($bonafide_users as $user) 
          <div class="card show">
            <div class="toast-header">
              <img src="https://" class="rounded mr-2" alt="">
              <div class="mr-auto">{{ $user->username }}
              <div class="badge badge-primary"><i class="fas {{ $user->approval_status ? 'fa-check-circle' : 'fa-times-circle'}}"></i> - #{{$user->propertyID}}</div>
              </div>
            </div>
            <div class="toast-body">
              <div class="text-muted approve-user-details ">
                <div class="text-secondary">{{$user->address}}<i class="far fa-dot-circle text-warning"></i> {{$user->title}} {{ $user->firstname }} {{$user->lastname}} <i class="far fa-dot-circle text-warning"></i> {{$user->email}} <i class="far fa-dot-circle text-warning"></i> {{$user->membership}} </div>
                {{-- <div></div>
                <div></div> --}}
              </div>
              @if(!$user->approval_status)
              <form class="d-inline" action="users/approve/{{$user->id}}" method="post">
              @csrf
              @method('PUT')
              <button class="btn btn-sm btn-outline-success float-right m-1">Approve <i class="fas fa-check"></i></button>
              </form>
              @endif
              @if($user->approval_status == NULL)
              <form class="d-inline" action="users/disapprove/{{$user->id}}" method="post">
              @csrf
              @method('PUT')
              <button class="btn btn-sm btn-warning float-right m-1">Disapprove <i class="fas fa-times"></i></button>
              </form>
              @endif
            </div>
        </div>
        
        <br> 
        @endforeach
       
      </div>
      <div class="tab-pane fade" id="awaiting" role="tabpanel" aria-labelledby="awaiting-tab">
      @if(!count($awaiting_users))
        <p>No users here</p>
      @endif
      @foreach ($awaiting_users as $user) 
          <div class="card show">
            <div class="toast-header">
              <img src="https://" class="rounded mr-2" alt="">
              <div class="mr-auto">{{ $user->username }}
              <div class="badge badge-primary"><i class="fas {{ $user->approval_status ? 'fa-check-circle' : 'fa-times-circle'}}"></i> - #{{$user->propertyID}}</div>
              </div>
            </div>
            <div class="toast-body">
              <div class="text-muted approve-user-details ">
                <div class="text-secondary">{{$user->address}}<i class="far fa-dot-circle text-warning"></i> {{$user->title}} {{ $user->firstname }} {{$user->lastname}} <i class="far fa-dot-circle text-warning"></i> {{$user->email}} <i class="far fa-dot-circle text-warning"></i> {{$user->membership}} </div>
                {{-- <div></div>
                <div></div> --}}
              </div>
              @if(!$user->approval_status)
              <form class="d-inline" action="users/approve/{{$user->id}}" method="post">
              @csrf
              @method('PUT')
              <button class="btn btn-sm btn-outline-success float-right m-1">Approve <i class="fas fa-check"></i></button>
              </form>
              @endif
              @if($user->approval_status == NULL)
              <form class="d-inline" action="users/disapprove/{{$user->id}}" method="post">
              @csrf
              @method('PUT')
              <button class="btn btn-sm btn-warning float-right m-1">Disapprove <i class="fas fa-times"></i></button>
              </form>
              @endif
            </div>
        </div>
          
        <br> 
        @endforeach
      </div>
      <div class="tab-pane fade" id="disapproved" role="tabpanel" aria-labelledby="disapproved-tab">
      @if(!count($disapproved_users))
        <p>No users here</p>
      @else
          <form action="users/delete" method="post">
          @csrf
          @method('DELETE')
        <button class="btn btn-sm btn-outline-danger m-2">Clear all</button>
        </form>
      @endif
      @foreach ($disapproved_users as $user) 
          <div class="card show">
            <div class="toast-header">
              <img src="https://" class="rounded mr-2" alt="">
              <div class="mr-auto">{{ $user->username }}
              <div class="badge badge-primary"><i class="fas {{ $user->approval_status ? 'fa-check-circle' : 'fa-times-circle'}}"></i> - #{{$user->propertyID}}</div>
              </div>
            </div>
            <div class="toast-body">
              <div class="text-muted approve-user-details ">
                <div class="text-secondary">{{$user->address}}<i class="far fa-dot-circle text-warning"></i> {{$user->title}} {{ $user->firstname }} {{$user->lastname}} <i class="far fa-dot-circle text-warning"></i> {{$user->email}} <i class="far fa-dot-circle text-warning"></i> {{$user->membership}} </div>
                {{-- <div></div>
                <div></div> --}}
              </div>
              @if(!$user->approval_status)
              <form class="d-inline" action="users/approve/{{$user->id}}" method="post">
              @csrf
              @method('PUT')
              <button class="btn btn-sm btn-outline-success float-right m-1">Approve <i class="fas fa-check"></i></button>
              </form>
              @endif
              @if($user->approval_status == NULL)
              <form class="d-inline" action="users/disapprove/{{$user->id}}" method="post">
              @csrf
              @method('PUT')
              <button class="btn btn-sm btn-warning float-right m-1">Disapprove <i class="fas fa-times"></i></button>
              </form>
              @endif
            </div>
        </div>
        <br> 
        
        @endforeach
        
        </div>
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