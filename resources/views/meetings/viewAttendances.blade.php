@extends('layouts.app') {{-- Sec Nav Start --}}
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

            <button class="btn btn-outline-success">New &nbsp;&nbsp;<i class="fas fa-marker"></i></button>
            <br><br>
            <div class="nav flex-column nav-pills attendance-date-navs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                    aria-selected="true">2020-15-10</a>
                <a class="nav-link " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false">2020-30-10</a>
                <a class="nav-link " id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">2010-20-10</a>
                <a class="nav-link " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">3019-20-09</a>
                <a class="nav-link " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">3019-20-09</a>
                <a class="nav-link " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">3019-20-09</a>
                <a class="nav-link " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">3019-20-09</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                                <li class="list-group-item">Cras justo odio  <div class="badge badge-light"> #{{rand(10000,99999)}} | Chairman</div>
                                    <div class="badge badge-light text-success float-right">present</div>
                                </li>
                                <li class="list-group-item">Dapibus ac facilisis in
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
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
        </div>
    </div>


</div>
@endsection