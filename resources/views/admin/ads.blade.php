@extends('app.dashboard')
@section('title','Ads')
       @section('pill')
         
       <div class="px-4 pt-4 position-relative" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                        <div class="row">

                            

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
                            <button onclick="exportTableToCSV('record.csv')" class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
                                Export as CSV
                            </button>

                          </div>

                            <div class="col-12 overflow-scroll mt-5">

                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Ad Id </th>
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
                                       <!-- // <th scope="col">Premium</th> -->
                                        <th scope="col">Certified </th>
                                        <!-- <th scope="col">Certified By</th> -->
                                        <th scope="col">Vet Reg No</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if($ads!=null)
                                        @foreach($ads as $ad)
                                      <tr>
                                        <td scope="row">{{getadsid($ad->id)}}</td>
                                        <td>{{getname($ad->user_id)}}</td>
                                        <td>{{$ad->created_at}}</td>
                                        <td>{{$ad->status}}</td>
                                        <td>{{$ad->price}}</td>
                                        <td>{{$ad->ownership_status}}</td>
                                        @if($ad->animal_type==0)
                                        <td>Bull</td>
                                        @elseif($ad->animal_type==1)
                                        <td>Buffalo</td>
                                        @elseif($ad->animal_type==2)
                                        <td>Cow</td>
                                        @elseif($ad->animal_type==3)
                                        <td>Sheep</td>
                                        @elseif($ad->animal_type==4)
                                        <td>Goat</td>
                                        @endif

                                        @if($ad->breed_type==0)
                                        <td>Pure</td>
                                        @elseif($ad->breed_type==1)
                                        <td>Mixed</td>
                                        @endif
                                      <td></td>
                                       

                                        @if($ad->pregnant==0)
                                        <td>No</td>
                                        @elseif($ad->pregnant==1)
                                        <td>yes</td>
                                        @endif
                                        <td>{{$ad->due_month_pregnancy}}</td>
                                        <td>{{$ad->milk_capacity}}</td>

                                        @if($ad->vaccinated==0)
                                        <td>No</td>
                                        @elseif($ad->vaccinated==1)
                                        <td>Yes</td>
                                        @endif



                                        <td>{{$ad->area}}</td>
                                        <td>{{$ad->city}}</td>
                                        <td>{{$ad->state}}</td>
                                        <td>{{$ad->district}}</td>
                                        <td>{{$ad->takula}}</td>
                                        <td>{{$ad->zipcode}}</td>
                                        @if($ad->certified==0)
                                        <td>No</td>
                                        @elseif($ad->certified==1)
                                        <td>Yes</td>
                                        @endif
                                        
                                        <td>{{$ad->certified_reg_no}}</td>
                                        
                                        <td class="d-flex">
                                            <button  class="bg_danger text-light me-2"  onclick="hello({{getadsid($ad->id)}})" type="button"  data-bs-toggle="offcanvas" data-bs-target="#view_ads" aria-controls="add_ads"><i " class="fas fa-pencil-alt"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_ads" aria-controls="view_ads"  type="button"><i class="fas fa-eye"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal2"  type="button"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                      </tr>
                                      @endforeach
                                      @else
                                      No Data
                                      @endif
                                      
                                    
                                    </tbody>
                                  </table>


                            </div>
                            <!-- end of col  -->

                        </div>
                        <!-- end of col  -->

                        <div class="row mt-5 justify-content-around ext-centert">

                            <div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">
                        
{{--                              <nav aria-label="Page navigation example">--}}
{{--                                <ul class="pagination">--}}
{{--                                  <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                      <span aria-hidden="true">&laquo;</span>--}}
{{--                                    </a>--}}
{{--                                  </li>--}}
{{--                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                                  <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                  <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                  <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Next">--}}
{{--                                      <span aria-hidden="true">&raquo;</span>--}}
{{--                                    </a>--}}
{{--                                  </li>--}}
{{--                                </ul>--}}
{{--                              </nav>--}}
                                {{ $ads->render("pagination::bootstrap-4") }}
                        
                        
                            </div>
                            <!-- end of col  -->
                        
                        
                          </div>
                          <!-- end of row paggi  -->
                          

                       
                        <!-- end of from  -->


                     


                        </div>
                        <!-- end of row  -->
                       

                        
                 

                      </div>




            <div class="offcanvas offcanvas-end" tabindex="-1" id="add_ads" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Add Ad</h5>
              
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    @if ($errors->any())
                      @foreach ($errors->all() as $error)
                        <div class="text-danger">{{$error}}<br></div>
                      @endforeach
                    @endif                         
                    <form method="post" action="{{url('add/ads')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            <input id="id" type="hidden" value="" name="id">

                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">

                                <!-- <input accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                                <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                                <img id="output" class=" adimg2" alt="img not found"> -->
                                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;" required></p>
                                <p><label class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" for="file" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(0)">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button> -->
                                <p ><input type="file"  accept="image/*" name="image1" id="file1"  onchange="loadFile1(event)" style="display: none;"></p>
                                <p class="bg_danger px-3 py-2 mt-4 rounded-pill text-light"><label for="file1" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output1" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(1)">Delete</button>
                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button> -->
                                <p><input type="file"  accept="image/*" name="image2" id="file2"  onchange="loadFile2(event)" style="display: none;"></p>
                                <p  class="bg_danger px-3 py-2 mt-4 rounded-pill text-light"><label for="file2" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output2" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(2)">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-md-3 col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button> -->
                                <p><input type="file"  accept="image/*" name="image3" id="file3"  onchange="loadFile3(event)" style="display: none;"></p>
                                <p class="bg_danger px-3 py-2 mt-4 rounded-pill text-light"><label  for="file3" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output3" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(3)">Delete</button>
                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button> -->

                                <p><input type="file"  accept="image/*" name="image4" id="file4"  onchange="loadFile4(event)" style="display: none;"></p>
                                <p class="bg_danger px-3 py-2 mt-4 rounded-pill text-light"><label for="file4" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output4" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(4)">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/video-camera.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg()">Delete</button> -->
                                <!-- <p><input type="file"   name="image" id="videouplaod"  style="display: none;"></p>
                                <p><label for="videouplaod" style="cursor: pointer;">Upload Video</label></p>
                                <video width="320" height="240" controls>
                                       Your browser does not support the video tag.
                                </video>
                                <p><img id="output4" width="200" class=" adimg2" src="{{asset('images/video-camera.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="(4)">Delete</button> -->
                                <input type='file' name="video"  id='videoUpload' required/>

                                <video width="320" height="240" controls style="margin-right:20px">
                                    <source  src="" type="video/mp4">
                                 Your browser does not support the video tag.
                                </video>
                                    <p><a id="video1" href="#" target="_blank">To view your previous video click here</a></p>
                                    <p><a>if you upload new video previous will be replaced</a></p>

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
                                       
                                        <select name="animal_type" class="form-control py-2" aria-describedby="basic-addon1" type="text" required>
                                          <option disable>Select Animal Type</option>
                                          <option value="0">Bull</option>
                                          <option value="1">Buffalo</option>
                                          <option value="2">Cow</option>
                                          <option value="3">Sheep</option>
                                          <option value="4">Goat</option>
                                        </select>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon2">Weight</span>
                                        <input type="text" name="weight" class="form-control py-2" aria-describedby="basic-addon2" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">No Of Animals </span>
                                        <input type="text" name="no_animals" class="form-control py-2" aria-describedby="basic-addon3" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon4">Breed Type </span>
                                        <!-- <input type="text" name="breed_type" class="form-control py-2" aria-describedby="basic-addon4"> -->
                                         <select name="breed_type" class="form-control py-2" aria-describedby="basic-addon4" required>
                                            <option>Select Bread Type</option>
                                            <option value="0">Pure</option>
                                            <option value="1">Mixed</option>
                                         </select> 
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon5">Due Month  </span>
                                        <input type="date" name="month_pregnancy" class="form-control py-2" aria-describedby="basic-addon5" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                {{-- <div class="col-12">
        
                                    <!-- <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon5">Due Month  </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon5">
                                      </div> -->
                                      
                                </div> --}}
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon7">Vacinated </span>
                                        <!-- <input type="text" name="vaccinated" class="form-control py-2" aria-describedby="basic-addon7"> -->
                                        <select name="vaccinated" class="form-control py-2" aria-describedby="basic-addon4" required >
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                         </select> 
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon8">Certified By Reg No </span>
                                        <input type="text" name="certified_reg_no" class="form-control py-2" aria-describedby="basic-addon8" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                             
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon9">Address line 1</span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon9" name="address_line1" id="address_line11" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon10">State </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon10" name="state" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon11">Pincode </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon11" name="zipcode" required>
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
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon12" name="price" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon13">Age</span>
                                        <input type="number" class="form-control py-2" aria-describedby="basic-addon13" name="age" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon14">Breed </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon14" name="breed" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon15">Pregnant </span>
                                        <!-- <input type="text" class="form-control py-2" aria-describedby="basic-addon15" name="pregnant"> -->
                                        <select name="pregnant" type="text" class="form-control py-2" aria-describedby="basic-addon15" required>
                                          <option value="0">No</option>
                                          <option value="1">Yes</option>
                                        </select>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                            
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon16">Area</span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon16" name="area" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon17">Daily Milk Capacity  </span>
                                        <input type="number" class="form-control py-2" aria-describedby="basic-addon17" name="milk_capacity" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon18">Certified </span>
                                        <select name="certified" type="text" class="form-control py-2" aria-describedby="basic-addon15" required>
                                          <option value="0">No</option>
                                          <option value="1">Yes</option>
                                        </select>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                             
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon19">Address line 2 </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon19" name="address_line2" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon10">District </span>
                                        <input type="text" class="form-control py-2" aria-describedby="basic-addon10" name="district" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->
                                <div class="col-12">
        
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon11">Taluka </span>
                                        <input type="text" class="form-control py-2" aria-describedby="taluka" name="taluka" required>
                                      </div>
                                      
                                </div>
                                <!-- end of col  -->



                            </div>
                            <!-- end of row  -->


                        </div>
                        <!-- end of col  -->

                

                        <div class="col-12 text-center mx-auto col-md-3 mb-5">
                            <button type="submit"  class="px-3 px-md-5 text-light py-2 border bg_danger border-secondary">Save </button>
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
                      
                
                    <form action="{{url('ads/update')}}" method="post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">

                                <!-- <input accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                                <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                                <img id="output" class=" adimg2" alt="img not found"> -->
                                <p><input type="file"  accept="image/*" name="image" id="file5"  onchange="loadFile5(event)" style="display: none;" required></p>
                                <p><label class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" for="file5" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output5" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(5)">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button> -->
                                <p ><input type="file"  accept="image/*" name="image1" id="file6"  onchange="loadFile6(event)" style="display: none;"></p>
                                <p class="bg_danger px-3 py-2 mt-4 rounded-pill text-light"><label for="file6" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output6" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(6)">Delete</button>
                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3 col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button> -->
                                <p><input type="file"  accept="image/*" name="image2" id="file7"  onchange="loadFile7(event)" style="display: none;"></p>
                                <p  class="bg_danger px-3 py-2 mt-4 rounded-pill text-light"><label for="file7" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output7" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(7)">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-md-3 col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button> -->
                                <p><input type="file"  accept="image/*" name="image3" id="file8"  onchange="loadFile8(event)" style="display: none;"></p>
                                <p class="bg_danger px-3 py-2 mt-4 rounded-pill text-light"><label  for="file8" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output8" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(8)">Delete</button>
                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/Overview.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light">Delete</button> -->

                                <p><input type="file"  accept="image/*" name="image4" id="file9"  onchange="loadFile9(event)" style="display: none;"></p>
                                <p class="bg_danger px-3 py-2 mt-4 rounded-pill text-light"><label for="file9" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output9" width="200" class=" adimg2" src="{{asset('images/Overview.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(9)">Delete</button>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12 col-md-3  col-lg-2 my-3 text-center">


                                <!-- <img src="{{asset('images/video-camera.png')}}" class=" adimg2" alt="img not found">

                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg()">Delete</button> -->
                                <!-- <p><input type="file"   name="image" id="videouplaod"  style="display: none;"></p>
                                <p><label for="videouplaod" style="cursor: pointer;">Upload Video</label></p>
                                <video width="320" height="240" controls>
                                       Your browser does not support the video tag.
                                </video>
                                <p><img id="output4" width="200" class=" adimg2" src="{{asset('images/video-camera.png')}}" /><br></p>
                                <button class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="(4)">Delete</button> -->
                                <input type='file' name="video1"  id='videoUpload1' />


                                <video width="320" height="240" controls style="margin-right:20px">
                                    <source  src="" type="video/mp4">
                                 Your browser does not support the video tag.
                                </video>
                                    <p><a id="video" href="https://www.w3schools.com" target="_blank">To view your previous video click here</a></p>
                                    <p><a>if you upload new video previous will be replaced</a></p>

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
       
                                  <select name="animal_type" class="form-control py-2" aria-describedby="basic-addon1" type="text" id="animal_type" required>
                                    <option disable>Select Animal Type</option>
                                     <option value="0">Bull</option>
                                     <option value="1">Buffalo</option>
                                     <option value="2">Cow</option>
                                     <option value="3">Sheep</option>
                                     <option value="4">Goat</option>
                                  </select>
                            </div>
      
                          </div>
                          <!-- end of col  -->
                          <div class="col-12">

                             <div class="input-group mb-3">
                               <span class="input-group-text" id="basic-addon2">Weight</span>
                                <input type="text" name="weight" id="weight" class="form-control py-2" aria-describedby="basic-addon2" required>
                              </div>
      
                          </div>
                          <!-- end of col  -->
                          <div class="col-12">

                              <div class="input-group mb-3">
                               <span class="input-group-text" id="basic-addon3">No Of Animals </span>
                                <input type="text" name="no_animals"  id="no_animals" class="form-control py-2" aria-describedby="basic-addon3" required>
                             </div>
      
                          </div>
                         <!-- end of col  -->
                          <div class="col-12">

                            <div class="input-group mb-3">
                             <span class="input-group-text" id="basic-addon4">Breed Type </span>
                              <!-- <input type="text" name="breed_type" class="form-control py-2" aria-describedby="basic-addon4"> -->
                              <select name="breed_type" class="form-control py-2" aria-describedby="basic-addon4" id="breed_type" required>
                              <option>Select Bread Type</option>
                              <option value="0">Pure</option>
                              <option value="1">Mixed</option>
                              </select> 
                            </div>
      
                          </div>
                          <!-- end of col  -->
                          <div class="col-12">

                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon5">Due Month  </span>
                           <input type="date" name="month_pregnancy" id="month_pregnancy" class="form-control py-2" aria-describedby="basic-addon5" required>
                          </div>
      
                          </div>
                          <!-- end of col  -->
                          {{-- <div class="col-12">

                           <!-- <div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon5">Due Month  </span>
                          <input type="text" class="form-control py-2" aria-describedby="basic-addon5">
                           </div> -->
      
                          </div> --}}
                          <!-- end of col  -->
                        <div class="col-12">

                          <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon7">Vacinated </span>
                               <!-- <input type="text" name="vaccinated" class="form-control py-2" aria-describedby="basic-addon7"> -->
                            <select name="vaccinated" id="vaccinated" class="form-control py-2" aria-describedby="basic-addon4" required >
                             <option value="0">No</option>
                             <option value="1">Yes</option>
                            </select> 
                          </div>
      
                        </div>
                        <!-- end of col  -->
                        <div class="col-12">

                           <div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon8">Certified By Reg No </span>
                          <input type="text" name="certified_reg_no"  id="certified_reg_no" class="form-control py-2" aria-describedby="basic-addon8"  required>
                          </div>
      
                        </div>
                        <!-- end of col  -->

                        <div class="col-12">

                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon9">Address line 1</span>
                            <input type="text" class="form-control py-2" aria-describedby="basic-addon9" name="address_line1" id="address_line11" required>
                         </div>
      
                        </div>
                        <!-- end of col  -->
                        <div class="col-12">

                          <div class="input-group mb-3">
                             <span class="input-group-text" id="basic-addon10">State </span>
                           <input type="text" class="form-control py-2" aria-describedby="basic-addon10" name="state" id="state" required>
                          </div>
      
                        </div>
                        <!-- end of col  -->
                        <div class="col-12">

                          <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon11">Pincode </span>
                              <input type="text" class="form-control py-2" aria-describedby="basic-addon11" name="zipcode" id="zipcode" required>
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
                           <input type="text" class="form-control py-2" aria-describedby="basic-addon12" name="price" id="price" required>
                          </div>
      
                        </div>
                        <!-- end of col  -->
                        <div class="col-12">

                          <div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon13">Age</span>
                            <input type="number" class="form-control py-2" aria-describedby="basic-addon13" name="age"  id="age" required>
                          </div>
      
                        </div>
                          <!-- end of col  -->
                        <div class="col-12">

                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon14">Breed </span>
                            <input type="text" class="form-control py-2" aria-describedby="basic-addon14" name="breed" id="breed" required>
                          </div>
      
                        </div>
<!-- end of col  -->
                        <div class="col-12">

                         <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon15">Pregnant </span>
                           <!-- <input type="text" class="form-control py-2" aria-describedby="basic-addon15" name="pregnant"> -->
                           <select name="pregnant" type="text" class="form-control py-2" aria-describedby="basic-addon15" id="pregnant" required>
                             <option value="0">No</option>
                             <option value="1">Yes</option>
                           </select>
                           </div>
      
                        </div>
                          <!-- end of col  -->

                        <div class="col-12">

                              <div class="input-group mb-3">
                               <span class="input-group-text" id="basic-addon16">Area</span>
                               <input type="text" class="form-control py-2" aria-describedby="basic-addon16" name="area" id="area" required>
                              </div>
      
                        </div>
                          <!-- end of col  -->
                        <div class="col-12">

                          <div class="input-group mb-3">
                             <span class="input-group-text" id="basic-addon17">Daily Milk Capacity  </span>
                              <input type="number" class="form-control py-2" aria-describedby="basic-addon17" name="milk_capacity" id="milk_capacity" required>
                          </div>
      
                        </div>
                                <!-- end of col  -->
                        <div class="col-12">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon18">Certified </span>
                                <select name="certified" type="text" class="form-control py-2" aria-describedby="basic-addon15" id="certified" required>
                                 <option value="0">No</option>
                                 <option value="1">Yes</option>
                                </select>
                            </div>
      
                        </div>
                            <!-- end of col  -->

                        <div class="col-12">

                           <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon19">Address line 2 </span>
                             <input type="text" class="form-control py-2" aria-describedby="basic-addon19" id="address_line2" name="address_line2" required>
                              </div>
      
                        </div>
                          <!-- end of col  -->
                        <div class="col-12">

                            <div class="input-group mb-3">
                             <span class="input-group-text" id="basic-addon10">District </span>
                             <input type="text" class="form-control py-2" aria-describedby="basic-addon10" id="district" name="district" required>
                            </div>
      
                        </div>
                        <!-- end of col  -->
                        <div class="col-12">

                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon11">Taluka </span>
                                 <input type="text" class="form-control py-2" aria-describedby="taluka" id="taluka" name="taluka" required>
                               </div>
      
                          </div>
                            <!-- end of col  -->



                      </div>
                            <!-- end of row  -->


                        </div>
                        <!-- end of col  -->


                      </div>
                      <div class="col-12 text-center mx-auto col-md-3 mb-5">
                            <button type="submit"  class="px-3 px-md-5 text-light py-2 border bg_danger border-secondary">Save </button>
                      </div>
                      <!-- end of row  -->
                    </form>          

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
@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
  

var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

var loadFile1 = function(event) {
	var image = document.getElementById('output1');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};

var loadFile2 = function(event) {
	var image = document.getElementById('output2');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};

var loadFile3 = function(event) {
	var image = document.getElementById('output3');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};

var loadFile4 = function(event) {
	var image = document.getElementById('output4');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};
var loadFile5 = function(event) {
	var image = document.getElementById('output5');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};
var loadFile6 = function(event) {
	var image = document.getElementById('output6');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};
var loadFile7= function(event) {
	var image = document.getElementById('output7');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};
var loadFile8 = function(event) {
	var image = document.getElementById('output8');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};
var loadFile9 = function(event) {
	var image = document.getElementById('output9');
	image.src = URL.createObjectURL(event.target.files[0]);
 
};

var deleteimg=function(id){
 
  
  
  if(id==0){
    img=document.getElementById('output');
    img.removeAttribute("src");
  }else if(id==1){
    img=document.getElementById('output1');
    img.removeAttribute("src");
  }else if(id==2){
    img=document.getElementById('output2');
    img.removeAttribute("src");
  }
  else if(id==3){
    img=document.getElementById('output3');
    img.removeAttribute("src");
  }
  else if(id==4){
    img=document.getElementById('output4');
    img.removeAttribute("src");
  }
  else if(id==5){
    img=document.getElementById('output');
    img.removeAttribute("src");
  }
  else if(id==6){
    img=document.getElementById('output1');
    img.removeAttribute("src");
  }
  else if(id==7){
    img=document.getElementById('output2');
    img.removeAttribute("src");
  }
  else if(id==8){
    img=document.getElementById('output3');
    img.removeAttribute("src");
  }
  else if(id==9){
    img=document.getElementById('output4');
    img.removeAttribute("src");
  }
  
}

document.getElementById("videoUpload")
.onchange = function(event) {
  let file = event.target.files[0];
  let blobURL = URL.createObjectURL(file);
  document.querySelector("video").src = blobURL;
}

document.getElementById("videoUpload1")
.onchange = function(event) {
  let file = event.target.files[0];
  let blobURL = URL.createObjectURL(file);
  document.querySelector("video1").src = blobURL;
}

function hello(id){
  $.ajax({
               type:'POST',
               url:"{{url('/getads/')}}"+ '/'+id,
               data:{_token: "{{ csrf_token() }}"},
               success:function(data) {
                  
                  console.log(data.adsaddress.addressline1);
                  // alert("Your Data : "+data.ads.id);
                  document.getElementById('animal_type').value=data.ads.animal_type;
                  document.getElementById('price').value=data.ads.price;
                  document.getElementById('weight').value=data.ads.weight;
                  document.getElementById('age').value=data.ads.age;
                  document.getElementById('no_animals').value=data.ads.no_animals;
                  document.getElementById('breed').value=data.ads.breed;
                  document.getElementById('breed_type').value=data.ads.breed_type;
                  document.getElementById('vaccinated').value=data.ads.vaccinated;
                  var date=data.ads.due_month_pregnancy;
                  console.log(date);
                  document.getElementById('month_pregnancy').value=date;
                  document.getElementById('area').value= data.ads.area;
                  
                   document.getElementById('milk_capacity').value=data.ads.milk_capacity;
                   document.getElementById('certified_reg_no').value=data.ads.certified_reg_no;
                  
                   document.getElementById('area').value=data.adsaddress.area;
                   document.getElementById('address_line11').value=data.adsaddress.addressline2;
                   document.getElementById('address_line2').value=data.adsaddress.addressline2;
                   document.getElementById('district').value=data.adsaddress.district;
                   document.getElementById('zipcode').value=data.adsaddress.zipcode;
                   document.getElementById('taluka').value=data.adsaddress.taluka;
                   document.getElementById('state').value=data.adsaddress.state;
                  let photo=data.adsphoto.photo1;
                  {{--document.getElementById('output5').src='{{asset('+photo+')}}';--}}
                   $('#output5').attr('src',"http://localhost:8000/"+data.adsphoto.photo1)
                   $('#output6').attr('src',"http://localhost:8000/"+data.adsphoto.photo2)
                   $('#output7').attr('src',"http://localhost:8000/"+data.adsphoto.photo3)
                   $('#output8').attr('src',"http://localhost:8000/"+data.adsphoto.photo4)
                   $('#output9').attr('src',"http://localhost:8000/"+data.adsphoto.photo5)
                   $('#video').attr('href',"http://localhost:8000/"+data.adsvideo.video)
                   $('#video1').attr('href',"http://localhost:8000/"+data.adsvideo.video)
                   $('#id').attr('value',data.ads.id)
               }
            });


}
</script>
@endsection