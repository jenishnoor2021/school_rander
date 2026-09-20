@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 mt-4">
            <div class="card border border-primary">
                <div class="card-header bg-primary text-white"><h5 class="mt-2">ADD Videos</h5></div>

                <div class="card-body">
   
                {!! Form::open(['method'=>'POST', 'action'=> 'AdminVideosController@store','files'=>true]) !!}
        
                    <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                            {!! Form::label('file', 'Video:') !!}
                          <input type="file" name="file" id="file" class="form-control border border-dark mb-2">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="form-group col-md-6">
                        {!! Form::label('link', 'Link:') !!}
                        {!! Form::text('link', null, ['class'=>'form-control border border-dark mb-2'])!!}
                        </div>
                    </div>

                <div class="row justify-content-center">
                  <div class="form-group col-md-2">
                    {!! Form::submit('Add', ['class'=>'btn btn-success text-white mt-3']) !!}
                  </div>
                </div>

                {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



