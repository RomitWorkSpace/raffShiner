@extends('layout.admin')
@section('content')

<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                     <h1 class="text-dark">Add Upcoming Events</h1>
                </div>
                <div class="col-sm-6"></div>
           </div>
      </div>
   </div>

   <section class="content">
       <div class="row">
           <div class="col-md-12">
                <div class="card card-outline card-info">
                     @if(session('status'))
                         <h6 class="alert alert-success">{{session('status')}}</h6>
                     @endif

                     <form action ="{{url('panel/event_add')}}" enctype="multipart/form-data" method="post">

                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="name">Event Name</label>
                                   <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                                   <span class="text text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="slug">Slug</label>
                                   <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                                   <span class="text text-danger">@error('slug'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="date">Event Date</label>
                                   <input type="date" name="date" id="date" class="form-control" placeholder="Enter date">
                                   <span class="text text-danger">@error('date'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="description">Event Description</label>
                                   <textarea class="textarea" name="description" style="width:100%;height:200px;"></textarea>
                                   <span class="text text-danger">@error('description'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                             <input type="submit" value="submit" class="btn btn-success btn-block">
                        </div>

                     </form>
                </div>
           </div>
       </div>
   </section>
</div>

@endsection