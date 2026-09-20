@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Activities
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Activities</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">Edit Activities</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <div class="box-header with-border">
                        <!-- <h3 class="box-title">Horizontal Form</h3> -->
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::model($activity, ['method'=>'PATCH', 'action'=> ['AdminActivitysController@update', $activity->id],'files'=>true,'class'=>'form-horizontal','name'=>'editactivityform']) !!}
                     @csrf
                     <div class="box-body">
                        <div class="form-group">
                           <label for="category" class="col-sm-2 control-label">Category</label>
                           <div class="col-sm-10">
                              <select name="category" id="category" class="custom-select" style="width:100%" required>
                                 <option value="">Select Category</option>
                                 <option value="celebration" {{ $activity->category == 'celebration' ? 'selected' : '' }}>Celebration</option>
                                 <option value="competition" {{ $activity->category == 'competition' ? 'selected' : '' }}>Competition</option>
                                 <option value="club" {{ $activity->category == 'club' ? 'selected' : '' }}>Club</option>
                              </select>
                              @if($errors->has('category'))
                              <div class="error text-danger">{{ $errors->first('category') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="text" class="col-sm-2 control-label">Title</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="text" id="text" placeholder="Enter title" value="{{$activity->text}}" required>
                              @if($errors->has('text'))
                              <div class="error text-danger">{{ $errors->first('text') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label"></label>
                        <img height="100px" src="{{$activity->file ? $activity->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="" >
                        </div>
                        <div class="form-group">
                           <label for="file" class="col-sm-2 control-label">Image</label>
                           <div class="col-sm-10">
                              <input type="file" class="form-control" name="file" id="file" accept="image/*">
                              @if($errors->has('file'))
                              <div class="error text-danger">{{ $errors->first('file') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label"></label>
                        <img id="blah_acti" src="#" alt="your image" style="display:none;max-height: 200px;width:250px" />
                        </div>

                        <div class="form-group">
                           <div class="col-md-6 col-sm-2 control-label">
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

         $("form[name='editactivityform']").validate({
                rules: {
                  category:{
                     required: true,
                  },
                  text:{
                     required: true,
                  },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
      });

      $("#file").change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $("#blah_acti").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
        $("#blah_acti").css("display", "block");
    });

</script>
@endsection
