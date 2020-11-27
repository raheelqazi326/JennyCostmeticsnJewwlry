@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <strong>Error!</strong> {!! session('error') !!}
    </div>
@elseif(session()->has('message'))
    <div class="alert alert-success alert-dismissible show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <strong>Success!</strong> {!! session('message') !!}
    </div>
@endif