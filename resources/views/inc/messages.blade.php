@if(count($errors)>0) @foreach ($errors->all() as $error)
<div class="alert alert-danger">
    {{$error}}
</div>
@endforeach @endif 

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>

@endif


@if (session('secondary'))
<div class="alert alert-secondary">
    {{session('secondary')}}
</div>

@endif


@if (session('warning'))
<div class="alert alert-warning">
    {{session('warning')}}
</div>

@endif

@if (session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>

@endif