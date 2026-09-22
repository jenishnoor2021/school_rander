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
         <div class="col-md-4">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">ADD Videos</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <div class="box-header with-border">
                        <!-- <h3 class="box-title">Horizontal Form</h3> -->
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::open(['method'=>'POST', 'action'=> 'AdminVideosController@store','files'=>true,'class'=>'form-horizontal','name'=>'videoform']) !!}
                     @csrf
                     <div class="box-body">
                         <div class="form-group">
                           <label for="link" class="col-sm-2 control-label">Youtub Link</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="link" id="link" placeholder="Enter Youtub link">
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
                              {!! Form::submit('Add', ['class'=>'btn btn-success text-white mt-1']) !!}
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
         <div class="col-md-8">
            <div class="box">
               <div class="box-header">
                  <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <!-- <a href="{{route('admin.galleryimage.create')}}" class="bg-primary text-white text-decoration-none" style="padding:12px 12px;margin-left:20px"><i class="fa fa-plus editable" style="font-size:15px;">&nbsp;ADD</i></a> -->
                     <button style="padding:8px 16px;margin-left:10px;" class="btn btn-danger text-white delete_all" data-url="{{ url('myvideosDeleteAll') }}"><i class="fa fa-trash"></i> Delete Selected</button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead class="bg-primary">
                        <tr>
                           <th width="50px"><input type="checkbox" id="master"></th>
                           <th>Youtube link</th>
                           <th>Action</th>
                           <th>video</th>
                           <th>Show</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($gallerys as $gallery)
                        <tr id="tr_{{$gallery->id}}">
                           <td><input type="checkbox" class="sub_chk" data-id="{{$gallery->id}}"></td>
                           <td>
                               <a href="{{route('admin.videos.edit', $gallery->id)}}"><i class="fa fa-edit" style="color:white;font-size:15px;background-color:#0275d8;padding:8px;border-radius:200px;"></i></a> 
                              <a href="{{route('admin.videos.destroy', $gallery->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td><a href="{{$gallery->link}}" target="_blank">{{$gallery->link}}</a></td>
                           <td>
                               @if($gallery->file != '/videoimg/')
                           <video width="150" height="150" controls>
                            <source src="{{$gallery->file ? $gallery->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" type="video/mp4">
                          </video>
                          @endif
                           </td>
                           <td>
                              @if($gallery->is_show == 1)
                              <a href="/admin/video/active/{{$gallery->id}}" class="btn btn-success">Active</a>
                              @else
                              <a href="/admin/video/active/{{$gallery->id}}" class="btn btn-danger">De-active</a>
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <div class="row mt-4">
                     <div class="col-sm-12" style="display:flex;justify-content:center;">
                        {{$gallerys->links('pagination::bootstrap-4')}}
                     </div>
                  </div>
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

         $("form[name='videoform']").validate({
                rules: {
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
      });

</script>
@endsection
