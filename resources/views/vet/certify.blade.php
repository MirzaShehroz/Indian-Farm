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
                                      
                                      @forelse($details as $detail)
                                      <tr>
                                        <td scope="row">{{$detail->contact_name}}</td>
                                       
                                   
                                        <td>{{$detail->contact_no}}</td>
                                        <td>{{appoint_address($detail->appointment_address_id)->city}}</td>
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
                                        @if($detail->certified_status==0)
                                        <td>Non Certified</td>
                                        @elseif($detail->status==1)
                                        <td>Certified</td>
                                       
                                        @endif

                                        
                                        
                                      
                                   
                                      
                                        <td class="d-flex justify-content-around">
                                            <button class="bg_danger text-light me-2 p-1"  data-bs-toggle="offcanvas" data-bs-target="#edit_certified" aria-controls="edit_certified" type="button" onclick="editdetail({{$detail->id}})"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="bg_danger text-light me-2 p-1" data-bs-toggle="offcanvas" data-bs-target="#view_certified" aria-controls="view_certified" type="button" onclick="viewdetail({{$detail->id}})"><i class="fas fa-eye"></i></button>
                                         
                                        </td>
                                      </tr>
                                     
                                      @empty
                                      no data
                                      @endforelse
                                     
                                    
                                    </tbody>
                                  </table>


                            </div>
                            <!-- end of col  -->

                        </div>

     <div class="row mt-5 justify-content-around ext-centert">

                            <div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">
                        
                              <!-- <nav aria-label="Page navigation example">
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
                              </nav> -->
                              {{ $details->render("pagination::bootstrap-4") }}
                        
                            </div>
                            <!-- end of col  -->
                        
                        
                          </div>











                              <!-- certify Animal edit -->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_certified" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                        
        <div class="row p-3 px-lg-5 justify-content-around">

            <h4 class="mt-5 mb-4 mt-md-0">Edit Certified</h4>

            <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
                      
            
    
                <img src="{{asset('images/user-img.png')}}" class="profile_img rounded-circle my-3" alt="img not found">
    
            
       

              
    
              </div>
              <!-- end of col-3 -->

           <div class="col-12 col-md-9">
               
               <form action="{{url('cerify/update/detail')}}" method="post">
                 @csrf
                  <input name="certify_id" id="certifyid" type="hidden" >
            <div class="row">

@if($errors->any())
@foreach($errors->all() as $error)
<div class="text-danger">{{$error}}</div>
@endforeach
@endif
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
                        
                        <input type="text" name="no_animal" id="eno_animal" class="form-control" placeholder="No Of Animals ">


                      </div>
                      <!-- end of col  -->
    
                  
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="breed" id="ebreed" class="form-control" placeholder="Breed">


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

              

                 
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="address_line1" id="eaddressline1" class="form-control" placeholder="Address Line 1 ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="address_line2" id="eaddressline2" class="form-control" placeholder="Address Line 2">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="area" id="earea" class="form-control" placeholder="Area ">


                      </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="ecity" name="city" class="form-select overflow-scroll  ">
                              <option value="" disabled> Select City</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                              <option value="pune"> Pune</option>
                              <option value="goa">Goa</option>
                              <option value="delhi"> Delhi</option>
                             
                            
                            </select>
                          </div>
        

                      </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="startdropdown">
                       
                            <select id="estate" name="state" class="form-select overflow-scroll ">
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
                            <select id="edistrict" name="district" class="form-select overflow-scroll  ">
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
                            <select id="etaluka" name="taluka" class="form-select overflow-scroll  ">
                              <option value="" disbaled>Taluka</option>
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka OR">Taluka OR</option>
                              <option value="Taluka IF">Taluka IF</option>
                             
                            
                            </select>
                          </div>


                      </div>
                      <!-- end of col  -->
                      
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="zipcode" id="ezipcode" class="form-control" placeholder="Pin Code ">


                      </div>
                      <!-- end of col  -->


                      <div class="col-md-5 my-3">
                    
                        <div class="Districdropdown" >
                           <textarea name="description" id="edescription" placeholder="Description" class="form-control" id=""  rows="3"></textarea>
                          </div>
        
    
                      </div>
                      <!-- end of col  -->
                      
                
                      
                      
                      
                    </div>
                    <!-- end of row  -->
                    
           
                    <div class="row justify-content-around">

                        <h5 class="tcolor my-4">Your Inputs</h5>

                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                              
                                <select id="ecertify" name="certify" class="form-select overflow-scroll  ">
                                  <option value="" selected disabled>Certification Status</option>
                                 <option value="1">Certified</option>
                                 <option value="0">Not Certified  </option>
                               
                                
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->
                        <div class="col-md-6 my-3">
                    
                            <div class="Districdropdown">
                               <textarea name="comment" placeholder="Your Comments" class="form-control" id="ecomment"  rows="4"></textarea>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->

                    </div>
                    
           

                    <div class="row justify-content-around mt-5 text-center">

                        <div class="col-12">

                            <button id="submitbtn" type="submit" class="btn btnsubmit bg_danger rounded-pill px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
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


                      <!-- view Cerified -->
                      <div class="offcanvas offcanvas-end" tabindex="-1" id="view_certified" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                        
        <div class="row p-3 px-lg-5 justify-content-around">

            <h4 class="mt-5 mb-4 mt-md-0">View Certified</h4>

            <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
                      
            
    
                <img src="{{asset('images/user-img.png')}}" class="profile_img rounded-circle my-3" alt="img not found">
    
            
       

              
    
              </div>
              <!-- end of col-3 -->

           <div class="col-12 col-md-9">
               
               <form action="" method="post">

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
                        
                        <input type="text" name="no_animal" id="vno_animal" class="form-control" placeholder="No Of Animals ">


                      </div>
                      <!-- end of col  -->
    
                  
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="breed" id="vbreed" class="form-control" placeholder="Breed">


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

              

                 
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="address_line1" id="vaddressline1" class="form-control" placeholder="Address Line 1 ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="address_line2" id="vaddressline2" class="form-control" placeholder="Address Line 2">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="area" id="varea" class="form-control" placeholder="Area ">


                      </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="vcity" name="city" class="form-select overflow-scroll  ">
                              <option value="" disabled> Select City</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                              <option value="pune"> Pune</option>
                              <option value="goa">Goa</option>
                              <option value="delhi"> Delhi</option>
                             
                            
                            </select>
                          </div>
        

                      </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="startdropdown">
                       
                            <select id="vstate" name="state" class="form-select overflow-scroll ">
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
                            <select id="vdistrict" name="district" class="form-select overflow-scroll  ">
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
                            <select id="vtaluka" name="taluka" class="form-select overflow-scroll  ">
                              <option value="" disbaled>Taluka</option>
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka OR">Taluka OR</option>
                              <option value="Taluka IF">Taluka IF</option>
                             
                            
                            </select>
                          </div>


                      </div>
                      <!-- end of col  -->
                      
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="zipcode" id="vzipcode" class="form-control" placeholder="Pin Code ">


                      </div>
                      <!-- end of col  -->


                      <div class="col-md-5 my-3">
                    
                        <div class="Districdropdown" >
                           <textarea name="description" id="vdescription" placeholder="Description" class="form-control" id=""  rows="3"></textarea>
                          </div>
        
    
                      </div>
                      <!-- end of col  -->
                      
                
                      
                      
                      
                    </div>
                    <!-- end of row  -->
                    
           
                    <div class="row justify-content-around">

                        <h5 class="tcolor my-4">Your Inputs</h5>

                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                              
                                <select id="vcertify" name="certify" class="form-select overflow-scroll  ">
                                  <option value="" selected disabled>Certification Status</option>
                                 <option value="1">Certified</option>
                                 <option value="0">Not Certified  </option>
                               
                                
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->
                        <div class="col-md-6 my-3">
                    
                            <div class="Districdropdown">
                               <textarea name="comment" placeholder="Your Comments" class="form-control" id="vcomment"  rows="4"></textarea>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->

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



<script>
function editdetail(id){
  $.ajax({

    type:'POST',
    url:"{{url('/certify/appointment')}}"+ '/'+id,
    data:{_token: "{{ csrf_token() }}"},
  success:function(data) {

      // console.log(data);
        document.getElementById('certifyid').value=data.certify.id;
        document.getElementById('eanimaltype').value=data.certify.animal_type;
        document.getElementById('ecertify').value=data.certify.certified_status;
        document.getElementById('eno_animal').value=data.certify.no_of_animal;
        document.getElementById('ebreed').value=data.certify.breed;
        document.getElementById('edescription').value=data.certify.description;
        document.getElementById('ecomment').value=data.certify.comment;
        document.getElementById('econtact_person').value=data.certify.contact_name;
        document.getElementById('econtact_no').value=data.certify.contact_no;
        document.getElementById('eaddressline1').value=data.address.address_line1;
        document.getElementById('eaddressline2').value=data.address.address_line2;
        document.getElementById('earea').value=data.address.area;
        document.getElementById('ecity').value=data.address.city;
        document.getElementById('edistrict').value=data.address.district;
        document.getElementById('estate').value=data.address.state;
        document.getElementById('etaluka').value=data.address.taluka;
        document.getElementById('ezipcode').value=data.address.zipcode;
      
      


    }
  });

}




function viewdetail(id){
  $.ajax({

    type:'POST',
    url:"{{url('/certify/appointment')}}"+ '/'+id,
    data:{_token: "{{ csrf_token() }}"},
  success:function(data) {

       // console.log(data);
       
        document.getElementById('vanimaltype').value=data.certify.animal_type;
        document.getElementById('vcertify').value=data.certify.certified_status;
        document.getElementById('vno_animal').value=data.certify.no_of_animal;
        document.getElementById('vbreed').value=data.certify.breed;
        document.getElementById('vdescription').value=data.certify.description;
        document.getElementById('vcomment').value=data.certify.comment;
        document.getElementById('vcontact_person').value=data.certify.contact_name;
        document.getElementById('vcontact_no').value=data.certify.contact_no;
        document.getElementById('vaddressline1').value=data.address.address_line1;
        document.getElementById('vaddressline2').value=data.address.address_line2;
        document.getElementById('varea').value=data.address.area;
        document.getElementById('vcity').value=data.address.city;
        document.getElementById('vdistrict').value=data.address.district;
        document.getElementById('vstate').value=data.address.state;
        document.getElementById('vtaluka').value=data.address.taluka;
        document.getElementById('vzipcode').value=data.address.zipcode;
        


    }
  });

}
</script>
@endsection