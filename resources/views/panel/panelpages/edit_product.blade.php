@extends('layout.admin')
@section('content')

<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                     <h1 class="text-dark">Edit Product Pages</h1>
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

                     <form action ="{{url('panel/product/update/'.$data->id)}}" enctype="multipart/form-data" method="post">

                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="title">Product Title</label>
                                   <input type="text" name="title" id="title" value="{{$data->title}}" class="form-control" placeholder="Enter title">
                                   <span class="text text-danger">@error('title'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="name">Product Name</label>
                                   <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control" placeholder="Enter name">
                                   <span class="text text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="slug">Slug</label>
                                   <input type="text" name="slug" id="slug" value="{{$data->slug}}" class="form-control" placeholder="Enter slug">
                                   <span class="text text-danger">@error('slug'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                         <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="banner">Banner</label>
                                   <input type="file" name="banner" id="banner" class="form-control" placeholder="Enter slug">
                                   <span class="text text-danger">@error('banner'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="image">Image</label>
                                   <input type="file" name="image" id="image" class="form-control" placeholder="Enter slug">
                                   <span class="text text-danger">@error('image'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="description">Short Description</label>
                                   <textarea class="textarea" name="short_description" style="width:100%;height:200px;">{{$data->short_desc}}</textarea>
                                   <span class="text text-danger">@error('short_description'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-group">
                                   <label for="description">Description</label>
                                   <textarea class="textarea" name="description" style="width:100%;height:200px;">{{$data->description}}</textarea>
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