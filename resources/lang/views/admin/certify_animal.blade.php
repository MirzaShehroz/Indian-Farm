@extends('app.dashboard')
@section('title','Certify Animal')
       @section('pill')
       <div class="px-4 pt-4 position-relative" id="v-pills-settings3" role="tabpanel" aria-labelledby="v-pills-settings3-tab">

<div class="row">

    <form action="" method="">

    <div class="col-12 d-md-flex mt-3">

        <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Animal   " id="">
       
        
        <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Vet" id="">
        <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By City" id="">
        <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By State" id="">
        <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By District " id="">
        <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Taluka" id="">

     
        
    </div>
    <!-- end of col  -->

    <div class="col-12 mt-3">

        <button class="bg_danger px-5 py-2 rounded-pill text-light " name="">Search</button>

    </div>
   <!-- end of col   -->

   <div class="col-12 mt-4">

  <div class="text-end d-flex d-md-block ">
    <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas" data-bs-target="#edit_certified" aria-controls="edit_certified" type="button">
        Add An Appoinment
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
                <th scope="col">No of Animal</th>
               
                <th scope="col">Address Line 1</th>
                <th scope="col">Address Line 2</th>
               
             
                <th scope="col">Area</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">District</th>
                <th scope="col">Taluka</th>
                <th scope="col">Pincode</th>
                <th scope="col">Vet Assigned</th>
                <th scope="col">Certified Status</th>
               
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
           
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
           
              
                <td class="d-flex">
                    <button class="bg_danger text-light me-2"  data-bs-toggle="offcanvas" data-bs-target="#edit_certified" aria-controls="edit_certified" type="button"><i class="fas fa-pencil-alt"></i></button>
                    <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_certified" aria-controls="view_certified"  type="button"><i class="fas fa-eye"></i></button>
                    <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal6"  type="button"><i class="far fa-trash-alt"></i></button>
                </td>
              </tr>
           
             
            
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


  <!-- certified tab  edit off anvas  -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_certified" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                            <h5 id="offcanvasRightLabel">

                            </h5>
                            <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                            
                                <div class="row pad-50 p-2 px-lg-5 justify-content-around">

                                    <h4 class="mt-5 mb-4 mt-md-0">Edit Certify</h4>
        
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
                                 
                                 <input type="text" name="animalsno" id="" class="form-control" placeholder="No Of Animals ">
         
         
                               </div>
                               <!-- end of col  -->
             
                             <div class="col-md-4 col-lg-3 my-3">
                                 
                                 <input type="text" name="Breed" id="" class="form-control" placeholder="Breed">
         
         
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
                               
                               
                               
                             </div>
                             <!-- end of row  -->
                             
                     <div class="row">
         
         
                             <div class="col-md-4 col-lg-3 my-3">
                           
                                 <div class="Districdropdown">
                                     <select id="inputDistrict" class="form-select overflow-scroll  ">
                                       <option value="">City</option>
                                      
                                     
                                     </select>
                                   </div>
                 
                                 
                               </div>
             
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
                                       <option value="">Select Taluka</option>
                                      
                                     
                                     </select>
                                   </div>
         
         
                               </div>
                               <!-- end of col  -->
                               
         
                               
                             </div>
                             <!-- end of row  -->
         
         
                     <div class="row">
         
         
                             <div class="col-md-4 col-lg-3 my-3">
                           
                                      <input type="text" name="pincode" id="" class="form-control" placeholder="Pin Code">
                 
                                 
                               </div>
             
                             <div class="col-md-4 col-lg-3 my-3">
                                 
                                <input type="text" name="pincode" id="" class="form-control" placeholder="Appointment Date">
         
         
                               </div>
                               <!-- end of col  -->
             
                             <div class="col-md-4 col-lg-3 my-3">
                                 
                                 <input type="text" name="vetcontact"  id="" class="form-control" placeholder="Appointment Time">
         
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
                                                <select id="assignvet" class="form-select overflow-scroll  ">
                                                    <option value="" disabled selected> Vet Assigned </option>
                                                    <option value=""></option>
                                                    
                                                </select>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="col-12 col-md-4 mt-3">
                                            
                                            <div class="Districdropdown">
                                                <select id="appointstatus" class="form-select overflow-scroll  ">
                                                    <option value="" disabled selected>Certified Status </option>
                                                    <option value=""></option>
                                                    
                                                </select>
                                            </div>
                                            
                                        </div>
        
                                        <div class="col-12 col-md-4 mt-3">
                                            
                                            <textarea name="comment" placeholder="   Comments By Vet..." class="comment form-control" id="" rows="5"></textarea>
                                            
                                        </div>
                                        
                                     
                                        
                                    </div>
                                    
                                 <div class="col-12 mt-4">
         
                                     <button id="submitbtn" type="button" class="btn rounded-pill btnsubmit bg_danger textli px-5 text-light border_color2 py-2 btnhover2">
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

                            <!-- certified tab  view off anvas  -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="view_certified" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                           <div class="row pad-50 p-2 px-lg-5 justify-content-around">

                            <h4 class="mt-5 mb-4 mt-md-0">View Certify</h4>

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
                         
                         <input type="text" name="animalsno" id="" class="form-control" placeholder="No Of Animals ">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="Breed" id="" class="form-control" placeholder="Breed">
 
 
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
                       
                       
                       
                     </div>
                     <!-- end of row  -->
                     
             <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                   
                         <div class="Districdropdown">
                             <select id="inputDistrict" class="form-select overflow-scroll  ">
                               <option value="">City</option>
                              
                             
                             </select>
                           </div>
         
                         
                       </div>
     
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
                               <option value="">Select Taluka</option>
                              
                             
                             </select>
                           </div>
 
 
                       </div>
                       <!-- end of col  -->
                       
 
                       
                     </div>
                     <!-- end of row  -->
 
 
             <div class="row">
 
 
                     <div class="col-md-4 col-lg-3 my-3">
                   
                              <input type="text" name="pincode" id="" class="form-control" placeholder="Pin Code">
         
                         
                       </div>
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                        <input type="text" name="pincode" id="" class="form-control" placeholder="Appointment Date">
 
 
                       </div>
                       <!-- end of col  -->
     
                     <div class="col-md-4 col-lg-3 my-3">
                         
                         <input type="text" name="vetcontact"  id="" class="form-control" placeholder="Appointment Time">
 
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
                                        <select id="assignvet" class="form-select overflow-scroll  ">
                                            <option value="" disabled selected> Vet Assigned </option>
                                            <option value=""></option>
                                            
                                        </select>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-12 col-md-4 mt-3">
                                    
                                    <div class="Districdropdown">
                                        <select id="appointstatus" class="form-select overflow-scroll  ">
                                            <option value="" disabled selected>Appointment Status </option>
                                            <option value=""></option>
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="col-12 col-md-4 mt-3">
                                    
                                    <textarea name="comment" placeholder="   Comments By Vet..." class="comment form-control" id="" rows="5"></textarea>
                                    
                                </div>
                                
                             
                                
                            </div>
                            
                      
 
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



                      <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-4">
          <p class="fw-bold text-secondary">Are You sure to Delete this Certify </p>
        </div>
        <div class="modal-foote d-flex">
         <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">No</button></a> 
         <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover">Yes</button></a> 
        
        </div>
      </div>
    </div>
  </div>
       @endsection
