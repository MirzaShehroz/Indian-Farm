@extends('app.dashboard')
@section('title','Dashboard')
       @section('pill')
       
       <div class="px-4 pt-4 position-relative" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">


                        <div class="row ms-md-5 ms-lg-0 justify-content-around" id="notic">

                            <div class="col-12">



                                <div class="row justify-content-around gap-2" id="notic">

                                    <div class="col-12 col-md-3 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                                        <h5>Total Appointments</h5>

                                        <h1>
                                        0
                                          </h1>


                                    </div>
                                    <!-- end of col  -->
                                    <div class="col-12 col-md-3 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                                        <h5>Appointments Today </h5>

                                        <h1>0</h1>


                                    </div>
                                    <!-- end of col  -->
                                    

                                </div>
                                <!-- end of row  -->

                          

                              <div class="row justify-content-around" id="calander">

                               <div class="col-12">

                                <section>
                                    <div class="main">
                                                      <div class="custom-calendar-wrap">
                                                            <div id="custom-inner" class="custom-inner">
                                                                  <div class="custom-header clearfix">
                                                                        <nav>
                                                                              <span id="custom-prev" class="custom-prev"></span>
                                                                              <span id="custom-next" class="custom-next"></span>
                                                                        </nav>
                                                                        <h2 id="custom-month" class="custom-month"></h2>
                                                                        <h3 id="custom-year" class="custom-year"></h3>
                                                                  </div>
                                                                  <div id="calendar" class="fc-calendar-container"></div>
                                                            </div>
                                                      </div>
                                    </div>
                                              </section>

                               </div>
                              <!-- end of col  -->
                               
                                </div>
                                <!-- end of row  -->
                        

                          

                            </div>
                            <!-- end of col  -->


                        </div>
                        <!-- end of row  -->



                      </div>

                      <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_transportbook" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                        
        <div class="row p-3 px-lg-5 justify-content-around">

            <h4 class="mt-5 mb-4 mt-md-0">Edit Appointment</h4>

            <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
                      
            
    
                <img src="{{asset('images/user-img.png')}}" class="profile_img rounded-circle my-3" alt="img not found">
    
            
       

              
    
              </div>
              <!-- end of col-3 -->

           <div class="col-12 col-md-9">
               
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
                        
                        <input type="text" name="" id="" class="form-control" placeholder="No Of Animals ">


                      </div>
                      <!-- end of col  -->
    
                  
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="" class="form-control" placeholder="Contact Person Name ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="" class="form-control" placeholder="Contact Number ">


                      </div>
                      <!-- end of col  -->

                
                      
                    </div>
                    <!-- end of row  -->


            <div class="row">

                <h5 class="tcolor my-4">From Address</h5>

                 
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="" class="form-control" placeholder="Address Line 1 ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="" class="form-control" placeholder="Address Line 2">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="" class="form-control" placeholder="Area ">


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
                        
                        <input type="text" name="" id="" class="form-control" placeholder="Pin Code ">


                      </div>
                      <!-- end of col  -->
                      
                
                      
                      
                      
                    </div>
                    <!-- end of row  -->
                    
           

            <div class="row mb-4">

                <h5 class="tcolor my-4">To Address</h5>

                 
                <div class="col-md-4 col-lg-3 my-3">
                        
                    <input type="text" name="" id="" class="form-control" placeholder="Address Line 1 ">


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="" id="" class="form-control" placeholder="Address Line 2">


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="" id="" class="form-control" placeholder="Area ">


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
                    
                    <input type="text" name="" id="" class="form-control" placeholder="Pin Code ">


                  </div>
                  <!-- end of col  -->
                  
             
                      
                      
                      
                    </div>
                    <!-- end of row  -->

                    <div class="row justify-content-around">

                        <h5 class="tcolor my-4">Your Inputs</h5>

                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                              
                                <select id="" class="form-select overflow-scroll  ">
                                  <option value="" selected disabled>Appointment Status</option>
                                 <option value="">Confirmed</option>
                                 <option value="">Completed</option>
                                 <option value="">Cancelled</option>
                                
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->
                        <div class="col-md-6 my-3">
                    
                            <div class="Districdropdown">
                               <textarea name="" placeholder="Your Comments" class="form-control" id=""  rows="4"></textarea>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->

                    </div>
                    
           

                    <div class="row justify-content-around mt-5 text-center">

                        <div class="col-12">

                            <button id="submitbtn" type="button" class="btn btnsubmit bg_danger rounded-pill px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
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


    
    
                        </div>
                      </div>
       @endsection
@section('script')
<script src="//s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    
    <script src="{{asset('js/calander.js')}}" type="text/javascript"></script>
@endsection