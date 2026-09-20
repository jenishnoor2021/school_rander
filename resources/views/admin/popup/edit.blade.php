@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Popup Image
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Popup Image</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">Edit Popup Image</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <div class="box-header with-border">
                        <!-- <h3 class="box-title">Horizontal Form</h3> -->
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::model($popup, ['method'=>'PATCH', 'action'=> ['AdminPopupsController@update', $popup->id],'files'=>true,'class'=>'form-horizontal','name'=>'editpopupform']) !!}
                     @csrf
                     <div class="box-body">
                        <!-- <div class="form-group">
                           <label for="text" class="col-sm-2 control-label">Image Text</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="text" id="text" placeholder="Enter name">
                              @if($errors->has('text'))
                              <div class="error text-danger">{{ $errors->first('text') }}</div>
                              @endif
                           </div>
                        </div> -->
                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label"></label>
                        <img height="200px" src="{{$popup->file ? $popup->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="" >
                        </div>
                        <div class="form-group">
                           <label for="file" class="col-sm-2 control-label">Image</label>
                           <div class="col-sm-10">
                              <input type="file" class="form-control" name="file" id="file" accept="image/*" >
                              @if($errors->has('file'))
                              <div class="error text-danger">{{ $errors->first('file') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label"></label>
                        <img id="blah_pop" src="#" alt="your image" style="display:none;max-height: 200px;width:250px" />
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

         $("form[name='editpopupform']").validate({
                rules: {
                  
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
      });

      $("#file").change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $("#blah_pop").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
        $("#blah_pop").css("display", "block");
    });

</script>
@endsection
