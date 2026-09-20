@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      Videos
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Videos</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">Edit Videos</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <div class="box-header with-border">
                        <!-- <h3 class="box-title">Horizontal Form</h3> -->
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::model($gallery, ['method'=>'PATCH', 'action'=> ['AdminVideosController@update', $gallery->id],'files'=>true,'class'=>'form-horizontal','name'=>'editvideoform']) !!}
                     <div class="box-body">
                         <div class="form-group">
                           <label for="link" class="col-sm-2 control-label">Youtub Link</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="link" id="link" value="{{$gallery->link}}" placeholder="Enter Youtub link">
                              @if($errors->has('link'))
                              <div class="error text-danger">{{ $errors->first('link') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="file" class="col-sm-2 control-label">Video</label>
                           <div class="col-sm-10">
                              <input type="file" class="form-control" name="file" id="file">
                              @if($errors->has('file'))
                              <div class="error text-danger">{{ $errors->first('file') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-6 col-sm-6 control-label">
                              {!! Form::submit('Update', ['class'=>'btn btn-success text-white mt-1']) !!}
                           </div>
                        </div>
                     </div>
                     {!! Form::close() !!}
                  </div>
                  <!-- /.box -->
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
@endsection

@section('script')
<script>
        $(function() {

         $("form[name='editvideoform']").validate({
                rules: {
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
      });

</script>
@endsection
