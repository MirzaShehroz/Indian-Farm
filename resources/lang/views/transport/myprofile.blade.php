@extends('app.dashboard')
@section('title','Profile')
       @section('pill')
 <div class="px-4 pt-4 position-relative" id="v-pills-settings5" role="tabpanel" aria-labelledby="v-pills-settings5-tab">

<div class="row pad-50 justify-content-between" id="edit_profile">


    <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">

      <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">Your Profile</h4>

      <img src="{{asset('images/user-img.png')}}" class="profile_img my-3" alt="img not found">

  
      <button type="file" class="bg-transparent border border-light  profilebtn btnhover px-3 py-2" style="border-radius: 5px;">Upload Profile Picture</button>


    </div>
    <!-- end of col-3 -->

    <div class="col-12 col-md-8">

      <form action="" method="post" >

      <div class="row">

          <label for="" class="form-label fw-bold fs-5">Personal Details</label>
        <div class="col-12 col-md-6 mb-3">

       
            <input type="text" class="form-control"  placeholder="Full Name">
        
        
      

        </div>
        <!-- end of inner col  -->

        <div class="col-12 col-md-6 mb-3">

            <input type="text" class="form-control"  placeholder="Middle Name">
        
    

        </div>
        <!-- end of inner col  -->

        <div class="col-12 col-md-6 mb-3">

            <input type="text" class="form-control"  placeholder="Last Name">
        
    

        </div>
        <!-- end of inner col  -->
        <div class="col-12 col-md-6 mb-3">

            <input type="text" class="form-control"  placeholder="License No">
        
    

        </div>
        <!-- end of inner col  -->
        <div class="col-12 col-md-6 mb-3">

            <input type="text" class="form-control"  placeholder="Registered Vetinary Council">
        
    

        </div>
        <!-- end of inner col  -->

        <div class="col-12 col-md-6 mb-3">

            <input type="text" class="form-control"  placeholder="VC Registered No.">
        
    

        </div>
        <!-- end of inner col  -->

                            
        

                     
        <hr class="my-3 bgcolor" style="opacity: 1;">
        
      </div>
      <!-- end of row inner -->
      <div class="row">

        <div class="col-12 col-lg-10 ">

          <label class="form-label fw-bold fs-5">Contact Details</label>

          <div class="input-group d-block mb-5 mb-md-3 d-md-flex">
            <input type="text" class="form-control inputno1 mb-3" placeholder="Contact Number">
            
            <button type="button"  class="px-3 btnhover py-2 py-md-0 float-end mt-2 float-md-none mt-md-0 border border-secondary bg-transparent ms-2" id="basic-addon4" data-bs-toggle="modal" data-bs-target="#numberchange">Update/Change</button>
            <br class="d-md-none">
         
          </div>

          <div class="input-group d-block mb-5 mb-md-3 d-md-flex">
            <input type="text" class="form-control inputno1 mb-3" placeholder="Email Id"  >
            
            <button type="button"  class="px-3 btnhover py-2 py-md-0 float-end mt-2 float-md-none mt-md-0 border border-secondary bg-transparent ms-2" id="basic-addon4" data-bs-toggle="modal" data-bs-target="#emailchange">Update/Change</button>
            <br class="d-md-none">
         
          </div>

          <div class="input-group d-block mb-5 mb-md-3 d-md-flex">
            <input type="text" class="form-control inputno1 mb-3" placeholder="Change Password" >
            
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
          <input type="text" class="form-control" placeholder="Address First Line" aria-label="addressfirst">
        </div>
        <div class="col-12 col-md-6 mt-3">
          <input type="text" class="form-control" placeholder="Address Second Line" aria-label="addresssecode">
        </div>
        <div class="col-12 col-md-6 mt-3">
          <input type="text" class="form-control" placeholder="Enter Area" aria-label="area">
        </div>
        <div class="col-12 col-md-6 mt-3">
          <select id="inputCity" class="form-select overflow-scroll ">
            <option value="" selected disabled>City</option>
            <option value="Pune">Pune</option>

          </select>
        </div>
        <div class="col-12 col-md-6 mt-3">
          <select id="inputState" class="form-select overflow-scroll ">
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

        <div class="col-12 col-md-6 mt-3">
          <select id="inputDistrict" class="form-select overflow-scroll ">
            <option value="" selected disabled>District</option>
            <option value="Pune">Pune</option>

          </select>
        </div>

        <div class="col-12 col-md-6 mt-3">
          <select id="inputTaluka" class="form-select overflow-scroll ">
            <option value="" selected disabled>Taluka</option>
            <option value="Pune">Pune</option>

          </select>
        </div>

        <div class="col-12 col-md-6 mt-3">
          <input type="text" class="form-control" placeholder="Pin Code" aria-label="pincode">
        </div>

        <hr class="mt-5 mb-3 bgcolor" style="opacity: 0.6;">
        <div class="col-12 text-center mx-auto col-md-3">
           <button type="button"  class="px-3 btnhover py-2 border border-secondary bg-transparent">Update/Change</button>
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
@endsection
@section('script')
<script src="//s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    
    <script src="{{asset('js/calander.js')}}" type="text/javascript"></script>
@endsection