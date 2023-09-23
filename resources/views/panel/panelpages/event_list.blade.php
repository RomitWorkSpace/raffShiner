@extends('layout.admin')
@section('content')

<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                     <h1 class="text-dark">Event Page List</h1>
                </div>
                <div class="col-sm-6"></div>
           </div>
      </div>
   </div>

   <section class="content">
       <div class="card">
            <div class="card-header">
                 <h3 class="card-title">Event List</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                     <thead>
                         <tr>
                             <th>Sr. No.</th>
                             <th>Title</th>
                             <th>Image</th>
                             <th>Slug</th>
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
                            <td>{{$list->title}}</td>
                            <td><img src="{{asset('images/events/'.$list->image)}}" width="60"></td>
                            <td>{{$list->slug}}</td>
                            <td><a href="{{url('panel/event/edit/'.$list->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('panel/event/delete/'.$list->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                     </tbody>
                </table>
            </div>
       </div>
   </section>
</div>

@endsection