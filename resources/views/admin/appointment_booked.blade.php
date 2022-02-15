@extends('app.dashboard')
@section('title','Appointment Booked')
       @section('pill')
       <div class="px-4 pt-4 position-relative" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings2-tab">

<div class="row">

    <form action="{{url('search/appointment')}}" method="GET">

    <div class="col-12 d-md-flex mt-3">

        <!-- <input type="text" name="animal" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Animal   " id=""> -->
        <select id="animaltype"  class="me-3 border ps-2 mb-3 py-2 inputs1"  name="animal">
                           <option value="" disabled  selected>Select Animal Type...</option>
                           <option value="0">Bull</option>
                           <option value="1">Buffalo</option>
                           <option value="2">cow</option>
                           <option value="3" >Sheep</option>
                           <option  value="4"> Goat</option>
          </select>
        
        <input type="text" name="vet" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Vet" id="">
        <input type="text" name="city" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By City" id="">
        <input type="text" name="state" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By State" id="">
        <input type="text" name="district" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By District " id="">
        <input type="text" name="taluka" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Taluka" id="">

     
        
    </div>
    <!-- end of col  -->

    <div class="col-12 mt-3">

    <button class="bg_danger px-5 py-2 rounded-pill text-light " type="submit" name="submit">Search</button>
    </form>
    </div>
   <!-- end of col   -->

   <div class="col-12 mt-4">

  <div class="text-end d-flex d-md-block ">
    <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas" data-bs-target="#add_appointment" aria-controls="add_appointment" type="button">
        Add A Appoinment
    </button>
    <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
        Export TO CSV
    </button>

  </div>

    <div class="col-12 overflow-scroll mt-5">

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">User Id </th>
                <th scope="col">First Name</th>
               
                <th scope="col">Farm Name</th>
        
                <th scope="col">Contact No </th>
             
              
              
                <th scope="col">Email Id</th>
                <th scope="col">Farm Owner </th>
                <th scope="col">Animal Type</th>
                <th scope="col">Breed</th>
               
                <th scope="col">Address Line 1</th>
                <th scope="col">Address Line 2</th>
               
             
                <th scope="col">Area</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">District</th>
                <th scope="col">Taluka</th>
                <th scope="col">Pincode</th>
                <th scope="col">Vet Assigned</th>
                <th scope="col">Appoinment Status</th>
               
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @if($appointment!=null)
              @foreach($appointment as $appoint)
              <tr>
                
                <td>{{$appoint->user_id}}</td>
                <td>{{$appoint->contact_name}}</td>
                <td>1</td>
                <td>{{$appoint->contact_no}}</td>
                <td>1</td>
               
                <td>1</td>
                
                @if($appoint->animal_type==0)
                <td>Bull</td>
                @elseif($appoint->animal_type==1)
                <td>Buffalo</td>
                @elseif($appoint->animal_type==2)
                <td>Cow</td>
                @elseif($appoint->animal_type==3)
                <td>Sheep</td>
                @elseif($appoint->animal_type==4)
                <td>Goat</td>
                @endif
                <td>{{$appoint->breed}}</td>
                <td>{{$appoint->address_line1}}</td>
                <td>{{$appoint->address_line2}}</td>
           
                <td>{{$appoint->area}}</td>
                <td>{{$appoint->city}}</td>
                <td>{{$appoint->state}}</td>
                <td>{{$appoint->district}}</td>
                <td>{{$appoint->taluka}}</td>
                <td>{{$appoint->zipcode}}</td>
                <td>{{$appoint->vet_id}}</td>
                
                <td>{{$appoint->status}}</td>
           
              
                <td class="d-flex">
                    <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment" aria-controls="edit_appointment" type="button" onclick="getdata({{getappoint($appoint->id)}})" ><i  class="fas fa-pencil-alt"></i></button>
                    <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_appointment" aria-controls="view_appointment" type="button" onclick="getdata({{getappoint($appoint->id)}})" ><i class="fas fa-eye"></i></button>
                    <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal5" type="button" onclick="deleteappoint({{getappoint($appoint->id)}})"><i class="far fa-trash-alt"></i></button>
                </td>
              </tr>




              @endforeach
              @else
              No data
              @endif
             
            
            </tbody>
          </table>


    </div>
    <!-- end of col  -->

</div>
<!-- end of col  -->

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
  <!-- end of row paggi  -->
  

</form>
<!-- end of from  -->





</div>
<!-- end of row  -->










</div>


<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('delete/appointment')}}" method="post">
          @csrf
        <div class="modal-body text-center p-4">
          <p class="fw-bold text-secondary">Are You sure to Delete this Appoinment </p>
        </div>
        <div class="modal-foote d-flex">
          <input type="hidden" name="id" id="id">
         <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">No</button></a> 
         <a href="#" class="text-decoration-none col-6"><button type="submit" class="btn border form-control btnhover">Yes</button></a> 
         </form>
        </div>
      </div>
    </div>
</div>


   <!-- Appoinment tab  add off anvas  -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="add_appointment" aria-labelledby="offcanvasRightLabel " style="width:90%">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-danger">{{$error}}<br></div>
@endforeach
@endif    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                           <div class="row pad-50 p-2 px-lg-5 justify-content-around">

                            <h4 class="mt-5 mb-4 mt-md-0">Add Appoinment</h4>

                            <div class="col-12">
                                
                <form action="{{url('add/appointments')}}" method="post">
                     @csrf  
                            <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                        
                         <select id="animaltype"  class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype">
                           <option value="" disabled  selected>Select Animal Type...</option>
                           <option value="0">Bull</option>
                           <option value="1">Buffalo</option>
                           <option value="2">cow</option>
                           <option value="3" >Sheep</option>
                           <option  value="4"> Goat</option>
                         </select>
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" id="" class="form-control" placeholder="No Of Animals " name="no_animal">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="breed" id="" class="form-control" placeholder="Breed" >
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="personname" id="" class="form-control" placeholder="Contact Person Name ">
 
 
                       </div>
                       <!-- end of col  -->
     
                       
                     </div>
                     <!-- end of row  -->
 
 
                    <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                   
                         <input type="text" name="mobileno" id="" class="form-control" placeholder="Contact Number">
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="addressline1" id="" class="form-control" placeholder="Address Line 1 ">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="addressline2" id="" class="form-control" placeholder="Address Line 2">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="area" id="" class="form-control" placeholder="Area ">
 
 
                       </div>
                       <!-- end of col  -->
                       
                       
                       
                     </div>
                     <!-- end of row  -->
                     
                  <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                   
                         <div class="Districdropdown">
                             <select id="inputDistrict" class="form-select overflow-scroll  " name="city">
                               <option value="">Select City</option>
                               <option value="delhi">Delhi</option>
                               <option value="mumbai">Mumbai</option>
                             
                             </select>
                           </div>
         
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <div class="startdropdown">
                        
                             <select id="inputState"  class="form-select overflow-scroll " name="state">
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
                             <select id="district" class="form-select overflow-scroll" name="district">
                               <option value="">Select  District</option>
                               <option value=" abcs"> abcs</option>
                               <option value="xyzs"> xyzs</option>
                               <option value=" lmno"> lmno</option>
                             
                             </select>
                           </div>
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <div class="Districdropdown">
                             <select id="inputTaluka" class="form-select overflow-scroll  " name="taluka">
                               <option value="">Select Taluka</option>
                               <option value=" abcs">Taluka abcs</option>
                               <option value="xyzs"> Taluka xyzs</option>
                               <option value=" lmno">Taluka lmno</option>
                             
                             </select>
                           </div>
 
 
                       </div>
                       <!-- end of col  -->
                       
 
                       
                     </div>
                     <!-- end of row  -->
 
 
                       <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                   
                              <input type="text" name="zipcode" id="" class="form-control" placeholder="Pin Code" >
         
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                        <input type="date" name="appoint_date" id="" class="form-control" placeholder="Appointment Date">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="time" name="appoint_time"  id="" class="form-control" placeholder="Appointment Time">
 
                       </div>
                       <!-- end of col  -->
     
                                       
 
                       
                     </div>
                     <!-- end of row  -->
 
                     <div class="row justify-content-around mt-3 text-center">
 
                         <div class="col-12 col-md-6 text-start pb-5">
                             <label for="price" class="form-label tcolor fw-bold">Comments</label>
                             <br>
                             <textarea name="comment" placeholder="   Comments" class="comment form-control" id="" rows="5"></textarea>
                             
                            </div>
                            <!-- end of col  -->
                            
                            <div class="row">
                                
                                <div class="col-12 col-md-4 mt-3">
                                    
                                    <div class="Districdropdown">
                                        <select id="assignvet" class="form-select overflow-scroll  " name="vet_assign">
                                            <option value="" disabled selected> Vet Assigned </option>
                                            <option value="1">Vet A </option>
                                            <option value="2">Vet B</option>
                                            <option value="3">Vet C</option>
                                            
                                        </select>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-12 col-md-4 mt-3">
                                    
                                    <div class="Districdropdown">
                                        <select id="appointstatus" class="form-select overflow-scroll  ">
                                            <option value="" disabled >Appointment Status </option>
                                            <option value="0">Done</option>
                                            <option value="1">Pending</option>
                                            <option value="2">In Process</option>
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="col-12 col-md-4 mt-3">
                                    
                                    <textarea name="comment" placeholder="   Comments By Vet..." class="comment form-control" id="vet_comment" rows="5"></textarea>
                                    
                                </div>
                                
                             
                                
                            </div>
                            
                         <div class="col-12 mt-4">
 
                             <button id="submitbtn" type="submit" class="btn rounded-pill btnsubmit bg_danger textli px-5 text-light border_color2 py-2 btnhover2">
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
                      <!-- end offcanvas  -->


                    <!-- Appoinment tab  view off anvas  -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="view_appointment" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                           <div class="row pad-50 p-2 px-lg-5 justify-content-around">

                      <h4 class="mt-5 mb-4 mt-md-0">View Appoinment</h4>
                      <div class="col-12">
                                
                                <form action="{{url('update/appointment')}}" method="post">
                                 @csrf
                                                  <div class="row">
                       
                                  <input type="hidden" name="appoint_id" id="appoint_id" >
                                  <input type="hidden" name="address_id" id="address_id">
                                           <div class="col-md-4 col-lg-3 my-3">
                                              
                                               <select id="vanimaltype"  class="form-select"  name="animaltype" disabled>
                                               <option value="" disabled >Select Animal Type...</option>
                                                 <option value="0">Bull</option>
                                                 <option value="1">Buffalo</option>
                                                 <option value="2">cow</option>
                                                 <option value="3" >Sheep</option>
                                                 <option  value="4"> Goat</option>
                                               </select>
                                               
                                             </div>
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <input type="text" name="no_animal" id="vno_animal" class="form-control" placeholder="No Of Animals " disabled>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <input type="text" name="breed" id="vbreed" class="form-control" placeholder="Breed" disabled>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <input type="text" name="personname" id="vpersonname" class="form-control" placeholder="Contact Person Name " disabled>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                           
                                             
                                           </div>
                                           <!-- end of row  -->
                       
                       
                                   <div class="row">
                       
                       
                                           <div class="col-md-4 col-lg-3 my-3">
                                         
                                               <input type="text" name="mobileno" id="vmobileno" class="form-control" placeholder="Contact Number" disabled>
                                               
                                             </div>
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <input type="text" name="addressline1" id="vaddressline1" class="form-control" placeholder="Address Line 1 " disabled>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <input type="text" name="addressline2" id="vaddressline2" class="form-control" placeholder="Address Line 2" disabled>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <input type="text" name="area" id="varea" class="form-control" placeholder="Area " disabled>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                                             
                                             
                                             
                                           </div>
                                           <!-- end of row  -->
                                           
                                   <div class="row">
                       
                       
                                           <div class="col-md-4 col-lg-3 my-3">
                                         
                                               <div class="Districdropdown">
                                                   <select id="vcity" class="form-select overflow-scroll  " name="city" disabled>
                                                     <option value="" disabled>Select City</option>
                                                     <option value="delhi">Delhi</option>
                                                     <option value="mumbai">Mumbai</option>
                                                   
                                                    
                                                   
                                                   </select>
                                                 </div>
                               
                                               
                                             </div>
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <div class="startdropdown">
                                              
                                                   <select id="vstate"  class="form-select overflow-scroll " name="state" disabled>
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
                                                   <select id="vdistrict" class="form-select overflow-scroll" name="district" disabled>
                                                     <option value="" disabled>Select  District</option>
                                                     <option value=" abcs"> abcs</option>
                                                     <option value="xyzs"> xyzs</option>
                                                     <option value=" lmno"> lmno</option>
                                                    
                                                   
                                                   </select>
                                                 </div>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <div class="Districdropdown">
                                                   <select id="vtaluka" class="form-select overflow-scroll  " name="taluka" disabled>
                                                   <option value="" disabled>Select Taluka</option>
                                                     <option value=" abcs">Taluka abcs</option>
                                                     <option value="xyzs"> Taluka xyzs</option>
                                                     <option value=" lmno">Taluka lmno</option>
                                                    
                                                   
                                                   </select>
                                                 </div>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                                             
                       
                                             
                                           </div>
                                           <!-- end of row  -->
                       
                       
                                   <div class="row">
                       
                       
                                           <div class="col-md-4 col-lg-3 my-3">
                                         
                                                    <input type="text" name="zipcode" id="vzipcode" class="form-control" placeholder="Pin Code" disabled>
                               
                                               
                                             </div>
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                              <input type="date" name="appoint_date" id="vappoint_date" class="form-control" placeholder="Appointment Date" disabled>
                       
                       
                                             </div>
                                             <!-- end of col  -->
                           
                                           <div class="col-md-4 col-lg-3 my-3">
                                               
                                               <input type="time" name="appoint_time"  id="vappoint_time" class="form-control" placeholder="Appointment Time" disabled>
                       
                                             </div>
                                             <!-- end of col  -->
                           
                                                             
                       
                                             
                                           </div>
                                           <!-- end of row  -->
                       
                                           <div class="row justify-content-around mt-3 text-center">
                       
                                               <div class="col-12 col-md-6 text-start pb-5">
                                                   <label for="price" class="form-label tcolor fw-bold">Comments</label>
                                                   <br>
                                                   <textarea name="comment" placeholder="Comments" class="comment form-control" id="vcomment" rows="5" disabled></textarea>
                                                   
                                                  </div>
                                                  <!-- end of col  -->
                                                  
                                                  <div class="row">
                                                      
                                                      <div class="col-12 col-md-4 mt-3">
                                                          
                                                          <div class="Districdropdown">
                                                              <select id="vassignvet" class="form-select overflow-scroll " name="assignvet" disabled>
                                                              <option value="" disabled> Vet Assigned </option>
                                                                  <option value="1">Vet A </option>
                                                                  <option value="2">Vet B</option>
                                                                  <option value="3">Vet C</option>
                                                                  
                                                              </select>
                                                          </div>
                                                          
                                                      </div>
                                                      
                                                      <div class="col-12 col-md-4 mt-3">
                                                          
                                                          <div class="Districdropdown">
                                                              <select id="vappointstatus" class="form-select overflow-scroll  " name="appoint_status" disabled>
                                                                  <option value="" disabled >Appointment Status </option>
                                                                  <option value="0">Done</option>
                                                                  <option value="1">Pending</option>
                                                                  <option value="2">In Process</option>
                                                              </select>
                                                          </div>
                                                          
                                                      </div>
                      
                                                      <div class="col-12 col-md-4 mt-3">
                                                          
                                                          <textarea name="vet_comment" id="vvet_comment" placeholder="   Comments By Vet..." class="comment form-control" id="" rows="5" disabled></textarea>
                                                          
                                                      </div>
                                                      
                                                   
                                                      
                                                  </div>
                                                  
                                               <div class="col-12 mt-4">
                       
                                                   <button id="submitbtn" type="submit" class="btn rounded-pill btnsubmit bg_danger textli px-5 text-light border_color2 py-2 btnhover2">
                                                       Submit
                                                   </button>
                       
                       
                                               </div>
                                               <!-- end of col  -->
                       
                                           </div>
                      
                 </form>
 
            </div>
            <!-- end of col  -->
         
         </div>
         <!-- end of row  -->
 
                      
    
    
                        </div>
                      </div>
                      <!-- end offcanvas  -->








                      <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_appointment" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                           <div class="row pad-50 p-2 px-lg-5 justify-content-around">

                            <h4 class="mt-5 mb-4 mt-md-0">Edit Appoinment</h4>

                            <div class="col-12">
                                
          <form action="{{url('update/appointment')}}" method="post">
           @csrf
                            <div class="row">
 
            
                     <div class="col-md-4 col-lg-3 my-3">
                        
                         <select id="animaltype"  class="form-select"  name="animaltype">
                         <option value="" disabled >Select Animal Type...</option>
                           <option value="0">Bull</option>
                           <option value="1">Buffalo</option>
                           <option value="2">cow</option>
                           <option value="3" >Sheep</option>
                           <option  value="4"> Goat</option>
                         </select>
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="no_animal" id="no_animal" class="form-control" placeholder="No Of Animals ">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="breed" id="breed" class="form-control" placeholder="Breed">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="personname" id="personname" class="form-control" placeholder="Contact Person Name ">
 
 
                       </div>
                       <!-- end of col  -->
     
                       
                     </div>
                     <!-- end of row  -->
 
 
             <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                   
                         <input type="text" name="mobileno" id="mobileno" class="form-control" placeholder="Contact Number">
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="addressline1" id="addressline1" class="form-control" placeholder="Address Line 1 ">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="addressline2" id="addressline2" class="form-control" placeholder="Address Line 2">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="area" id="area" class="form-control" placeholder="Area ">
 
 
                       </div>
                       <!-- end of col  -->
                       
                       
                       
                     </div>
                     <!-- end of row  -->
                     
             <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                   
                         <div class="Districdropdown">
                             <select id="city" class="form-select overflow-scroll  " name="city">
                               <option value="" disabled>Select City</option>
                               <option value="delhi">Delhi</option>
                               <option value="mumbai">Mumbai</option>
                             
                              
                             
                             </select>
                           </div>
         
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <div class="startdropdown">
                        
                             <select id="state"  class="form-select overflow-scroll " name="state">
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
                             <select id="district" class="form-select overflow-scroll" name="district">
                               <option value="" disabled>Select  District</option>
                               <option value=" abcs"> abcs</option>
                               <option value="xyzs"> xyzs</option>
                               <option value=" lmno"> lmno</option>
                              
                             
                             </select>
                           </div>
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <div class="Districdropdown">
                             <select id="taluka" class="form-select overflow-scroll  " name="taluka">
                             <option value="">Select Taluka</option>
                               <option value=" abcs">Taluka abcs</option>
                               <option value="xyzs"> Taluka xyzs</option>
                               <option value=" lmno">Taluka lmno</option>
                              
                             
                             </select>
                           </div>
 
 
                       </div>
                       <!-- end of col  -->
                       
 
                       
                     </div>
                     <!-- end of row  -->
 
 
             <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                   
                              <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Pin Code">
         
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                        <input type="date" name="appoint_date" id="appoint_date" class="form-control" placeholder="Appointment Date">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="time" name="appoint_time"  id="appoint_time" class="form-control" placeholder="Appointment Time">
 
                       </div>
                       <!-- end of col  -->
     
                                       
 
                       
                     </div>
                     <!-- end of row  -->
 
                     <div class="row justify-content-around mt-3 text-center">
 
                         <div class="col-12 col-md-6 text-start pb-5">
                             <label for="price" class="form-label tcolor fw-bold">Comments</label>
                             <br>
                             <textarea name="comment" placeholder="Comments" class="comment form-control" id="comment" rows="5"></textarea>
                             
                            </div>
                            <!-- end of col  -->
                            
                            <div class="row">
                                
                                <div class="col-12 col-md-4 mt-3">
                                    
                                    <div class="Districdropdown">
                                        <select id="assignvet" class="form-select overflow-scroll " name="assignvet">
                                        <option value="" disabled> Vet Assigned </option>
                                            <option value="1">Vet A </option>
                                            <option value="2">Vet B</option>
                                            <option value="3">Vet C</option>
                                            
                                        </select>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-12 col-md-4 mt-3">
                                    
                                    <div class="Districdropdown">
                                        <select id="appointstatus" class="form-select overflow-scroll  " name="appoint_status">
                                            <option value="" disabled >Appointment Status </option>
                                            <option value="0">Done</option>
                                            <option value="1">Pending</option>
                                            <option value="2">In Process</option>
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="col-12 col-md-4 mt-3">
                                    
                                    <textarea name="vet_comment" id="vet_comment" placeholder="   Comments By Vet..." class="comment form-control" id="" rows="5"></textarea>
                                    
                                </div>
                                
                             
                                
                            </div>
                            
                         <div class="col-12 mt-4">
 
                             <button id="submitbtn" type="submit" class="btn rounded-pill btnsubmit bg_danger textli px-5 text-light border_color2 py-2 btnhover2">
                                 Submit
                             </button>
 
 
                         </div>
                         <!-- end of col  -->
 
                     </div>
                     <!-- end of row  -->
                     <input type="hidden" name="appoint_id" id="appoint_idd">
                     <input type="hidden"  name="address_id" id="address_idd">
            </form>
 
            </div>
            <!-- end of col  -->
         
         </div>
         <!-- end of row  -->
 
                      
    
    
                        </div>
                      </div>
                      <!-- end offcanvas  -->

@endsection

@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
  function getdata(id){
    $.ajax({
               type:'POST',
               url:"{{url('/getappointment/')}}"+ '/'+id,
               data:{_token: "{{ csrf_token() }}"},
               success:function(data) {
                  console.log(data.appoint); 
                  console.log(data.appoint.id ,data.address.id  );  
                  
                  document.getElementById('animaltype').value=data.appoint.animal_type  ; 
                  document.getElementById('no_animal').value= data.appoint.no_of_animal  ;    
                  document.getElementById('breed').value=   data.appoint.breed  ;
                  document.getElementById('personname').value=   data.appoint.contact_name  ;
                  document.getElementById('mobileno').value=   data.appoint.contact_no  ;
                  document.getElementById('addressline1').value=   data.address.address_line1 ;
                  document.getElementById('addressline2').value=   data.address.address_line2  ;
                  document.getElementById('area').value=   data.address.area ;
                  document.getElementById('city').value=   data.address.city  ;
                  document.getElementById('state').value=   data.address.state  ;
                  document.getElementById('district').value=   data.address.district  ;
                  document.getElementById('taluka').value=   data.address.taluka ;
                  document.getElementById('zipcode').value=   data.address.zipcode  ;
                  document.getElementById('appoint_date').value=   data.appoint.appointment_date  ;
                  document.getElementById('appoint_time').value=   data.appoint.appointment_time  ;
                  document.getElementById('assignvet').value=   data.appoint.vet_id ;
                  document.getElementById('appoint_idd').value=data.appoint.id ;
                  document.getElementById('address_idd').value=data.address.id ;
                  if(data.appoint.vet_comment==null){
                    document.getElementById('vet_comment').value= '' ;
                  }
                  else{
                    document.getElementById('vet_comment').value= data.appoint.vet_comment ;
                  }
                 
                  document.getElementById('appointstatus').value=   data.appoint.status ;
                                 



                  document.getElementById('vanimaltype').value=data.appoint.animal_type  ; 
                  document.getElementById('vno_animal').value= data.appoint.no_of_animal  ;    
                  document.getElementById('vbreed').value=   data.appoint.breed  ;
                  document.getElementById('vpersonname').value=   data.appoint.contact_name  ;
                  document.getElementById('vmobileno').value=   data.appoint.contact_no  ;
                  document.getElementById('vaddressline1').value=   data.address.address_line1 ;
                  document.getElementById('vaddressline2').value=   data.address.address_line2  ;
                  document.getElementById('varea').value=   data.address.area ;
                  document.getElementById('vcity').value=   data.address.city  ;
                  document.getElementById('vstate').value=   data.address.state  ;
                  document.getElementById('vdistrict').value=   data.address.district  ;
                  document.getElementById('vtaluka').value=   data.address.taluka ;
                  document.getElementById('vzipcode').value=   data.address.zipcode  ;
                  document.getElementById('vappoint_date').value=   data.appoint.appointment_date  ;
                  document.getElementById('vappoint_time').value=   data.appoint.appointment_time  ;
                  document.getElementById('vassignvet').value=   data.appoint.vet_id ;
                  // document.getElementById('vappoint_id').value=   data.appoint.id ;
                  // document.getElementById('vaddress_id').value=   data.address.id ;
                  if(data.appoint.vet_comment==null){
                    document.getElementById('vvet_comment').value= '' ;
                  }
                  else{
                    document.getElementById('vvet_comment').value= data.appoint.vet_comment ;
                  }
                 
                  document.getElementById('vappointstatus').value=   data.appoint.status ;               
              }
            });
  }
  function deleteappoint(id){
    document.getElementById('id').value=id;
  }
</script>
@endsection