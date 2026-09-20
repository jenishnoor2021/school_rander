@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Brocher
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Brocher</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         @if(count($gallerys) == 0)
         <div class="col-md-6">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">ADD Brocher</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <div class="box-header with-border">
                        <!-- <h3 class="box-title">Horizontal Form</h3> -->
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::open(['method'=>'POST', 'action'=> 'AdminBrocherController@store','files'=>true,'class'=>'form-horizontal','name'=>'borcherform']) !!}
                     @csrf
                     <div class="box-body">

                        <div class="form-group">
                           <label for="file" class="col-sm-2 control-label">PDF</label>
                           <div class="col-sm-10">
                              <input type="file" class="form-control" name="file" id="file" accept="application/pdf" required>
                              @if($errors->has('file'))
                              <div class="error text-danger">{{ $errors->first('file') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-3 col-sm-2 control-label">
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
         @endif
         <div class="col-md-6">
            <div class="box box-primary">
               <div class="box-header">
                  <!-- <h3 class="box-title">List</h3> -->
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <!-- <a href="{{route('admin.galleryimage.create')}}" class="bg-primary text-white text-decoration-none" style="padding:12px 12px;margin-left:20px"><i class="fa fa-plus editable" style="font-size:15px;">&nbsp;ADD</i></a> -->
                     <!-- <button style="padding:10px 20px;margin-left:10px;" class="btn btn-danger text-white delete_all" data-url="{{ url('mygalleryimageDeleteAll') }}">Delete</button> -->
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead class="bg-primary">
                        <tr>

                           <th>Action</th>
                           <th>Brocher</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($gallerys as $gallery)
                        <tr id="tr_{{$gallery->id}}">

                           <td>
                              <!-- <a href="{{route('admin.brocher.edit', $gallery->id)}}"><i class="fa fa-edit" style="color:white;font-size:15px;background-color:#0275d8;padding:8px;border-radius:200px;"></i></a> -->
                              <a href="{{route('admin.brocher.destroy', $gallery->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>
                              <a href="{{$gallery->file}}" target="_blank"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i></a>
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

         $("form[name='borcherform']").validate({
                rules: {
                  file: {
                     required: true,
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
      });

</script>
@endsection
