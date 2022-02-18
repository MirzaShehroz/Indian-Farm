@extends('layouts.app')
@section('content')
<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around">

    <h4 class="mt-5 pt-5 mb-4 mt-md-0">Book an Transport</h4>

   <div class="col-12">
       
  <form action="{{route('book-vendor')}}" method="POST">
    @csrf

    <div class="row">


            <div class="col-md-4 col-lg-3 my-3">
               
                <select id="animaltype"  class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype">
                  <option name="animal_type" value="" disabled  selected>Select Animal Type...</option>
                  <option value="2">Cow</option>
                  <option value="1">Buffalo</option>
                  <option value="0">Bull</option>
                  <option value="3" >Sheep</option>
                  <option  value="4"> Goat</option>
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
                
                <input type="date" name="dot" id="" class="form-control" placeholder="Date Of Transport ">


              </div>
              <!-- end of col  -->

              
            </div>
            <!-- end of row  -->


    <div class="row">

        <h5 class="tcolor my-4">From Address</h5>

         
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="faddressline1" id="" class="form-control" placeholder="Address Line 1 ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="faddressline2" id="" class="form-control" placeholder="Address Line 2">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="fromarea" id="" class="form-control" placeholder="Area ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" name="fromcity" class="form-select overflow-scroll  ">
                      <option value="" selected>City</option>
                      <option value="goa">Goa</option>
                      <option value="lahore">Lahore</option>
                      <option value="islamabad">Islamabad</option>

                     
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="startdropdown">
               
                    <select id="inputState" name="fromstate" class="form-select overflow-scroll ">
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
                    <select id="inputDistrict" name="fromdistrict" class="form-select overflow-scroll  ">
                      <option value=""> District</option>
                      <option value="Bihar">Bihar</option>
                      <option value="punjab">Punjab</option>
                      <option value="sindh">Sindh</option>
                     
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputTaluka" name="fromtaluka" class="form-select overflow-scroll  ">
                      <option value="">Taluka</option>
                      <option value="Taluka1">Taluka1</option>
                      <option value="Taluka2">Taluka2</option>
                      <option value="Taluka13">Taluka3</option>
                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->
              
              
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="frompincode" id="" class="form-control" placeholder="Pin Code ">


              </div>
              <!-- end of col  -->
              
              
              
            </div>
            <!-- end of row  -->
            
   

    <div class="row mb-4">

        <h5 class="tcolor my-4">To Address</h5>

         
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="taddressline1" id="" class="form-control" placeholder="Address Line 1 ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="taddressline2" id="" class="form-control" placeholder="Address Line 2">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="toarea" id="" class="form-control" placeholder="Area ">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" name="tocity" class="form-select overflow-scroll  ">
                      <option value="">City</option>
                      <option value="goa">Goa</option>
                      <option value="lahore">Lahore</option>
                      <option value="islamabad">Islamabad</option>

                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="startdropdown">
               
                    <select id="inputState"  name="tostate" class="form-select overflow-scroll ">
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
                    <select id="inputDistrict" name="todistrict" class="form-select overflow-scroll  ">
                      <option value=""> District</option>
                      <option value="bihar">Bihar</option>
                      <option value="punjab">Punjab</option>
                      <option value="kpk">kpk</option>

                    </select>
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputTaluka" name="totaluka" class="form-select overflow-scroll  ">
                      <option value="">Taluka</option>
                      <option value="Taluka1">Taluka1</option>
                      <option value="Taluka2">Taluka2</option>
                      <option value="Taluka3">Taluka3</option>

                    
                    </select>
                  </div>


              </div>
              <!-- end of col  -->
              
              
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="number" name="topincode" id="" class="form-control" placeholder="Pin Code ">


              </div>
              <!-- end of col  -->
              
              
              
            </div>
            <!-- end of row  -->
            
   

            <div class="row justify-content-around mt-5 pb-5 text-center">

                <div class="col-12">

                    <button id="submitbtn" type="submit" class="btn btnsubmit bgcolor px-5 text-light border_color2 py-2 btnhover2" >
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