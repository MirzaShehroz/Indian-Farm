@extends('app.dashboard')
@section('title','Profile')
       @section('pill')
 <div class="px-4 pt-4 position-relative" id="v-pills-settings5" role="tabpanel" aria-labelledby="v-pills-settings5-tab">

<div class="row pad-50 justify-content-between" id="edit_profile">


    <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">

      <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">Your Profile</h4>
      @if(Auth::check()=='true')

        @if($user->image!=null)
        <img src="{{asset($user->image)}}" id="output" class="profile_img my-3" alt="img not found">
        @elseif($user->image==null)
        <img src="{{asset('images/user-img.png')}}" id="output" class="profile_img my-3" alt="img not found">
        @endif

      @else
      <img src="{{asset('images/user-img.png')}}" id="output" class="profile_img my-3" alt="img not found">

      @endif
      
      <form action="{{url('update/vet/profile')}}" method="post" enctype="multipart/form-data">
        @csrf
      <p ><input type="file"  accept="image/*" name="profile" id="file"  onchange="loadFile(event)" style="display: none;"></p>
      <p class="bg-transparent border border-light  profilebtn btnhover px-3 py-2" style="border-radius: 5px;"><label for="file" style="cursor: pointer;">Upload Profile Picture</label></p>

    </div>
    <!-- end of col-3 -->

    <div class="col-12 col-md-8">

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-danger">{{$error}}<br></div>
@endforeach
@endif       

      <div class="row">

          <label for="" class="form-label fw-bold fs-5">Personal Details</label>
        <div class="col-12 col-md-6 mb-3">

            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
            <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" placeholder="Full Name"  required>
        
        
      

        </div>
        <!-- end of inner col  -->

        <div class="col-12 col-md-6 mb-3">

            <input type="text" class="form-control" name="middle_name" value="{{$user->middle_name}}" placeholder="Middle Name"  >
        
    

        </div>
        <!-- end of inner col  -->

        <div class="col-12 col-md-6 mb-3">

            <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" placeholder="Last Name"  required>
        
    

        </div>
        <!-- end of inner col  -->
        <div class="col-12 col-md-6 mb-3">

            <input type="text" class="form-control" name="license_no" value="{{$user->license_no}}" placeholder="License No"  required>
        
    

        </div>
        <!-- end of inner col  -->
        <div class="col-12 col-md-6 mb-3">

            <!-- <input type="text" class="form-control"  placeholder="Registered Vetinary Council"> -->
            <input type="text" class="form-control" name="register_vetninary" value="{{$user->reg_vet_council}}"  placeholder="Registered Vetinary Council"  required>
    

        </div>
        <!-- end of inner col  -->

        <div class="col-12 col-md-6 mb-3">

            <!-- <input type="text" class="form-control"  placeholder="VC Registered No."> -->
            <input type="text" class="form-control" name="vc_register_no" value="{{$user->vc_reg_no}}"  placeholder="VC Registered No."  required>
    

        </div>
        <!-- end of inner col  -->

                            
        

                     
        <hr class="my-3 bgcolor" style="opacity: 1;">
        
      </div>
      <!-- end of row inner -->
      <div class="row">

        <div class="col-12 col-lg-10 ">

          <label class="form-label fw-bold fs-5">Contact Details</label>

          <div class="input-group d-block mb-5 mb-md-3 d-md-flex">
            <input type="text" class="form-control inputno1 mb-3" name="contact_no" value="{{$user->contact_no}}" placeholder="Contact Number">
            
            <button type="button"  class="px-3 btnhover py-2 py-md-0 float-end mt-2 float-md-none mt-md-0 border border-secondary bg-transparent ms-2" id="basic-addon4" data-bs-toggle="modal" data-bs-target="#numberchange">Update/Change</button>
            <br class="d-md-none">
         
          </div>

          <div class="input-group d-block mb-5 mb-md-3 d-md-flex">
            <input type="text" class="form-control inputno1 mb-3" name="email" value="{{$user->email}}" placeholder="Email Id"  >
            
            <button type="button"  class="px-3 btnhover py-2 py-md-0 float-end mt-2 float-md-none mt-md-0 border border-secondary bg-transparent ms-2" id="basic-addon4" data-bs-toggle="modal" data-bs-target="#emailchange">Update/Change</button>
            <br class="d-md-none">
            <span class="ms-3">Requires OTP
            </span>
          </div>
          <span id="message" style="color:green"></span>
          <span id="successmessage" style="color:green"></span>
          <div id="otpdiv">
        
          </div>
          <div class="input-group d-block mb-5 mb-md-3 d-md-flex">
            <input type="text" class="form-control inputno1 mb-3" name="password" placeholder="Change Password" >
            
            <button type="button"  class="px-3 btnhover py-2 py-md-0 float-end mt-2 float-md-none mt-md-0 border border-secondary bg-transparent ms-2" id="basic-addon4" data-bs-toggle="modal" data-bs-target="#passwordchange">Password/Change</button>
            <br class="d-md-none">
         
          </div>

      

          


        </div>
        <!-- end of col  -->

    

        
      </div>
      <!-- end of inner row  -->

      <hr class="my-3 bgcolor" style="opacity: 1;">

      <div class="row">

        <div class="col-12 col-md-6 mt-3">
          <input type="text" class="form-control" placeholder="Address First Line" name="address_line1" value="{{$user->address_line1}}" aria-label="addressfirst"  required>
        </div>
        <div class="col-12 col-md-6 mt-3">
          <input type="text" class="form-control" value="{{$user->address_line2}}" name="address_line2" placeholder="Address Second Line" aria-label="addresssecode"  required>
        </div>
        <div class="col-12 col-md-6 mt-3">
          <input type="text" class="form-control" value="{{$user->area}}" name="area" placeholder="Enter Area" aria-label="area"  required>
        </div>
        <div class="col-12 col-md-6 mt-3">
          <select id="inputCity" class="form-select overflow-scroll " name="city"  required>
          <option value="{{$user->city}}" selected >{{$user->city}}</option>
            <option value=""  disabled>City</option>
            <option value="Pune">Pune</option>

          </select>
        </div>
        <div class="col-12 col-md-6 mt-3">
          <select id="inputState" class="form-select overflow-scroll " name="state"  required>
          <option value="{{$user->state}}" selected >{{$user->state}}</option>
            <option value=""  disabled>State</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>

          </select>
        </div>

        <div class="col-12 col-md-6 mt-3">
          <select id="inputDistrict" class="form-select overflow-scroll " name="district"  required>
          <option value="{{$user->district}}" selected >{{$user->district}}</option>
            <option value=""disabled>District</option>
            <option value="Pune">Pune</option>

          </select>
        </div>

        <div class="col-12 col-md-6 mt-3">
          <select id="inputTaluka" class="form-select overflow-scroll " name="taluka" required>
          <option value="{{$user->taluka}}" selected>{{$user->taluka}}</option>
            <option value=""disabled>Taluka</option>
            <option value="Pune">Pune</option>

          </select>
        </div>

        <div class="col-12 col-md-6 mt-3">
          <input type="text" class="form-control" value="{{$user->zipcode}}" placeholder="Pin Code" aria-label="pincode" name="zipcode">
        </div>

        <hr class="mt-5 mb-3 bgcolor" style="opacity: 0.6;">
        <div class="col-12 text-center mx-auto col-md-3">
           <button type="submit"  class="px-3 btnhover py-2 border border-secondary bg-transparent">Update/Change</button>
        </div>

      </div>
      <!-- end of inner row  -->

     

    
    </form>
    <!-- end of form  -->

    

    </div>
    <!-- end of col-9  -->

   

    </div>
    <!-- end of edit profile row  -->












</div>
<div class="modal" id="passwordchange" data-bs-toggle="modal" data-bs-target="#passwordchange">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="passwordchange"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-4">
        

          <div>
              <form action="{{url('vet/change/password')}}" method="post">
                @csrf
                  <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                  <input type="password" placeholder="Enter Password" class="py-3 mt-5 form-control" name="password" id="">
                  <input type="password" placeholder="Re-Enter Password" class="py-3 mt-2 form-control" name="repassword" id="">

                  <button type="submit" class="py-3 form-control mt-5 bg_danger text-light">Submit</button>
              </form>
          </div>
        </div>
       
      </div>
    </div>
  </div>
                         <!-- number change modal  -->
<div class="modal fade" id="numberchange" data-bs-toggle="modal" data-bs-target="#numberchange">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="numberchange"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-4">
          <h5>Please Enter your New Mobile No</h5>

          <div>
              <form action="" method="post">
                  <input type="text" placeholder="Enter Mobile No." class="py-3 mt-5 form-control" name="" id="">

                  <button type="button" class="py-3 form-control mt-5 bg_danger text-light" data-bs-toggle="modal" data-bs-target="#otpnumber">Submit</button>
              </form>
          </div>
        </div>
       
      </div>
    </div>
  </div>
       <!-- email change modal  -->
<div class="modal" id="emailchange" data-bs-toggle="modal" data-bs-target="#emailchange">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="emailchange"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-4">
          <h5>Please Enter your New Email</h5>

          <div>
          <form method="post">
              
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="email" placeholder="Enter Email Id " class="py-3 mt-5 form-control" id="sendmail" name="changeemail">

                <button id="changeemail" onclick="changeVetEmail({{Auth::user()->id}})" type="button" class="py-3 form-control mt-5 bg_danger text-light" data-bs-toggle="modal" data-bs-target="#otpnumber">Submit</button>
            </form>
          </div>
        </div>
       
      </div>
    </div>
  </div>
@endsection
@section('script')
<script src="//s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    
    <script src="{{asset('js/calander.js')}}" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

function changeVetEmail(id){
   let email=document.getElementById('sendmail').value;
 //  $('#otpdiv').attr('style', 'display: block !important');
   $('#otpdiv').append("<div><form method='post'><input type='text' id='enteredOtp' class='form-control inputno1 mb-3' placeholder='Enter OTP' name='otp'><button type='button'  class='px-3 btnhover py-2 py-md-0 float-end mt-2 float-md-none mt-md-0 border border-secondary bg-transparent ms-2' onclick='otpcheck()'>Submit OTP</button><br><br></from></div>");  
  $.ajax({
               type:'POST',
               url:"{{url('vet/change/email/')}}"+ '/'+id + '/' +email,
               data:{_token: "{{ csrf_token() }}"},
               success:function(data) {
                 document.getElementById('message').innerHTML=data.message;
                 swal("Done!", "OTP Sent Successfully Check Inbox", "success");
                 console.log(data);
               }
    });
//alert('h');

 };

 function otpcheck(){
   let otp=document.getElementById('enteredOtp').value;
   let email=document.getElementById('sendmail').value;
   $.ajax({
               type:'POST',
               url:"{{url('vet/change/email/otp/')}}"+ '/'+otp+'/' +email,
               data:{_token: "{{ csrf_token() }}"},
               success:function(data) {
              //  document.getElementById('successmessage').innerHTML=data.message;
                //  $('#otpdiv').css('display','none');
                document.getElementById('message').innerHTML='';
                if(data.message=='fail'){
                  swal("Error!", "Otp Not Match!", "error");
                }
                else if(data.message=='success'){
                  swal("Done!", "Email Changed Successfully", "success");
                  location.reload();
                }
                
               }
    });
 }

</script>

@endsection