@extends('layouts.general') {{-- Sec Nav Start --}}
<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline">
        <a class="nav-link" href="minutes">Minutes</a>
        <a class="nav-link active" href="#">
        Attendances
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
<div class="container">
    <br>
    
    <div class="row">
        
        <div class="col-2">

            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">New &nbsp;&nbsp;<i class="fas fa-marker"></i></button>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="/meetings/attendances" method="post">
                            @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mark a New Attendance</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">When was this meeting held?</span>
                                </div>
                                <input type="date" name="meeting-date" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                              </div>
                                <ul class="list-group">
                                    <?php $i = 1  ?>
                                @foreach ($users as $user)

                                <li class="list-group-item"> {{$user->firstname}} {{$user->lastname}} <div class="badge badge-light">{{$user->propertyID}}</div>
                                        <div class="btn-group-toggle d-inline float-right" data-toggle="buttons">
                                       
                                            <label class="btn btn-outline-light active" style="border: 1px solid lightgrey">
                                            <input name="presence-{{$i}}" value="{{$user->id}}" type="checkbox"> <i class="far fa-dot-circle"></i>
                                            </label>
                                          </div>
                                    </li>
                                    <?php $i++ ?>
                                @endforeach

                                <input type="hidden" name="count" value={{$i}}>
                                </ul>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Discard</button>
                            <button type="submit" class="btn btn-success">Submit Attendance</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            {{-- Modal End --}}



            <br><br> 
            
            <div class="nav flex-column nav-pills attendance-date-navs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach ($dates as $date)
            <a class="nav-link" id="v-pills-{{$date->meeting_date}}-tab" data-toggle="pill" href="#v-pills-{{$date->meeting_date}}" role="tab" aria-controls="v-pills-{{$date->meeting_date}}"
            aria-selected="true">{{ $date -> meeting_date }}</a>           
                @endforeach
                
            </div>
        </div>
        <div class="col-8">
            @include('inc.messages')
            <div class="tab-content" id="v-pills-tabContent">
                @foreach ($dates as $date)
                <div class="tab-pane fade" id="v-pills-{{$date->meeting_date}}" role="tabpanel" aria-labelledby="v-pills-{{$date->meeting_date}}-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                                aria-selected="true">All</a>
                            <a class="nav-item nav-link text-success" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Attendees</a>
                            <a class="nav-item nav-link text-danger" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Absentees</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <br>
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio
                                    <div class="badge badge-light"> #{{rand(10000,99999)}} | Chairman</div>
                                    <div class="badge badge-light text-success float-right">present</div>
                                </li>
                                <li class="list-group-item">{{$date->meeting_date}}
                                    <div class="badge badge-light text-success float-right">present</div>
                                </li>
                                <li class="list-group-item">Vestibulum at eros
                                    <div class="badge badge-light text-danger float-right">absent</div>
                                </li>
                                <li class="list-group-item">Morbi leo risus
                                    <div class="badge badge-light text-danger float-right">absent</div>
                                </li>
                                <li class="list-group-item">Porta ac consectetur ac
                                    <div class="badge badge-light text-success float-right">present</div>
                                </li>
                                <li class="list-group-item">Porta ac consectetur ac
                                    <div class="badge badge-light text-success float-right">present</div>
                                </li>
                                <li class="list-group-item">Vestibulum at eros
                                    <div class="badge badge-light text-danger float-right">absent</div>
                                </li>
                                <li class="list-group-item">Porta ac consectetur ac
                                    <div class="badge badge-light text-success float-right">present</div>
                                </li>
                                <li class="list-group-item">Vestibulum at eros
                                    <div class="badge badge-light text-danger float-right">absent</div>
                                </li>
                            </ul>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                    </div>


                </div>
               
                  
                @endforeach
         </div> 
            
        </div>
    </div>


</div>
@endsection