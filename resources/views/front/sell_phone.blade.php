@extends('layout.front')

@section('content')
<style>
   .custom-banner{
	background-color:#cfd6d9;
   }
</style>
<section class="banner-area1">
	<div class="container">
        <p>Home / <span style="color:#000;">Sell Phone</span></p>
    </div>
				<div class="container custom-banner">
					<div class="row align-items-center">
						<div class="col-lg-1"></div>
						<div class="col-lg-6 col-md-8">
                           <h1 style="color:#000;">Sell your Mobile Phone for Instant Cash</h1>
						   <div class="row mt-4">
						   <div class="col-md-4">
                               <p class="bnr-txt">Maximum Value</p>
                           </div>
						   <div class="col-md-4">
                               <p class="bnr-txt">Safe & Hassle free</p>
                           </div>
						   <div class="col-md-4">
                               <p class="bnr-txt">Free Doorstep Pickup</p>
                           </div>
                          </div>
						  <div class="search-box row">
                                    <input type="search" placeholder="Search type of mobile phone..." style="height:50px;">
									<button type="submit" class="search-btn" style="background:#fff;height:50px;"><i class="fa-solid fa-magnifying-glass" style="color:#939495";></i></button>
						  </div>
						</div>
						<div class="col-lg-4 col-md-4">
                           <img src="img/raff_img/mobile1.png" width="100%">
						</div>
						<div class="col-lg-1"></div>
					</div>
				</div>
			</section>

	<section class="mobile-segment mt-5">
        <div class="container">
            <h3>Select Your Mobile Phone</h3>
			<div class="row mt-5">
                <div class="col-lg-2 col-sm-2 col-6">
                    <div class="product-bg text-center mb-4">
                        <img src="img/raff_img/f.png" width="87%">
						<span class="">Feature Phone</span><br>
						<span class="text-success mt-4" style="background:#e9f8df;padding:3px 15px;"><i class="fa-regular fa-user"></i> 510+ received</span>
                    </div>
                </div>
				<div class="col-lg-2 col-sm-2 col-6 mb-4">
                    <div class="product-bg text-center">
                        <img src="img/raff_img/sliding.png" width="100%">
						<span class="">Sliding Phone</span><br>
						<span class="text-success" style="background:#e9f8df;padding:3px 15px;"><i class="fa-regular fa-user"></i> 580+ received</span>
                    </div>
                </div>
				<div class="col-lg-2 col-sm-2 col-6 mb-4">
                    <div class="product-bg text-center">
                        <img src="img/raff_img/flip.png" width="100%">
						<span class="">Flip-Flop Phone</span><br>
						<span class="text-success" style="background:#e9f8df;padding:3px 15px;"><i class="fa-regular fa-user"></i> 420+ received</span>
                    </div>
                </div>
				<div class="col-lg-2 col-sm-2 col-6 mb-4">
                    <a href="{{asset('sell-phone/smart-phone')}}">
                    <div class="product-bg text-center">
                        <img src="img/raff_img/smart.png" width="100%">
						<span class="">Smart Phone</span><br>
						<span class="text-success" style="background:#e9f8df;padding:3px 15px;"><i class="fa-regular fa-user"></i> 1034+ received</span>
                    </div>
                    </a>
                </div>
				<div class="col-lg-2 col-sm-2 col-6 mb-4">
                    <div class="product-bg text-center">
                        <img src="img/raff_img/smart flip.png" width="100%">
						<span class="">Flip-Flop Smart Phone</span><br>
						<span class="text-success" style="background:#e9f8df;padding:3px 15px;"><i class="fa-regular fa-user"></i> 820+ received</span>
                    </div>
                </div>
				<div class="col-lg-2 col-sm-2 col-6 mb-4">
                    <div class="product-bg text-center">
                        <img src="img/raff_img/qwerty.png" width="100%" class="mb-2">
						<span class="">Qwerty Keypad Phone</span><br>
                        <span class="text-success" style="background:#e9f8df;padding:3px 15px;"><i class="fa-regular fa-user"></i> 420+ received</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection