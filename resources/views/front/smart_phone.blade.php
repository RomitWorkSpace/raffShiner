@extends('layout.front')

@section('content')

<section class="detail-area">
    <div class="container">
        <p>Home / Sell Phone / <span style="color:#000;">Smart Phone</span></p>
    </div>
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <form action="/phone/price" method="post" id="myform" onsubmit="return validateForm()">
               @csrf
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
				
			</script>        

@endsection