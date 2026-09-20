@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Career
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Career</li>
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
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  <table id="careertable" class="table table-bordered table-striped">
                     <thead class="bg-primary">
                        <tr>
                           <th>Action</th>
                           <th>Full Name</th>
                           <th>Email</th>
                           <th>Phone No</th>
                           <th>Position</th>
                           <th>Resume / File</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($careers as $enquirey)
                        <tr id="tr_{{$enquirey->id}}">
                           <!-- <td><input type="checkbox" class="sub_chk" data-id="{{$enquirey->id}}"></td> -->
                           <td>
                              <a href="{{route('admin.career.destroy', $enquirey->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>{{$enquirey->fname}}</td>
                           <td>{{$enquirey->email}}</td>
                           <td>{{$enquirey->phone}}</td>
                           <td>{{$enquirey->subject ?? '-'}}</td>
                           <td>
                              @if($enquirey->file && $enquirey->file != '/careerimg/')
                              <a href="{{$enquirey->file}}" target="_blank" class="btn btn-xs btn-info">View File</a>
                              @else
                              -
                              @endif
                           </td>
                           <td>{{$enquirey->created_at}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>

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
