@extends('layout.admin')
@section('content')

<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                     <h1 class="text-dark">Contact List</h1>
                </div>
                <div class="col-sm-6"></div>
           </div>
      </div>
   </div>

   <section class="content">
       <div class="card">
            <div class="card-header">
                 <h3 class="card-title">Contact List</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                     <thead>
                         <tr>
                             <th>Sr. No.</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Nobile</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @php
                           $sr = 1;
                        @endphp

                        @foreach($data as $list)
                        <tr>
                            <td>{{$sr++}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->email}}</td>
                            <td>{{$list->mobile}}</td>
                            <td><a href="{{url('panel/contact/view/'.$list->id)}}" class="btn btn-success">View</a>
                                <a href="{{url('panel/contact/delete/'.$list->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                </table>
            </div>
       </div>
   </section>
</div>

@endsection