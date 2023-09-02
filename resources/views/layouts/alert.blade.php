@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="succ-alert">
        <span> {{ session('success') }} </span>
        <button type="button" class="close" data-dismiss="succ-alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="err-alert">
    <span> {{ session('success') }} </span>
    <button type="button" class="close" data-dismiss="err-alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif



