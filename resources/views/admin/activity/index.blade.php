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
         <div class="col-md-4">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">ADD Activities</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <div class="box-header with-border">
                        <!-- <h3 class="box-title">Horizontal Form</h3> -->
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::open(['method'=>'POST', 'action'=> 'AdminActivitysController@store','files'=>true,'class'=>'form-horizontal','name'=>'activityform']) !!}
                     @csrf
                     <div class="box-body">
                        <div class="form-group">
                           <label for="category" class="col-sm-2 control-label">Category</label>
                           <div class="col-sm-10">
                              <select name="category" id="category" class="custom-select" style="width:100%" required>
                                 <option value="">Select Category</option>
                                 <option value="celebration">Celebration</option>
                                 <option value="competition">Competition</option>
                                 <option value="club">Club</option>
                              </select>
                              @if($errors->has('category'))
                              <div class="error text-danger">{{ $errors->first('category') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="text" class="col-sm-2 control-label">Title</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control" name="text" id="text" placeholder="Enter title" required>
                              @if($errors->has('text'))
                              <div class="error text-danger">{{ $errors->first('text') }}</div>
                              @endif
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="file" class="col-sm-2 control-label">Image</label>
                           <div class="col-sm-10">
                              <input type="file" class="form-control" name="file" id="file" accept="image/*" required>
                              @if($errors->has('file'))
                              <div class="error text-danger">{{ $errors->first('file') }}</div>
                              @endif
                           </div>
                           <img id="blah_acti" src="#" alt="your image" style="display:none;max-height: 200px;width:250px" />
                        </div>

                        <div class="form-group">
                           <div class="col-md-6 col-sm-2 control-label">
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
               <!-- <div class="row">
                  <div class="col-md-9">
                     <button style="padding:10px 20px;margin-left:10px;" class="btn btn-danger text-white delete_all" data-url="{{ url('myactivitycategoryDeleteAll') }}">Delete</button>
                  </div>
               </div> -->
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead class="bg-primary">
                        <tr>
                           <!-- <th width="50px"><input type="checkbox" id="master"></th> -->
                           <th>Action</th>
                           <th>category</th>
                           <th>Title</th>
                           <th>Image</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($activitys as $gallery)
                        <tr id="tr_{{$gallery->id}}">
                           <!-- <td><input type="checkbox" class="sub_chk" data-id="{{$gallery->id}}"></td> -->
                           <td>
                               <a href="{{route('admin.activitycategory.edit', $gallery->id)}}"><i class="fa fa-edit" style="color:white;font-size:15px;background-color:#0275d8;padding:8px;border-radius:200px;"></i></a>
                              <a href="{{route('admin.activitycategory.destroy', $gallery->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>
                           {{$gallery->category}}
                           </td>
                           <td>
                           {{$gallery->text}}
                           </td>
                           <td>
                              <img height="50" src="{{$gallery->file ? $gallery->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="" >
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <div class="row mt-4">
                     <div class="col-sm-12" style="display:flex;justify-content:center;">
                        {{$activitys->links('pagination::bootstrap-4')}}
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

         $("form[name='activityform']").validate({
                rules: {
                  category:{
                     required: true,
                  },
                  text:{
                     required: true,
                  },
                  file: {
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
