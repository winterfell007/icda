@extends('layouts.app') {{-- Sec Nav Start --}}
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#">Minutes</a>
    <a class="nav-link" href="#">
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
  @include('inc.messages') {{-- Upload minutes --}}
  <br>
  <button class="btn btn-success float-right" type="button" data-toggle="collapse" data-target="#upload-collapse" aria-expanded="false"
    aria-controls="collapseExample">
    Upload Minutes
  </button>
  <br><br>
  <form action="upload-minutes" method="post" enctype="multipart/form-data">
    @csrf
    <div class="collapse" id="upload-collapse">
      <div class="card card-body bg-secondary">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">When was this meeting held?</span>
          </div>
          <input type="date" name="meeting-date" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
        </div>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="upload-file" accept=".pdf" class="custom-file-input bg-secondary" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
            <label class="custom-file-label bg-light" for="inputGroupFile04">Upload minutes here - Minutes must be in PDF format</label>
          </div>
          <div class="input-group-append">
            <button class="btn btn-success" type="submit" id="inputGroupFileAddon04"><i class="fas fa-arrow-up"></i></button>
          </div>
        </div>
      </div>
      <br>
    </div>
  </form>
  <hr>
  <h2>Minutes</h2>

  @if(count($minutes)>0) @foreach($minutes as $minute) {{-- Minutes and Agenda buttons in loop --}}
  <div class="well">
    <p>
      <button style="border: 1px solid lightgrey" class="btn bg-light active disabled">
      Minutes
    </button>
      <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="{{'#id'.$minute->id}}" aria-expanded="false"
        aria-controls="collapseExample">
      Agenda <span class="badge badge-success badge-pill">{{call_user_func($countAgenda, $minute->id)}}</span>
    </button>
    </p>
    <div>
   
      <div class="card card-body bg-light">
        <span> 
        
        <h6><a class="text-secondary" target="_blank" href="storage/uploaded_minutes/{{$minute->minute_dir}}">Minutes for {{$minute->meeting_date}} meeting </a> <span>  <a href="storage/uploaded_minutes/{{$minute->minute_dir}}" download><button class="btn btn-primary float-right">Download <i class="fas fa-download"></i></button></a> <form style="display:inline;" action="delete-minutes/{{$minute->id}}" method="post">@csrf @method('DELETE')<button type="submit" class="btn btn-sm btn-outline-danger float-right m-1" data-toggle="tooltip" title="Delete this minute"><i class=" fas fa-trash-alt"></i></button></form></span></h6>
        
      </span>
      </div>
    
      <span class="float-right span-date" data-toggle="tooltip" title="date uploaded">{{$minute->created_at}}</span>

    </div>
    <br><br>
    <div class="collapse" id="{{'id'.$minute->id}}">
      <div class="card card-body">


        <div class="row">
          <div class="col-12 col-lg-4 ">
            <h6 class="text-center">Agenda <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target="{{'#add-agenda'.$minute->id}}" aria-expanded="false"
                aria-controls="{{'add-agenda'.$minute->id}}"> <i class="fas fa-plus"></i></button></h6>

            <div class="card card-body"> <span style="font-size: 10px;"><span class="badge badge-success badge-pill"> </span> <span class="text-success">agreed</span>  <span class="badge badge-warning badge-pill"> </span> <span class="text-warning">pending</span> <span class="badge badge-danger badge-pill"> </span> <span class="text-danger">not agreed</span> <i style="font-size: 14px; " class="fas fa-ban float-right"></i> </span>
            </div>
            <hr>
            <div class="list-group" id="list-tab" role="tablist">
              @if(count($agendas)>0) @foreach ($agendas as $agenda) @if($agenda->minutes_id == $minute->id)
              <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="{{'#list-home'.$agenda->id}}"
                role="tab" aria-controls="home">{{$agenda->agenda_item}} <span 
          class=
          @if($agenda->status=='agreed')
           "badge badge-success badge-pill float-right"            
          @elseif($agenda->status=='pending')
            "badge badge-warning badge-pill float-right"
          @else
            "badge badge-danger badge-pill float-right"
          @endif
          > </span></a> @endif @endforeach @endif
              <br>

            </div>
          </div>
          <div class="col-12 col-lg-8">

            <div class="card card-body collapse" id="{{'add-agenda'.$minute->id}}">
              <form action="add-agenda" method="post">
                @csrf
                <span id="{{'method'.$minute->id}}"></span>
                <input type="text" name="current_minute" value="{{$minute->id}}" hidden>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Notes</span>
                  </div>
                  <textarea name="notes" class="form-control" aria-label="Notes" placeholder="Short notes on this agenda item..."></textarea>
                </div>
                <br>

                <div class="input-group">

                  <input name="title" type="text" class="form-control" aria-label="Agenda Item Title" placeholder="Agenda Item Title">
                  <div class="input-group-append">
                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-arrow-right"></i></button>
                    <div class="dropdown-menu">
                      <input type="submit" name="sub-btn" value="agreed" class="dropdown-item text-success" href="#">
                      <input type="submit" name="sub-btn" value="pending" class="dropdown-item text-warning" href="#">
                      <input type="submit" name="sub-btn" value="not agreed" class="dropdown-item text-danger" href="#">
                    </div>
                  </div>

                </div>
              </form>

            </div>
            <br>

            <br>
            <div class="tab-content" id="nav-tabContent">
              @foreach ($agendas as $agenda) @if($agenda->minutes_id == $minute->id)
              <div class="tab-pane fade show" id="{{'list-home'.$agenda->id}}" role="tabpanel" aria-labelledby="list-home-list">
              <div><button class="btn btn-sm btn-outline-primary m-1" data-toggle="tooltip" title="Edit this agenda item" id="{{'edit'.$agenda->id}}" onclick="editAgenda('{{$minute->id}}', '{{$agenda->id}}', '{{$agenda->notes}}', '{{$agenda->agenda_item}}')"><i class="fas fa-pencil-alt"></i></button>
              <form style="display:inline;" method="POST" action="delete-agenda/{{$agenda->id}}"> @csrf @method('DELETE') <button class="btn btn-sm btn-outline-danger m-1" data-toggle="tooltip" title="Delete this agenda item"><i class=" fas fa-trash-alt"></i></button></form>
                </div>
                <p>
                  {{$agenda->notes}}
                </p>
              </div>
              @endif @endforeach


            </div>



          </div>
        </div>
      </div>
      <br>
    </div>


  </div>


  @endforeach @else
  <h4>No posts found</h4>
  @endif {{$minutes->links()}}


</div>
<script>
  let edit_mode = true;
function editAgenda(minuteID, agendaID, currentNotes, currentTitle){
  const formCard = document.querySelector('#add-agenda'+minuteID);
  const notes = document.querySelector('#add-agenda'+minuteID+' form textarea[name=notes]');
  const title = document.querySelector('#add-agenda'+minuteID+' form input[name=title]');
  const form = document.querySelector('#add-agenda'+minuteID+' form');
  const editBtn = document.querySelector('#edit'+agendaID);
  const methodSpan = document.querySelector('#method'+minuteID);

  if(edit_mode){
    formCard.classList.add('show');
    notes.value = currentNotes;
    title.value = currentTitle;
    form.action = 'edit-agenda/'+agendaID;
    editBtn.innerText = 'Stop editing';
    methodSpan.innerHTML = '@method("PUT")';
    edit_mode = false;
    return;
  }
    notes.value = '';
    title.value = '';
    form.action = 'add-agenda';
    editBtn.innerHTML = '<i class="fas fa-pencil-alt"></i>';
    methodSpan.innerHTML = "";
    edit_mode = true;
}
</script>
@endsection
