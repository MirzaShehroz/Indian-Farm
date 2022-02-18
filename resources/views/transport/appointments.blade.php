@extends('app.dashboard')
@section('title','Appointment')
       @section('pill')
    
       <div class="px-4 pt-4 position-relative" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings2-tab">

                        <div class="row">

                            <!-- <form action="" method=""> -->

                         
                          

                          <div class="col-12 mt-4">

                          <div class="text-end d-flex d-md-block ">
                            
                            <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
                                Export TO CSV
                            </button>

                          </div>

                            <div class="col-12 overflow-scroll mt-5">

                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">User Name </th>
                                    
                                        <th scope="col">Contact No </th>
                                     
                                      
                                      
                                        <th scope="col">City</th>
                                     
                                        <th scope="col">Animal Type</th>
                                      
                               
                                 
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                      
                                       
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if($detail!=null)
                                      @foreach($detail as $detail)
                                      <tr>
                                        <td scope="row">{{$detail->contact_name}}</td>
                                       
                                   
                                        <td>{{$detail->contact_no}}</td>
                                        <td>{{from_address($detail->id)->city}}</td>
                                          @if($detail->animal_type==0)
                                            <td>Bull</td>
                                          @elseif($detail->animal_type==1)  
                                            <td>Buffalo</td>
                                          @elseif($detail->animal_type==2)  
                                            <td>Cow</td>
                                          @elseif($detail->animal_type==3)  
                                            <td>Sheep</td>  
                                          @elseif($detail->animal_type==4)  
                                            <td>Goat</td>
                                          @endif  
                                        <td>{{$detail->created_at->format('Y-m-d')}}</td>
                                        @if($detail->status==0)
                                        <td>Confirmed</td>
                                        @elseif($detail->status==1)
                                        <td>Completed</td>
                                        @elseif($detail->status==2)
                                        <td>Cancelled</td>
                                        @endif

                                        
                                        
                                      
                                   
                                      
                                        <td class="d-flex justify-content-around">
                                            <button class="bg_danger text-light me-2 p-1"  data-bs-toggle="offcanvas" data-bs-target="#edit_transportbook" aria-controls="edit_appointment" type="button" onclick="editdetail({{$detail->id}})"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="bg_danger text-light me-2 p-1" data-bs-toggle="offcanvas" data-bs-target="#view_appointment" aria-controls="view_appointment" type="button" onclick="viewdetail({{$detail->id}})"><i class="fas fa-eye"></i></button>
                                         
                                        </td>
                                      </tr>
                                      @endforeach
                                      @else
                                      no data
                                      @endif
                                     
                                    
                                    </tbody>
                                  </table>


                            </div>
                            <!-- end of col  -->

                        </div>

     <div class="row mt-5 justify-content-around ext-centert">

                            <div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">
                        
                              <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                    </a>
                                  </li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                        
                        
                            </div>
                            <!-- end of col  -->
                        
                        
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
                      
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-danger">{{$error}}<br></div>
@endforeach
@endif       
    
                <img src="{{asset('images/user-img.png')}}" class="profile_img rounded-circle my-3" alt="img not found">
    
            
       

              
    
              </div>
              <!-- end of col-3 -->

           <div class="col-12 col-md-9">
               
          <form action="{{url('transport/update/detail')}}" method="post">
            @csrf
            <input type="hidden" id="appointmentid" name="transportbook">
           
            <div class="row">


                    <div class="col-md-4 col-lg-3 my-3">
                       
                        <select id="eanimaltype"  class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype">
                          <option value="" disabled  >Select Animal Type...</option>
                          <option value="0">Bull</option>
                          <option value="1">Buffalo</option>
                          <option value="2">Cow</option>
                          <option value="3" >Sheep</option>
                          <option  value="4"> Goat</option>
                        </select>
                        
                      </div>
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="no_animals" id="eno_animals" class="form-control" placeholder="No Of Animals ">


                      </div>
                      <!-- end of col  -->
    
                  
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="contact_person" id="econtact_person" class="form-control" placeholder="Contact Person Name ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="contact_no" id="econtact_no" class="form-control" placeholder="Contact Number ">


                      </div>
                      <!-- end of col  -->

                
                      
                    </div>
                    <!-- end of row  -->


            <div class="row">

                <h5 class="tcolor my-4">From Address</h5>

                 
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="faddresline1" id="efaddressline1" class="form-control" placeholder="Address Line 1 ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="faddressline2" id="efaddressline2" class="form-control" placeholder="Address Line 2">


                      </div>
                      <!-- end of col  -->
    
                      <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="farea" id="efarea" class="form-control" placeholder="Area ">


                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="efcity" name="fcity" class="form-select overflow-scroll  ">
                              
                              <option value="" disabled> Select City</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                        
                            
                            </select>
                          </div>
        

                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="startdropdown">
                       
                            <select id="efstate"  class="form-select overflow-scroll " name="fstate">
                              <option  disabled> State</option>
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
                            <select id="efdistrict" class="form-select overflow-scroll  " name="fdistrict">
                             
                              <option value="" disabled> District</option>
                          <option value="xyz"> XYZ</option>
                          <option value="lmno"> LMNO</option>
                          <option value="abc">ABC</option>
                            
                            </select>
                          </div>


                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="eftaluka" name="ftaluka" class="form-select overflow-scroll  ">
                              <option value="" disbaled>Taluka</option>
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                            
                            </select>
                          </div>


                    </div>
                      <!-- end of col  -->
                      
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="fzipcode" id="efzipcode" class="form-control" placeholder="Pin Code ">


                    </div>
                    
                      <!-- end of col  -->
                      
                
                      
                      
                      
                    </div>
                    <!-- end of row  -->
                    
           

            <div class="row mb-4">

                <h5 class="tcolor my-4">To Address</h5>

                 
                <div class="col-md-4 col-lg-3 my-3">
                        
                    <input type="text" name="taddressline1" id="teaddressline1" class="form-control" placeholder="Address Line 1 ">


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="taddressline2" id="teaddressline2" class="form-control" placeholder="Address Line 2">


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="tarea" id="tearea" class="form-control" placeholder="Area ">


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="Districdropdown">
                        <select id="tecity" name="tcity" class="form-select overflow-scroll  ">
                         
                          <option value="" disabled> Select City</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                        
                        </select>
                </div>
    

                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="startdropdown">
                   
                        <select id="etstate" name="tstate"  class="form-select overflow-scroll ">
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
                        <select id="etdistrict" class="form-select overflow-scroll  " name="tdistrict">
                          <option value="" disabled> District</option>
                          <option value="xyz"> XYZ</option>
                          <option value="lmno"> LMNO</option>
                          <option value="abc">ABC</option>
                        </select>
                      </div>


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="Districdropdown">
                        <select id="ettaluka" class="form-select overflow-scroll  " name="ttaluka">
                          <option value="">Taluka</option>
                          
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                        
                        </select>
                      </div>


                </div>
                  <!-- end of col  -->
                  
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="tzipcode" id="etzipcode" class="form-control" placeholder="Pin Code ">


                </div>                  <!-- end of col  -->
                  
             
                      
                      
                      
                    </div>
                    <!-- end of row  -->

                    <div class="row justify-content-around">

                        <h5 class="tcolor my-4">Your Inputs</h5>

                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                              
                                <select id="status" class="form-select overflow-scroll  " name="status">
                                  <option value="" selected disabled>Appointment Status</option>
                                 <option value="0">Confirmed</option>
                                 <option value="1">Completed</option>
                                 <option value="2">Cancelled</option>
                                
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->
                        <div class="col-md-6 my-3">
                    
                            <div class="Districdropdown">
                               <textarea  placeholder="Your Comments" class="form-control" id="comment" name="comment"  rows="4"></textarea>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->

                    </div>
                    
           

                    <div class="row justify-content-around mt-5 text-center">

                        <div class="col-12">

                            <!-- <button id="submitbtn" type="submit" class="btn btnsubmit bg_danger rounded-pill px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Submit
                            </button> -->
                        <input type="submit" class="btn btnsubmit bg_danger rounded-pill px-5 text-light border_color2 py-2 btnhover2" >

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











































































                      
                    <!-- Appoinment tab  view off anvas  -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="view_appointment" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                        
                            <div class="row p-3 px-lg-5 justify-content-around">
                    
                                <h4 class="mt-5 mb-4 mt-md-0">View Appointment</h4>
                    
                                <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
                                          
                                
                        
                                    <img src="{{asset('images/user-img.png')}}" class="profile_img rounded-circle my-3" alt="img not found">
                        
                                
                           
                    
                                  
                        
                                  </div>
                                  <!-- end of col-3 -->
                    
                               <div class="col-12 col-md-9">
                                   
                                   <!-- <form action="" method="post"> -->
                    
                                <div class="row">
                    
                    
                                <div class="col-md-4 col-lg-3 my-3">
                       
                       <select id="vanimaltype"  class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype">
                         <option value="" disabled  >Select Animal Type...</option>
                         <option value="0">Bull</option>
                         <option value="1">Buffalo</option>
                         <option value="2">Cow</option>
                         <option value="3" >Sheep</option>
                         <option  value="4"> Goat</option>
                       </select>
                       
                     </div>
   
                   <div class="col-md-4 col-lg-3 my-3">
                       
                       <input type="text" name="no_animals" id="vno_animals" class="form-control" placeholder="No Of Animals ">


                     </div>
                     <!-- end of col  -->
   
                 
                   <div class="col-md-4 col-lg-3 my-3">
                       
                       <input type="text" name="contact_person" id="vcontact_person" class="form-control" placeholder="Contact Person Name ">


                     </div>
                     <!-- end of col  -->
   
                   <div class="col-md-4 col-lg-3 my-3">
                       
                       <input type="text" name="contact_no" id="vcontact_no" class="form-control" placeholder="Contact Number ">


                     </div>
                     <!-- end of col  -->

               
                    
                                    
                                          
                                        </div>
                                        <!-- end of row  -->
                    
                    
                                <div class="row">
                    
                                    <h5 class="tcolor my-4">From Address</h5>
                    
                                     
                 
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="faddressline1" id="vfaddresslin1" class="form-control" placeholder="Address Line 1 ">


                    </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="faddressline2" id="vfaddressline2" class="form-control" placeholder="Address Line 2">


                    </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="area" id="vfarea" class="form-control" placeholder="Area ">


                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="vfcity" name="city" class="form-select overflow-scroll  ">
                              <option value="" disabled selected> Select City</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                            
                            </select>
                          </div>
        

                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="startdropdown">
                       
                            <select id="vfstate"  class="form-select overflow-scroll " name="vstate">
                              <option  disabled selected> State</option>
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
                            <select id="vfdistrict" class="form-select overflow-scroll  " name="district">
                              <option value="" disabled selected> District</option>
                              <option value="xyz">XYZ</option>
                              <option value="lmno">LMNO</option>
                              <option value="abcd">ABCD</option>
                            </select>
                          </div>


                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="vftaluka" class="form-select overflow-scroll  " name="vtaluka">
                              <option value="" disbaled selected>Taluka</option>
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                            
                            </select>
                          </div>


                    </div>
                      <!-- end of col  -->
                      
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="vfzipcode" id="vfzipcode" class="form-control" placeholder="Pin Code ">


                    </div>
                                          <!-- end of col  -->
                                          
                                    
                                          
                                          
                                          
                                </div>
                                        <!-- end of row  -->
                                        
                               
                    
                                <div class="row mb-4">
                    
                                    <h5 class="tcolor my-4">To Address</h5>
                                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="taddressline1" id="vtaddressline1" class="form-control" placeholder="Address Line 1 ">
    
    
                    </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="taddressline2" id="vtaddressline2" class="form-control" placeholder="Address Line 2">
    
    
                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="tarea" id="vtarea" class="form-control" placeholder="Area ">
    
    
                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="vtcity" name="vtcity"class="form-select overflow-scroll  ">
                             
                              <option value="" disabled> Select City</option>
                                  <option value="chandigarh" >Chandigarh</option>
                                  <option value="Mumbai">Mumbai</option>
                                  <option value="delhi"> Delhi</option>
                            
                            </select>
                          </div>
        
    
                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="startdropdown">
                       
                            <select id="vtstate" name="vtstate"  class="form-select overflow-scroll ">
                              <option  disabled> State</option>
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
                            <select id="vtdistrict" class="form-select overflow-scroll  " name="vtdistrict">
                              <option value="" disabled > District</option>
                              <option value="xyz"> XYZ</option>
                              <option value="lmno"> LMNO</option>
                              <option value="abc">ABC</option>
                            </select>
                          </div>
    
    
                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="vttaluka" class="form-select overflow-scroll  " name="vttaluka">
                              <option value="">Taluka</option>
                              <option value="Taluka AND">Taluka AND</option>
                                  <option value="Taluka AND">Taluka OR</option>
                                  <option value="Taluka AND">Taluka IF</option>
                            
                            </select>
                          </div>
    
    
                      </div>
                      <!-- end of col  -->
                      
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="vtzipcode" id="vtzipcode" class="form-control" placeholder="Pin Code ">
    
    
                      </div>
                                     
                                    
                                </div>
                                        <!-- end of row  -->
                    
                                        <div class="row justify-content-around">
                    
                                            <h5 class="tcolor my-4">Your Inputs</h5>
                    
                                            <div class="col-md-4 my-3">
                                        
                                                <div class="Districdropdown">
                                                  
                                                    <select id="vstatus" class="form-select overflow-scroll  ">
                                                      <option value=""  >Appointment Status</option>
                                                     <option value="0">Confirmed</option>
                                                     <option value="1">Completed</option>
                                                     <option value="2">Cancelled</option>
                                                    
                                                    </select>
                                                  </div>
                                
                            
                                              </div>
                                              <!-- end of col  -->
                                            <div class="col-md-6 my-3">
                                        
                                                <div class="Districdropdown">
                                                   <textarea name="" placeholder="Your Comments" class="form-control" id="vcomment"  rows="4"></textarea>
                                                  </div>
                                
                            
                                              </div>
                                              <!-- end of col  -->
                    
                                        </div>
                                        
                               
                    

                                   
                    
                               </div>
                               <!-- end of col  -->
                            
                            </div>
                            <!-- end of row  -->
                    
                    
                        
                        
                                            </div>
                      </div>
                      <!-- end offcanvas  -->

       @endsection
@section('script')
<script src="//s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    
    <script src="{{asset('js/calander.js')}}" type="text/javascript"></script>



<script>
function editdetail(id){
  $.ajax({

    type:'POST',
    url:"{{url('/transport/booking/detail')}}"+ '/'+id,
    data:{_token: "{{ csrf_token() }}"},
  success:function(data) {

        console.log(data);
        document.getElementById('appointmentid').value=data.trans.id;
        document.getElementById('eanimaltype').value=data.trans.animal_type;
        document.getElementById('status').value=data.trans.status;
         document.getElementById('eno_animals').value=data.trans.no_of_animal;
         document.getElementById('comment').value=data.trans.comment;
       // document.getElementById('ebreed').value=data.trans.breed;
        document.getElementById('econtact_person').value=data.trans.contact_name;
        document.getElementById('econtact_no').value=data.trans.contact_no;
       // document.getElementById('date_transport').value=data.trans.date_of_transport;
        document.getElementById('efaddressline1').value=data.fromaddress.address_line1;
        document.getElementById('efaddressline2').value=data.fromaddress.address_line2;
        document.getElementById('efarea').value=data.fromaddress.area;
        document.getElementById('efcity').value=data.fromaddress.city;
        document.getElementById('efdistrict').value=data.fromaddress.district;
        document.getElementById('efstate').value=data.fromaddress.state;
        document.getElementById('eftaluka').value=data.fromaddress.taluka;
        document.getElementById('efzipcode').value=data.fromaddress.zipcode;
        // document.getElementById('eappoint_date').value=data.fromaddress.appointment_date;
        // document.getElementById('eappont_time').value=data.fromaddress.appointment_time;
      

        document.getElementById('teaddressline1').value=data.toaddress.address_line1;
        document.getElementById('teaddressline2').value=data.toaddress.address_line2;
        document.getElementById('tearea').value=data.toaddress.area;
        document.getElementById('tecity').value=data.toaddress.city;
        document.getElementById('etdistrict').value=data.toaddress.district;
        document.getElementById('etstate').value=data.toaddress.state;
        document.getElementById('ettaluka').value=data.toaddress.taluka;
        document.getElementById('etzipcode').value=data.toaddress.zipcode;
        // document.getElementById('etappoint_date').value=data.toaddress.appointment_date;
        // document.getElementById('etappoint_time').value=data.toaddress.appointment_time;

    }
  });

}


function viewdetail(id){
  $.ajax({

    type:'POST',
    url:"{{url('/transport/booking/detail')}}"+ '/'+id,
    data:{_token: "{{ csrf_token() }}"},
  success:function(data) {

        console.log(data);
       
        document.getElementById('vanimaltype').value=data.trans.animal_type;
        document.getElementById('vstatus').value=data.trans.status;
         document.getElementById('vno_animals').value=data.trans.no_of_animal;
      
        document.getElementById('vcontact_person').value=data.trans.contact_name;
        document.getElementById('vcontact_no').value=data.trans.contact_no;
        document.getElementById('vcomment').value=data.trans.comment;
      //  // document.getElementById('date_transport').value=data.trans.date_of_transport;
        document.getElementById('vfaddresslin1').value=data.fromaddress.address_line1;
        document.getElementById('vfaddressline2').value=data.fromaddress.address_line2;
        document.getElementById('vfarea').value=data.fromaddress.area;
        document.getElementById('vfcity').value=data.fromaddress.city;
        document.getElementById('vfdistrict').value=data.fromaddress.district;
        document.getElementById('vfstate').value=data.fromaddress.state;
        document.getElementById('vftaluka').value=data.fromaddress.taluka;
        document.getElementById('vfzipcode').value=data.fromaddress.zipcode;
       
        document.getElementById('vtaddressline1').value=data.toaddress.address_line1;
        document.getElementById('vtaddressline2').value=data.toaddress.address_line2;
        document.getElementById('vtarea').value=data.toaddress.area;
        document.getElementById('vtcity').value=data.toaddress.city;
        document.getElementById('vtdistrict').value=data.toaddress.district;
        document.getElementById('vtstate').value=data.toaddress.state;
        document.getElementById('vttaluka').value=data.toaddress.taluka;
        document.getElementById('vtzipcode').value=data.toaddress.zipcode;
        


    }
  });

}
</script>
@endsection