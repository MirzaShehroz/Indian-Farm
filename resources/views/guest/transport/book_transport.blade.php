@extends('layouts.app')
@section('content')
<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around">

    <h4 class="mt-5 pt-5 mb-4 mt-md-0">Book an Transport</h4>

   <div class="col-12">
       
       <form action="" method="post">

    <div class="row">


            <div class="col-md-4 col-lg-3 my-3">
               
                <select id="animaltype"  class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype">
                  <option value="" disabled  selected>Select Animal Type...</option>
                  <option value="Cow">Cow</option>
                  <option value="Buffalo">Buffalo</option>
                  <option value="Bull">Bull</option>
                  <option value="Sheep" >Sheep</option>
                  <option  value="Goat"> Goat</option>
                </select>
                
              </div>

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="number" name="animalsno" id="" class="form-control" placeholder="No Of Animals ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="personname" id="" class="form-control" placeholder="Contact Person Name ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="tel" name="mobileno" id="" class="form-control" placeholder="Contact Number ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="date" name="datetrans" id="" class="form-control" placeholder="Date Of Transport ">


              </div>
              <!-- end of col  -->

              
            </div>
            <!-- end of row  -->


    <div class="row">

        <h5 class="tcolor my-4">From Address</h5>

         
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="address1" id="" class="form-control" placeholder="Address Line 1 ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="address2" id="" class="form-control" placeholder="Address Line 2">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="Area" id="" class="form-control" placeholder="Area ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" class="form-select overflow-scroll  ">
                      <option value="">City</option>
                     
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="startdropdown">
               
                    <select id="inputState"  class="form-select overflow-scroll ">
                      <option selected disabled> State</option>
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


           

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" class="form-select overflow-scroll  ">
                      <option value=""> District</option>
                     
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputTaluka" class="form-select overflow-scroll  ">
                      <option value="">Taluka</option>
                     
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->
              
              
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="pincode" id="" class="form-control" placeholder="Pin Code ">


              </div>
              <!-- end of col  -->
              
              
              
            </div>
            <!-- end of row  -->
            
   

    <div class="row mb-4">

        <h5 class="tcolor my-4">To Address</h5>

         
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="address1" id="" class="form-control" placeholder="Address Line 1 ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="address2" id="" class="form-control" placeholder="Address Line 2">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="Area" id="" class="form-control" placeholder="Area ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" class="form-select overflow-scroll  ">
                      <option value="">City</option>
                     
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="startdropdown">
               
                    <select id="inputState"  class="form-select overflow-scroll ">
                      <option selected disabled> State</option>
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


           

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" class="form-select overflow-scroll  ">
                      <option value=""> District</option>
                     
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputTaluka" class="form-select overflow-scroll  ">
                      <option value="">Taluka</option>
                     
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->
              
              
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="pincode" id="" class="form-control" placeholder="Pin Code ">


              </div>
              <!-- end of col  -->
              
              
              
            </div>
            <!-- end of row  -->
            
   

            <div class="row justify-content-around mt-5 pb-5 text-center">

                <div class="col-12">

                    <button id="submitbtn" type="button" class="btn btnsubmit bgcolor px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Submit
                    </button>


                </div>
                <!-- end of col  -->

            </div>
            <!-- end of row  -->
        </form>

   </div>
   <!-- end of col  -->

</div>
<!-- end of row  -->
@endsection