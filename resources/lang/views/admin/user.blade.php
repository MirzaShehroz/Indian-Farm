@extends('app.dashboard')
@section('title','Users')
       @section('pill')
        <div class=" px-4 pt-4 position-relative ps-md-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                        <div class="row">

                            <form action="" method="post">

                            <div class="col-12 d-md-flex mt-3">

                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Name" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Contact Number" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search Email id " id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search Area" id="">
                                
                                
                            </div>
                            <!-- end of col  -->

                            <div class="col-12 d-md-flex mt-3">

                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By City" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By State" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By District" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Taluka" id="">

                                <select class="py-2 border" name="" id="">
                                    <option class="" disabled selected>Owner Status</option>
                                    <option class=""  >Owner</option>
                                    <option class="" >Owner Agent</option>
                                  </select>
                                
                                
                            </div>
                            <!-- end of col  -->

                            <div class="col-12 mt-3">

                                <button class="bg_danger px-5 py-2 rounded-pill text-light " name="">Search</button>

                            </div>
                           <!-- end of col   -->

                           <div class="col-12 mt-4">

                          <div class="text-end d-flex d-md-block ">
                            <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1" type="button">
                                Add A User
                            </button>
                            <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
                                Export as CSV
                            </button>

                          </div>

                            <div class="col-12 overflow-scroll mt-5">

                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">User Id </th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Farm Name</th>
                                        <th scope="col">Contact No</th>
                                        <th scope="col">Email Id</th>
                                        <th scope="col">Farm Owner</th>
                                        <th scope="col">Address Line 1</th>
                                        <th scope="col">Address Line 2</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">City</th>
                                        <th scope="col">State</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Taluka</th>
                                        <th scope="col">Pincode</th>
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
                                        <td class="d-flex">
                                            <button class="bg_danger text-light me-2"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1" type="button"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2" type="button"><i class="fas fa-eye"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal1" type="button"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                      </tr>
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
                                        <td class="d-flex">
                                            <button class="bg_danger text-light me-2"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight3" type="button"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2" type="button"><i class="fas fa-eye"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal1" type="button"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                      </tr>
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
                                        <td class="d-flex">
                                            <button class="bg_danger text-light me-2"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1"><i class="fas fa-pencil-alt" type="button"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2"><i class="fas fa-eye" type="button"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal1" type="button"><i class="far fa-trash-alt"></i></button>
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




                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h5 id="offcanvasRightLabel">

                      </h5>
                      <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      
                        <div class="row pad-50 justify-content-around" id="edit_profile">


                            <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
                  
                              <h4 class="border-start border-5 tcolor " style="border-color: #0572B2 !important;">Edit User</h4>
                  
                              <img src="{{asset('images/user-img.png')}}" class="profile_img my-3" alt="img not found">
                  
                          
                              <button type="file" class="bg-transparent border border-light profilebtn btnhover px-3 py-2" style="border-radius: 5px;">Upload Profile Picture</button>
                  
                  
                            </div>
                            <!-- end of col-3 -->
                  
                            <div class="col-12 col-md-7">
                  
                              <form action="" method="post" >
                  
                              <div class="row">
                  
                                <div class="col-12">
                                    
                                    <div class="row">
                                        <label for="fullname" class="form-label fw-bold fs-5">Personal Details</label>

                                        <div class="col-12 col-md-6 mb-3">

                                            <input type="text" class="form-control mb-4" id="fullname" placeholder="Full Name">


                                        </div>
                                        <!-- end of col  -->
                                        
                                        <div class="col-12 col-md-6 mb-3">

                                            <input type="text" class="form-control" id="fullname" placeholder="Farm Name">

                                        </div>
                                        <!-- end of col  -->

                                    </div>
                            
                  
                                </div>
                                <!-- end of inner col  -->
                                <hr class="my-3 bgcolor" style="opacity: 1;">
                  
                                <div class="col-12 d-flex py-2 align-items-center">
                  
                                  <span class="fw-bold me-3"> Owner Status</span>
                  
                                  <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Owner
                                    </label>
                                  </div>
                                  <div class="form-check ms-4">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Agent
                                    </label>
                                  </div>
                  
                  
                                </div>
                                <!-- end of col  -->
                                <hr class="my-3 bgcolor" style="opacity: 1;">
                  
                                <div class="col-12 d-flex py-2 align-items-center">
                  
                                  <span class="fw-bold me-3">Premium Member</span>
                  
                                  <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Yes
                                    </label>
                                  </div>
                                  <div class="form-check ms-4">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      No
                                    </label>
                                  </div>
                  
                  
                                </div>
                                <!-- end of col  -->
                                
                  
                                             
                                <hr class="my-3 bgcolor" style="opacity: 1;">
                                
                              </div>
                              <!-- end of row inner -->
                              <div class="row">
                  
                                <div class="col-12 col-lg-10 ">
                  
                                  <label class="form-label fw-bold fs-5">Contact Details</label>
                  
                              <div class="row">

                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" class="form-control inputno1" placeholder="Contact Number"  aria-describedby="basic-addon4">

                                  </div>
                  
                                  <div class="col-12 col-md-6 mb-3">
                                    <input type="text" class="form-control inputno1" placeholder="Email Id"  aria-describedby="basic-addon4">

                                  </div>

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
                                <div class="col-12 text-center mx-auto col-md-3 mb-5">
                                   <button type="button"  class="px-3 px-md-5 text-light py-2 border bg_danger border-secondary">Save</button>
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
                  </div>





                  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-4">
          <p class="fw-bold text-secondary">Are You sure to Delete this user </p>
        </div>
        <div class="modal-foote d-flex">
         <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">No</button></a> 
         <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover">Yes</button></a> 
        
        </div>
      </div>
    </div>
  </div>




   <!-- user edit canvas  -->


   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h5 id="offcanvasRightLabel">

                      </h5>
                      <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      
                        <div class="row pad-50 justify-content-around" id="edit_profile">


                            <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
                  
                              <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">View User</h4>
                  
                              <img src="{{asset('images/user-img.png')}}" class="profile_img my-3" alt="img not found">
                  
                          
                              <button type="file" class="bg-transparent  profilebtn btnhover px-3 py-2" style="border-radius: 5px;">Upload Profile Picture</button>
                  
                  
                            </div>
                            <!-- end of col-3 -->
                  
                            <div class="col-12 col-md-7">
                  
                              <form action="" method="post" >
                  
                              <div class="row">
                  
                                <div class="col-12">
                                    
                                    <div class="row">
                                        <label for="fullname" class="form-label fw-bold fs-5">Personal Details</label>

                                        <div class="col-12 col-md-6 mb-3">

                                            <input type="text" class="form-control mb-4" id="fullname" placeholder="Full Name">


                                        </div>
                                        <!-- end of col  -->
                                        
                                        <div class="col-12 col-md-6">

                                            <input type="text" class="form-control" id="fullname" placeholder="Farm Name">

                                        </div>
                                        <!-- end of col  -->

                                    </div>
                            
                  
                                </div>
                                <!-- end of inner col  -->
                                <hr class="my-3 bgcolor" style="opacity: 1;">
                  
                                <div class="col-12 d-flex py-2 align-items-center">
                  
                                  <span class="fw-bold me-3"> Owner Status</span>
                  
                                  <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Owner
                                    </label>
                                  </div>
                                  <div class="form-check ms-4">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Agent
                                    </label>
                                  </div>
                  
                  
                                </div>
                                <!-- end of col  -->
                                <hr class="my-3 bgcolor" style="opacity: 1;">
                  
                                <div class="col-12 d-flex py-2 align-items-center">
                  
                                  <span class="fw-bold me-3">Premium Member</span>
                  
                                  <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Yes
                                    </label>
                                  </div>
                                  <div class="form-check ms-4">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      No
                                    </label>
                                  </div>
                  
                  
                                </div>
                                <!-- end of col  -->
                                
                  
                                             
                                <hr class="my-3 bgcolor" style="opacity: 1;">
                                
                              </div>
                              <!-- end of row inner -->
                              <div class="row">
                  
                                <div class="col-12 col-lg-10 ">
                  
                                  <label class="form-label fw-bold fs-5">Contact Details</label>
                  
                              <div class="row">

                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" class="form-control inputno1" placeholder="Contact Number"  aria-describedby="basic-addon4">

                                  </div>
                  
                                  <div class="col-12 col-md-6 mb-3">
                                    <input type="text" class="form-control inputno1" placeholder="Email Id"  aria-describedby="basic-addon4">

                                  </div>

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
                  
                  
                              </div>
                              <!-- end of inner row  -->
                  
                             
                  
                            
                            </form>
                            <!-- end of form  -->
                  
                            
                  
                            </div>
                            <!-- end of col-9  -->
                  
                           
                  
                            </div>
                            <!-- end of edit profile row  -->
                  


                    </div>
                  </div>
                  <!-- end offcanvas  -->
       @endsection
