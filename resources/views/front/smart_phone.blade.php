@extends('layout.front')

@section('content')
<style>
.phone-structure{
   height:250px;
   width:100%;
   background-size:contain;
   background-position:center;
   background-repeat:no-repeat;
}
.fa-circle-check{
   color:green;
   font-size:35px;
   float:right;
   margin-top:14px;
}
</style>
<section class="detail-area">
    <div class="container">
        <p>Home / Sell Phone / <span style="color:#000;">Smart Phone</span></p>
    </div>
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <form action="/phone/price" method="post" id="myform" onsubmit="return validateForm()">
               @csrf
                <input type="hidden" name="username" value="{{session('LoggedUser')}}">
                <h2 class="mb-4 mt-3">Select Your Phone Brand</h2>
                <div class="mb-5">
                <label for="realme">
                <img src="{{asset('img/raff_img/realme.png')}}" class="mr-3" height="80">
                </label>
                <input type="radio" id="realme" name="brand" value="Realme">

                <label for="mi">
                <img src="{{asset('img/raff_img/Xiaomi_logo.png')}}" height="80">
                </label>
                <input type="radio" id="mi" name="brand" value="Xiaomi">

                <label for="oppo">
                <img src="{{asset('img/raff_img/oppo.png')}}" height="80">
                </label>
                <input type="radio" id="oppo" name="brand" value="oppo">

                <label for="apple">
                <img src="{{asset('img/raff_img/apple.png')}}" class="mr-3" height="80">
                </label>
                <input type="radio" id="apple" name="brand" value="Apple">

                <label for="vivo">
                <img src="{{asset('img/raff_img/vivo.png')}}" class="mr-3" height="80">
                </label>
                <input type="radio" id="vivo" name="brand" value="vivo">
                </div>
                <h3>How old is your phone?</h3>
                <div class="row mt-3 mb-5">
                   <div class="col-4">
                      <label for="0-2" class="txt">0-2 years</label>
                      <input type="radio" id="0-2" name="year" value="0-2 years">
                   </div>
                   <div class="col-4">
                      <label for="2-5" class="txt">2-5 years</label>
                      <input type="radio" id="2-5" name="year" value="2-5 years">
                   </div>
                   <div class="col-4">
                      <label for="5+" class="txt">5+ years</label>
                      <input type="radio" id="5+" name="year" value="5+ years">
                   </div>
                </div>

                <h3>Has your phone ever been repaired?</h3>
                <div class="row mt-3 mb-5">
                   <div class="col-4">
                      <label for="yes" class="txt">YES</label>
                      <input type="radio" id="yes" name="repaired" value="YES">
                   </div>
                   <div class="col-4">
                      <label for="no" class="txt">NO</label>
                      <input type="radio" id="no" name="repaired" value="NO">
                   </div>
                </div>
                <div class="row align-items-center mb-5">
                  <div class="col-md-6 col-7">
                   <h4>Select quantity:</h4>
                  </div>
                  <div class="col-md-4 col-5">
                   <select class="form-control" name="qty">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                   </select>
                  </div>
                  <div class="col-md-2"></div>
                </div>
                <div class="phone-structure" style="background-image:url('/img/raff_img/phone-structure.jpg');">
                <div id="s-top1" style="height:25%;" onclick="screenEnquire()"></div>
                <div id="s-top2" style="height:25%;" onclick="displayEnquire()"></div>
                <div id="circuit" style="height:25%;" onclick="circuitEnquire()"></div>
                <div id="backcover" style="height:25%;" onclick="coverEnquire()"></div>
                </div>
         </div>
         <div class="col-md-5">
            <div class="phone-detail">
                <div class="phone-image">
                    <img src="{{asset('img/raff_img/smart.png')}}" width="100%">
                </div>
                <div class="">
                    <h2 id="brand" class="text-center"></h2>
                    <span id="brand-error" class="text-danger"></span>
                    <h4 id="year"></h4>
                </div>
            </div>
            <button type="submit" class="price-btn" id="show-price">Generate Price</button>
         </div>
        </form>
      </div>
   </div>
</section>

         <script>
                   var value, yr;
                   $('#myform').on('click', function(){
					      value=$("[name=brand]:checked").val();
                      if(value==undefined)
					          document.getElementById("brand").innerHTML=" ";
                      else{
                        document.getElementById("brand").innerHTML=value;
                        document.getElementById("brand-error").innerHTML="";
                      }

                        yr=$("[name=year]:checked").val();
                        if(yr==undefined)
					            document.getElementById("year").innerHTML=" ";
                        else
                           document.getElementById("year").innerHTML="Your phone is "+yr+" old";
				        });
                   function validateForm(){
                     if (value==undefined || value==" "){
                        document.getElementById("brand-error").innerHTML="*Please select brand name";
                        return false;
                     }
                        
                   }

                   function screenEnquire() {
                      var top1 = document.getElementById("s-top1");
                      if (top1.innerHTML == "") {
                        top1.innerHTML = '<i class="fa-regular fa-circle-check"></i>';
                      } else {
                        top1.innerHTML = "";
                      }
                   }

                   function displayEnquire() {
                     var top2 = document.getElementById("s-top2");
                      if (top2.innerHTML == "") {
                        top2.innerHTML = '<i class="fa-regular fa-circle-check"></i>';
                      } else {
                        top2.innerHTML = "";
                      }
                   }

                   function circuitEnquire() {
                     var circuit = document.getElementById("circuit");
                      if (circuit.innerHTML == "") {
                        circuit.innerHTML = '<i class="fa-regular fa-circle-check"></i>';
                      } else {
                        circuit.innerHTML = "";
                      }
                   }

                   function coverEnquire() {
                     var cover = document.getElementById("backcover");
                      if (cover.innerHTML == "") {
                        cover.innerHTML = '<i class="fa-regular fa-circle-check"></i>';
                      } else {
                        cover.innerHTML = "";
                      }
                   }			
			</script>        

@endsection