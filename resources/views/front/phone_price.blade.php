@extends('layout.front')
@section('content')
<style>
.user-info{
    font-size:16px;
    margin-top:10px;
}
</style>
<section class="detail-area">
    <div class="container">
        <p>Home / Sell Phone / <span style="color:#000;">Smart Phone</span></p>
    </div>
    <div class="container">
        <div class="row">
             <div class="col-md-7">
                 <h3>Additional Information</h3><hr>
                 <h5>Customer's Name</h5>
                 <p class="user-info">{{session('LoggedUser')}}</p><br>
                 <h5>Contact no</h5>
                 <p class="user-info">{{$detail->phone}}</p>
                 <div class="row cs-address mt-4">
                    <div class="col-7">
                       <h5>Pickup Address</h5>
                       <p class="user-info">{{$detail->address}}</p>
                    </div>
                    <div class="col-5">
                        <button class="btn btn-info">Change</button>
                    </div>
                 </div>
             </div>
        <div class="col-md-5">
            <div class="phone-detail">
                <div class="phone-image">
                    <img src="{{asset('img/raff_img/smart.png')}}" width="100%">
                </div>
                <div class="">
                    <h2 id="brand" class="text-center">{{$data->brand}}</h2>
                    
                    <h4 class="mt-4">Your Phone is {{$data->year}} old</h4>
                    @if($data->repaired == 'YES')
                    <h4 class="mt-3">Your Phone has been repaired before</h4>
                    @endif
                    @if($data->repaired == 'NO')
                    <h4 class="mt-3">Your Phone has not been repaired before</h4>
                    @endif
                    <h4 class="mt-3">Quantity of phone: {{$data->qty}}</h4>
                    <h5 class="mt-3">120 x {{$data->qty}} = {{120*$data->qty}}</h5>
                    <h2 class="mt-3" style="color:green;">Sub Total: ₹{{120*$data->qty}}</h2>
                </div>
            </div>
            <form action="" method="post">
                @csrf
                <input type="hidden" name="customer_id" value="{{$detail->id}}">
                <input type="hidden" name="brand" value="{{$data->brand}}">
                <input type="hidden" name="repaired" value="{{$data->repaired}}">
                <input type="hidden" name="year" value="{{$data->year}}">
                <button type="submit" class="price-btn" id="show-price">Book Now</button>
            </form>
         </div>
        </div>
    </div>
</section>
@endsection