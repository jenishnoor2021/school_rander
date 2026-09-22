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
         <div class="col-md-4">
            <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">ADD Popup Image</h3>
               </div>
               <div class="box-body">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                     <div class="box-header with-border">
                        <!-- <h3 class="box-title">Horizontal Form</h3> -->
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     {!! Form::open(['method'=>'POST', 'action'=> 'AdminPopupsController@store','files'=>true,'class'=>'form-horizontal','name'=>'popupform']) !!}
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
                           <label for="file" class="col-sm-2 control-label">Image</label>
                           <div class="col-sm-10">
                              <input type="file" class="form-control" name="file" id="file" accept="image/*" required>
                              @if($errors->has('file'))
                              <div class="error text-danger">{{ $errors->first('file') }}</div>
                              @endif
                           </div>
                           <img id="blah_pop" src="#" alt="your image" style="display:none;max-height: 200px;width:250px" />
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

               </div>
               <div class="row">
                  <div class="col-md-9">
                     <button style="padding:8px 16px;margin-left:10px;" class="btn btn-danger text-white delete_all" data-url="{{ url('mypopupDeleteAll') }}"><i class="fa fa-trash"></i> Delete Selected</button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead class="bg-primary">
                        <tr>
                           <th width="50px"><input type="checkbox" id="master"></th>
                           <th>Action</th>
                           <th>popup Image</th>
                           <th>Show</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($popups as $popup)
                        <tr id="tr_{{$popup->id}}">
                           <td><input type="checkbox" class="sub_chk" data-id="{{$popup->id}}"></td>
                           <td>
                               <a href="{{route('admin.popup.edit', $popup->id)}}"><i class="fa fa-edit" style="color:white;font-size:15px;background-color:#0275d8;padding:8px;border-radius:200px;"></i></a>
                              <a href="{{route('admin.popup.destroy', $popup->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>
                              <img height="50" src="{{$popup->file ? $popup->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="" >
                           </td>
                           <td>
                              @if($popup->is_show == 1)
                              <a href="/admin/popup/active/{{$popup->id}}" class="btn btn-success">Active</a>
                              @else
                              <a href="/admin/popup/active/{{$popup->id}}" class="btn btn-danger">De-active</a>
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <div class="row mt-4">
                     <div class="col-sm-12" style="display:flex;justify-content:center;">
                        {{$popups->links('pagination::bootstrap-4')}}
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

         $("form[name='popupform']").validate({
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
