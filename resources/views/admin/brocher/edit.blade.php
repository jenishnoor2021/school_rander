@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Brocher
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Edit Brocher</li>
      </ol>
   </section>
   @if(session()->has('message'))
   <div class="alert text-white" style="background-color:#7EDD72">
      {{ session()->get('message') }}
   </div>
   @endif
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- right column -->
         <div class="col-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
               <div class="box-header with-border">
                  <!-- <h3 class="box-title">Horizontal Form</h3> -->
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               {!! Form::model($gallery, ['method'=>'PATCH', 'action'=> ['AdminBrocherController@update', $gallery->id],'files'=>true,'class'=>'form-horizontal']) !!}
               @csrf
               <div class="box-body">
                 
                  <div class="form-group">
                     <label for="file" class="col-sm-2 control-label">PDF</label>
                     <div class="col-sm-4">
                        <input type="file" class="form-control" name="file" id="file" accept="image/*">
                        @if($errors->has('file'))
                        <div class="error text-danger">{{ $errors->first('file') }}</div>
                        @endif
                        <img height="50" src="{{$gallery->file ? $gallery->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="" >
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-3 col-sm-2 control-label">
                        {!! Form::submit('Update', ['class'=>'btn btn-success text-white mt-1']) !!}
                     </div>
                  </div>
               </div>
               {!! Form::close() !!}
            </div>
            <!-- /.box -->
         </div>
         <!--/.col (right) -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
@endsection