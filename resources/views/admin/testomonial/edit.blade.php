@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Testomonial
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Edit Testomonial</li>
      </ol>
   </section>
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
               {!! Form::model($body['testomonial'], ['method'=>'PATCH', 'action'=> ['AdminTestominalController@update', $body['testomonial']['id']],'files'=>true,'class'=>'form-horizontal','name'=>'edittestomonial']) !!}
               @csrf
               <div class="box-body">
                  <div class="form-group">
                     <label for="testomonial" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" value="{{$body['testomonial']['name']}}" required>
                        @if($errors->has('testomonial'))
                        <div class="error text-danger">{{ $errors->first('testomonial') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="name" class="col-sm-2 control-label">Profile image</label>
                     <div class="col-sm-3">
                        <input type="file" name="file" id="file" class="form-control border border-dark mb-2" accept="image/*">
                        @if($errors->has('file'))
                        <div class="error text-danger">{{ $errors->first('file') }}</div>
                        @endif
                     </div>
                     <div class="col-sm-1">
                        <img height="50" src="{{$body['testomonial']['file'] ? $body['testomonial']['file'] : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="" >
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label"></label>
                     <div class="col-sm-4">
                        <img id="blah_test_edit" src="#" alt="your image" style="display:none;max-height: 200px;width:250px" />
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="message" class="col-sm-2 control-label">Message</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="message" id="message" value="{{$body['testomonial']['message']}}" required>
                        @if($errors->has('message'))
                        <div class="error text-danger">{{ $errors->first('message') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-3 col-sm-2 control-label">
                        {!! Form::submit('update', ['class'=>'btn btn-success text-white mt-1']) !!}
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

@section('script')
<script>
        $(function() {

         $("form[name='edittestomonial']").validate({
                rules: {
                  name: {
                     required: true,
                    },
                  message: {
                     required: true,
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
      });

$("#file").change(function() {
      let reader = new FileReader();
      reader.onload = (e) => {
         $("#blah_test_edit").attr("src", e.target.result);
      };
      reader.readAsDataURL(this.files[0]);
      $("#blah_test_edit").css("display", "block");
   });
</script>
@endsection
