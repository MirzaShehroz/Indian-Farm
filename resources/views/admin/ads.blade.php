@extends('app.dashboard')
@section('title','Ads')
       @section('pill')
       <div class="px-4 pt-4 position-relative" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                        <div class="row">

                            <form action="" method="post">

                            <div class="col-12 d-md-flex mt-3">

                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Animal Type" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Breed" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Gender " id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Pregnant
                                " id="">
                                
                                
                            </div>
                            <!-- end of col  -->

                            <div class="col-12 d-md-flex mt-3">

                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By City" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By State" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By District" id="">
                                <input type="text" name="" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Taluka" id="">

                             
                                
                            </div>
                            <!-- end of col  -->

                            <div class="col-12 mt-3">

                                <button class="bg_danger px-5 py-2 rounded-pill text-light " name="">Search</button>

                            </div>
                           <!-- end of col   -->

                           <div class="col-12 mt-4">

                          <div class="text-end d-flex d-md-block ">
                            <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas" data-bs-target="#add_ads" aria-controls="add_ads" type="button">
                                Add A Ad
                            </button>
                            <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
                                Export as CSV
                            </button>

                          </div>

                            <div class="col-12 overflow-scroll mt-5">

                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Add Id </th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Date Of Add Poasted</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Farm Owner</th>
                                        <th scope="col">Animal Type</th>
                                        <th scope="col">Breed</th>
                                      
                                        <th scope="col">Gender</th>
                                        <th scope="col">Pregnant</th>
                                        <th scope="col">Due Month </th>
                                        <th scope="col">Daily Milk Capacity </th>
                                        <th scope="col">Vacinated</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">City</th>
                                        <th scope="col">State</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Taluka</th>
                                        <th scope="col">Pincode</th>
                                        <th scope="col">Premium</th>
                                        <th scope="col">Certified </th>
                                        <th scope="col">Certified By</th>
                                        <th scope="col">Vet Reg No</th>
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
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td class="d-flex">
                                            <button class="bg_danger text-light me-2" type="button"  data-bs-toggle="offcanvas" data-bs-target="#add_ads" aria-controls="add_ads"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_ads" aria-controls="view_ads"  type="button"><i class="fas fa-eye"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal2"  type="button"><i class="far fa-trash-alt"></i></button>
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
                                          <button class="bg_danger text-light me-2" type="button"  data-bs-toggle="offcanvas" data-bs-target="#add_ads" aria-controls="add_ads"><i class="fas fa-pencil-alt"></i></button>
                                          <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_ads" aria-controls="view_ads"  type="button"><i class="fas fa-eye"></i></button>
                                          <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal2"  type="button"><i class="far fa-trash-alt"></i></button>
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
                                          <button class="bg_danger text-light me-2" type="button"  data-bs-toggle="offcanvas" data-bs-target="#add_ads" aria-controls="add_ads"><i class="fas fa-pencil-alt"></i></button>
                                          <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_ads" aria-controls="view_ads"  type="button"><i class="fas fa-eye"></i></button>
                                          <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal2"  type="button"><i class="far fa-trash-alt"></i></button>
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




                      <div class="offcanvas offcanvas-end" tabindex="-1" id="add_ads" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Edit Ad</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      
                   

                        <div class="row">

                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-md-3 col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-lg-2 my-3 text-center">


                                <img src="{{asset('images/video-camera.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->

                        </div>
                      <!-- end of row  -->

                      <div class="row justify-content-around mt-5">

                             

                        <div class="col-12 col-md-6 p-lg-4">

                            <div class="row px-lg-5">

                                <div class="col-12">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Animal Type </span>
                                        <input type="text" name="animal_type" class="form-control py-2" aria-describedby="basic-addon1">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon2">Weight</span>
                                        <input type="text" name="weight" class="form-control py-2" aria-describedby="basic-addon2">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">No Of Animals </span>
                                        <input type="text" name="no_animals" class="form-control py-2" aria-describedby="basic-addon3">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon4">Breed Type </span>
                                        <input type="text" name="breed_type" class="form-control py-2" aria-describedby="basic-addon4">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon5">Due Month  </span>
                                        <input type="text" name="due_month_pregnancy" class="form-control py-2" aria-describedby="basic-addon5">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                {{-- <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon5">Due Month  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon5">
                                      </div>
                                      
                                </div> --}}
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon7">Vacinated </span>
                                        <input type="text" name="vaccinated" class="form-control py-2" aria-describedby="basic-addon7">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon8">Certified By Reg No </span>
                                        <input type="text" name="certified" class="form-control py-2" aria-describedby="basic-addon8">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                             
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon9">Address line 2  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon9">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon10">State </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon10">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon11">Pincode </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon11">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->



                            </div>
                            <!-- end of row  -->


                        </div>
                        <!-- end of col  -->

                        <div class="col-12 col-md-6 mt-4">

                            <div class="row px-lg-5">

                                <div class="col-12">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon12">Price </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon12">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon13">Age</span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon13">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon14">Breed </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon14">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon15">Pregnant </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon15">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                            
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon16">Due Month  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon16">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon17">Daily Milk Capacity  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon17">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon18">Certified </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon18">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                             
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon19">Address line 1  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon19">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon10">District </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon10">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon11">Taluka </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon11">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->



                            </div>
                            <!-- end of row  -->


                        </div>
                        <!-- end of col  -->

                

                        <div class="col-12 text-center mx-auto col-md-3 mb-5">
                            <button type="button"  class="px-3 px-md-5 text-light py-2 border bg_danger border-secondary">Save</button>
                         </div>
          


                      </form>

                      </div>
                      <!-- end of row  -->


                    </div>
                  </div>
                  <!-- ads tab offcanvas edit ad  -->



                  <!-- ads tab offcanvas edit ad  -->
                  <div class="offcanvas offcanvas-end canvasoff1" tabindex="-1" id="view_ads" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Edit Ad</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      
                

                        <div class="row">

                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-md-3 col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-lg-2 my-3 text-center">


                                <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-lg-2 my-3 text-center">


                                <img src="{{asset('images/video-camera.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button>

                            </div>
                            <!-- end of col  -->

                        </div>
                      <!-- end of row  -->

                      <div class="row justify-content-around mt-5">

                             

                        <div class="col-12 col-md-6 p-lg-4">

                            <div class="row px-lg-5">

                                <div class="col-12">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Animal Type </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon1">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon2">Weight</span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon2">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">No Of Animals </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon3">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon4">Breed Type </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon4">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon5">Due Month  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon5">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon5">Due Month  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon5">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon7">Vacinated </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon7">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon8">Certified By Reg No </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon8">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                             
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon9">Address line 2  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon9">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon10">State </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon10">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon11">Pincode </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon11">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->



                            </div>
                            <!-- end of row  -->


                        </div>
                        <!-- end of col  -->

                        <div class="col-12 col-md-6 mt-4">

                            <div class="row px-lg-5">

                                <div class="col-12">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon12">Price </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon12">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon13">Age</span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon13">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon14">Breed </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon14">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon15">Pregnant </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon15">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                            
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon16">Due Month  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon16">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon17">Daily Milk Capacity  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon17">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon18">Certified </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon18">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                             
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon19">Address line 1  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon19">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon10">District </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon10">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon11">Taluka </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon11">
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->



                            </div>
                            <!-- end of row  -->


                        </div>
                        <!-- end of col  -->


                      </div>
                      <!-- end of row  -->


                    </div>
                  </div>



                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-4">
          <p class="fw-bold text-secondary">Are You sure to Delete this Ads </p>
        </div>
        <div class="modal-foote d-flex">
         <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">No</button></a> 
         <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover">Yes</button></a> 
        
        </div>
      </div>
    </div>
  </div>
       @endsection
