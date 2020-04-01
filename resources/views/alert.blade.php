@if($errors->any())
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <b><h4>Aduh Ada Kesalahan Nich</h4></b>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session('msgSuccess'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <b><h4>Siksis!</h4></b>
        <br>
        {!! session('msgSuccess') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session('msgWarning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <b><h4>Terjadi Kelashan!</h4></b>
        <br>
        {!! session('msgWarning') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session('msgDanger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <b><h4>error !</h4></b>
        <br>
        {!! session('msgDanger') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
