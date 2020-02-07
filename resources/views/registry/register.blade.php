@extends('layouts.app');
<div class="nav-scroller bg-white shadow-sm">
        <nav class="nav nav-underline">
          <a class="nav-link active" href="#">Register New User</a>
          <a class="nav-link" href="users">
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

<div class="container">
  <div class="w-75 reg-card p-4">
      <h2>Register New Member</h2>
    <hr>
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Property ID</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Title</label>
            <input type="text" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Firstname</label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Lastname</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Mobile Number</label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Profession</label>
              <input type="text" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Zone Code</label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Email</label>
              <input type="email" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputState">Gender</label>
                <select id="inputState" class="form-control">
                    <option>Female</option>
                    <option>Male</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                  <label for="inputState">Marital Status</label>
                  <select id="inputState" class="form-control">
                      <option>Single</option>
                      <option>Married</option>
                      <option>Divorced</option>
                  </select>
              </div>
            <div class="form-group col-md-6">
                <label for="inputState">Membership</label>
                <select id="inputState" class="form-control">
                    <option>Member</option>
                    <option>Chairman</option>
                    <option>Vice Chairman</option>
                    <option>Secretary</option>
                    <option>Fin-Secretary</option>
                    <option>Treasurer</option>
                    <option>Provost</option>
                </select>
              </div>
              
        </div>
  
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <hr>
        <div class="form-row">
          
            <div class="form-group col-md-6">
              <label for="inputEmail4">Username</label>
              <input type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="email" class="form-control" id="inputPassword4">
            </div>
        </div>
        
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Alert this user by mail
            </label>
          </div>
        </div>
        
          <button type="submit" class="btn btn-lg btn-success float-right">Send for Approval</button>
        <br><br>     
</form>

  </div>
</div>
@endsection