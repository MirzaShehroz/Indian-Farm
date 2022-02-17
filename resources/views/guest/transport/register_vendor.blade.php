@extends('layouts.app')
@section('content')
<div class="row pad-50 justify-content-between mt-5 pt-5 mt-lg-0" id="edit_profile">


    <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5 h-100 pb-5" style="
    background-image: linear-gradient(315deg, #aee1f9 0%, #f6ebe6 74%);
     border-radius: 20px;  box-shadow: 1px 1px 10px rgb(218, 218, 218) !important;">


<form action="{{route('guestRegister')}}" method="post" enctype="multipart/form-data">
  @csrf

      <img src="{{asset('images/user-img.png')}}" name="profile" class="profile_img my-3" alt="img not found">

  
        <input type="file" name="profile" value="Upload Image">

    </div>
    <!-- end of col-3 -->

    <div class="col-12 col-md-8">


   <h5 class="mb-4">Personal Details</h5>
        <div class="row">
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" aria-label="First name">
          </div>
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" aria-label="Middle name">
          </div>
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" aria-label="Last name">
          </div>
        </div>

      
        <div class="row my-2">
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="license_no" placeholder="License No" aria-label="License">
          </div>
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="vehicle" placeholder="Vehicle Type " aria-label="Vehicle">
          </div>
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="make" placeholder="Vehicle Make & Model" aria-label="Model">
          </div>
        </div>

        <h5 class="my-4">Contact Details</h5>
        <div class="row">
          <div class="col-12 col-md-3 my-2">
            <input type="text" class="form-control" name="contact_no" placeholder="Contact Number" aria-label="Contact Number">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="text" class="form-control" name="email" placeholder="Email Id" aria-label="Email Id">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" aria-label="Password">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="password" id="c_password" class="form-control" name="c_password" placeholder="Confirm Password" aria-label="Confirm Password">
            <span id="message"></span>
          </div>
        </div>


        <div class="row my-2">
          <div class="col-12 col-md-3 my-2">
            <input type="text" class="form-control" name="address1" placeholder="Address Line 1 " aria-label="Address Line 1 ">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="text" class="form-control" name="address2" placeholder="Address Line 2" aria-label="Address Line 2">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="text" class="form-control" name="area" placeholder="Area" aria-label="area">
          </div>
          <div class="col-12 col-md-3 my-2">
            <select id="inputCity" name="city" class="form-select overflow-scroll ">
              <option value="" selected disabled>City</option>
              <option value="Pune">Pune</option>

            </select>
          </div>
        </div>


        <div class="row my-2">
          <div class="col-12 col-md-3 my-2">
            <select id="inputState" name="state" class="form-select overflow-scroll ">
              <option value="" selected disabled>State</option>
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
          <div class="col-12 col-md-3 my-2">
            <select id="inputDistrict" name="district" class="form-select overflow-scroll ">
              <option value="" selected disabled>District</option>
              <option value="Pune">Pune</option>

            </select>
          </div>
          <div class="col-12 col-md-3 my-2">
            <select id="inputTaluka" name="taluka" class="form-select overflow-scroll ">
              <option value="" selected disabled>Taluka</option>
              <option value="Pune">Pune</option>

            </select>
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="number" class="form-control" name="pincode" placeholder="Pin Code" aria-label="Pin Code">
          </div>
        </div>

      
        <h5 class="my-4">  Upload Documents</h5>
        <div class="row">
          <div class="col-12 col-md-3 my-2">
            <input type="file" class="form-control" name="doc1">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="file" class="form-control" name="doc2">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="file" class="form-control" name="doc3">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="file" class="form-control" name="doc4">
          </div>
        </div>
      
        <div class="col-12 text-center ">

          <a href="transport_post_submit.html" class="text-decoration-none  text-light"> <button class="bgcolor px-5 py-2 text-light mt-5 border_color2 hoverbtna" type="submit">Submit</button></a>

        </div>
        <!-- end of col  -->
    
    </form>
    <!-- end of form  -->

    

    </div>
    <!-- end of col-9  -->

   

    </div>
    <!-- end of edit profile row  -->

@endsection

@section('script')
    <script>
        $('#c_password').change(function(){
        var password=$('#password').val();
        var confirm=$('#c_password').val();
       if(password!=confirm){
        $('#c_password').css("border-color","red");
        $("#message").text('Password not match!');
       }
       else{
        $('#c_password').css("border-color","white");
        $("#message").text('');
       }
        })
    </script>
@endsection