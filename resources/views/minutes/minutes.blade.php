@extends('layouts.app')

@section('content')
   



    <div class="container">
    
     <br>
    <button class="btn btn-success float-right" type="button" data-toggle="collapse" data-target="#upload-collapse" aria-expanded="false" aria-controls="collapseExample">
    Upload Minutes
  </button>
  <br><br>
    <div class="collapse" id="upload-collapse">
  <div class="card card-body bg-secondary">
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">When was this meeting held?</span>
  </div>
  <input type="date" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
</div>
  <div class="input-group">
  <div class="custom-file">
    <input type="file" accept=".pdf" class="custom-file-input bg-secondary" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
    <label class="custom-file-label bg-light" for="inputGroupFile04">Upload minutes here - Minutes must be in PDF format</label>
  </div>
  <div class="input-group-append">
    <button class="btn btn-success" type="button" id="inputGroupFileAddon04"><i class="fas fa-arrow-up"></i></button>
  </div>
</div>
   </div>
   <br>
</div>
 
    <hr>
    <h2>Minutes</h2>
    
    @if(count($minutes)>0)
        @foreach($minutes as $minute)
  <div class="well">
  <p>        
    <button style="border: 1px solid lightgrey" class="btn bg-light active disabled">
      Minutes
    </button>
    <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="{{'#id'.$minute->id}}" aria-expanded="false" aria-controls="collapseExample">
      Agenda
    </button>
  </p>
  <div>
    <div class="card card-body bg-light">
      <span><h6>Minutes for {{$minute->meeting_date}} meeting <span><button class="btn btn-primary float-right">Download <i class="fas fa-download"></i></button> <button class="btn btn-sm btn-outline-danger float-right m-1" data-toggle="tooltip" title="Delete this minute"><i class=" fas fa-trash-alt"></i></button><button class="btn btn-sm btn-outline-primary float-right m-1" data-toggle="tooltip" title="Edit this minute"><i class="fas fa-pencil-alt"></i></button></span></h6></span>
    
    </div>
    <span class="float-right span-date" data-toggle="tooltip" title="date uploaded">{{$minute->created_at}}</span>

  </div>
  <br><br>
  <div class="collapse" id="{{'id'.$minute->id}}">
  <div class="card card-body">
  

   <div class="row">
  <div class="col-12 col-lg-4 "> 
  <h6 class="text-center">Agenda <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#add-agenda" aria-expanded="false" aria-controls="add-agenda"> <i class="fas fa-plus"></i></button></h6>
  
  <div class="card card-body"> <span style="font-size: 10px;"><span style="color: transparent" class="badge badge-success badge-pill">o</span> <span class="text-success">discussed</span> <span style="color: transparent" class="badge badge-info badge-pill">o</span> <span class="text-info">discussion not concluded</span> <span style="color: transparent" class="badge badge-warning badge-pill">o</span> <span class="text-warning">not discussed</span> <i style="font-size: 14px; " class="fas fa-ban float-right"></i> </span></div>
  <hr> 
    <div class="list-group" id="list-tab" role="tablist">
   


      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home <span style="color: transparent" class="badge badge-success badge-pill float-right">o</span></a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile <span class="badge badge-danger badge-pill float-right">o</span></a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages <span class="badge badge-info badge-pill float-right">o</span></a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings <span class="badge badge-success badge-pill float-right">o</span></a>
      <br>
      
    </div>
  </div>
  <div class="col-12 col-lg-8">

 <div class="card card-body collapse" id="add-agenda">

<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">Notes</span>
</div>
<textarea class="form-control" aria-label="Notes" placeholder="Short notes on this agenda item..."></textarea>
</div>
<br>
<div class="input-group">
<input type="text" class="form-control" aria-label="Agenda Item Title" placeholder="Agenda Item Title">
<div class="input-group-append">
<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-arrow-right"></i></button>
<div class="dropdown-menu">
<a class="dropdown-item text-success" href="#">Discussed</a>
<a class="dropdown-item text-info" href="#">Still Discussing </a>
<a class="dropdown-item text-warning" href="#">Not Dicsussed</a>
</div>
</div>
</div>


</div>
<br>









  <br>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div><button class="btn btn-sm btn-outline-primary m-1" data-toggle="tooltip" title="Edit this agenda item"><i class="fas fa-pencil-alt"></i></button><button class="btn btn-sm btn-outline-danger m-1" data-toggle="tooltip" title="Delete this agenda item"><i class=" fas fa-trash-alt"></i></button></div>
        <p>
        Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.
        </p>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <div><button class="btn btn-sm btn-outline-primary m-1" data-toggle="tooltip" title="Edit this agenda item"><i class="fas fa-pencil-alt"></i></button><button class="btn btn-sm btn-outline-danger m-1" data-toggle="tooltip" title="Delete this agenda item"><i class=" fas fa-trash-alt"></i></button></div>
        <p>
        Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do aliquip veniam minim.
        </p></div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <div><button class="btn btn-sm btn-outline-primary m-1" data-toggle="tooltip" title="Edit this agenda item"><i class="fas fa-pencil-alt"></i></button><button class="btn btn-sm btn-outline-danger m-1" data-toggle="tooltip" title="Delete this agenda item"><i class=" fas fa-trash-alt"></i></button></div>
        <p>
        Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.
        </p>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <div><button class="btn btn-sm btn-outline-primary m-1" data-toggle="tooltip" title="Edit this agenda item"><i class="fas fa-pencil-alt"></i></button><button class="btn btn-sm btn-outline-danger m-1" data-toggle="tooltip" title="Delete this agenda item"><i class=" fas fa-trash-alt"></i></button></div>
        <p>
        Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.
        </p>
      </div>
    </div>



  </div>
</div>
   </div>
   <br>
</div>
                
                
            </div>

          
        @endforeach
    @else
        <h4>No posts found</h4>
    @endif
    
    </div>
@endsection

