{!! Form::open(['method'=>'GET','url'=>$url,'class'=>'navbar-form navbar-left','role'=>'search'])  !!}

<div class="input-group custom-search-form col-sm-3">
    <input type="text" class="form-control" name="search" placeholder="Search name...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            Go
        </button>
    </span>
</div>
{!! Form::close() !!}