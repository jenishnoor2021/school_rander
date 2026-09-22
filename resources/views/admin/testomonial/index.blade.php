@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Testomonial List
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Testomonial List</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <a href="{{route('admin.testomonial.create')}}" class="bg-primary text-white text-decoration-none" style="padding:12px 12px;margin-left:20px"><i class="fa fa-plus editable" style="font-size:15px;">&nbsp;ADD</i></a>
                     <button style="padding:10px 16px;margin-left:10px;" class="btn btn-danger text-white delete_all" data-url="{{ url('mytestomonialDeleteAll') }}"><i class="fa fa-trash"></i> Delete Selected</button>
                  </div>
                  <div class="col-md-3">
                     <!--{!! Form::open(['method'=>'GET', 'action'=> 'AdminTestominalController@searchTestomonial','files'=>true,'class'=>'form-horizontal']) !!}-->
                     <!--@csrf-->
                     <!--<input type="text" name="quer" class="border border-dark" placeholder="Search name">-->
                     <!--<button type="submit" class="fa fa-search bg-primary text-white"></button>-->
                     <!--{!! Form::close() !!}-->
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  @if(count($testomonial)>0)
                  <table id="testomonialtable" class="table table-bordered table-striped">
                     <thead class="bg-primary">
                        <tr>
                           <th width="50px"><input type="checkbox" id="master"></th>
                           <th>Action</th>
                           <th>Name</th>
                           <th>Image</th>
                           <th>Message</th>
                           <th>Approve / Un-Approved</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($testomonial as $emp)
                        <tr id="tr_{{$emp->id}}">
                           <td><input type="checkbox" class="sub_chk" data-id="{{$emp->id}}"></td>
                           <td>
                              <a href="{{route('admin.testomonial.edit', $emp->id)}}"><i class="fa fa-edit" style="color:white;font-size:15px;background-color:#0275d8;padding:8px;border-radius:200px;"></i></a>
                              <a href="{{route('admin.testomonial.destroy', $emp->id)}}" onclick="return confirm('Sure ! You want to delete this ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>
                              {{$emp->name}}
                           </td>
                           <td>
                              <img height="50" src="{{$emp->file ? $emp->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="" >
                           </td>
                           <td>
                              @if(strlen($emp->message) > 100)
                              {!!substr($emp->message,0,100)!!}
                              <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                              <span class="read-more-content"> {{substr($emp->message,100,strlen($emp->message))}}
                              <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                              @else
                              {{$emp->message}}
                              @endif
                           </td>
                           <td>
                              @if($emp->is_approved == 0)
                              <a href="{{route('admin.testomonial.status', $emp->id)}}" class="btn btn-danger">Not Approved</a>
                              @else
                              <a href="{{route('admin.testomonial.status', $emp->id)}}" class="btn btn-success">Approved</a>
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  @endif

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
