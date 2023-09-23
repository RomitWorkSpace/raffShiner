@extends('layout.admin')
@section('content')

<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                     <h1 class="text-dark">Dashboard</h1>
                </div>
                <div class="col-sm-6"></div>
           </div>

           <div class="container pt-5">
               <div class="row">
                    
               @foreach($data as $service)
                    
                    <div class="col-md-3 mt-5">
                    <a href="{{asset('panel/service/add_service')}}">
                         {{$service->category}}
                    </a>
                    </div>
                    
               @endforeach

               </div>
           </div>
      </div>
   </div>
</div>

@endsection