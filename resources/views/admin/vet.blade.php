@extends('app.dashboard')
@section('title','Vet')
@section('pill')
<div class="px-4 pt-4 position-relative" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

  <div class="row">

    <form action="{{route('vet_search')}}" method="post">
      @csrf
      <div class="col-12 d-md-flex mt-3">

        <input type="text" name="full_name" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Name   " id="">


        <input type="text" name="city" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By City" id="">
        <input type="text" name="state" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By State" id="">
        <input type="text" name="district" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By District " id="">
        <input type="text" name="taluka" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Taluka" id="">



      </div>
      <!-- end of col  -->

      <div class="col-12 mt-3">

        <button class="bg_danger px-5 py-2 rounded-pill text-light " name="">Search</button>
      </div>
    </form>
      <!-- end of col   -->

      <div class="col-12 mt-4">

        <div class="text-end d-flex d-md-block ">
          <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas"
            data-bs-target="#edit_vet" aria-controls="edit_vet" type="button">
            Add A Vet
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
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">License No </th>
                <th scope="col">Registered Vet Council </th>
                <th scope="col">VC Registeration No </th>
                <th scope="col">Contact No </th>


                <th scope="col">Email Id</th>
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
              {{-- {{dd($data)}} --}}
              @foreach ($data as $item)
              <tr>
                <td>{{$item->user_id}}</td>
                <td>{{$item->first_name}}</td>
                <td>{{$item->middle_name}}</td>
                <td>{{$item->last_name}}</td>
                <td>{{$item->license_no}}</td>
                <td>{{$item->reg_vet_council}}</td>
                <td>{{$item->vc_reg_no}}</td>
                <td>{{$item->contact_no}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address_line1}}</td>
                <td>{{$item->address_line2}}</td>
                <td>{{$item->area}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->state}}</td>
                <td>{{$item->district}}</td>
                <td>{{$item->taluka}}</td>
                <td scope="row">{{$item->zipcode}}</td>


                <td class="d-flex">
                  <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#edit_vet{{$item->user_id}}"
                    aria-controls="edit_vet{{$item->user_id}}" type="button"><i class="fas fa-pencil-alt"></i></button>
                  <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_vet{{$item->user_id}}"
                    aria-controls="view_vet{{$item->user_id}}" type="button"><i class="fas fa-eye"></i></button>
                  <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                    type="button"><i class="far fa-trash-alt"></i></button>

                    {{-- delete alert --}}
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="{{route('deleteVet')}}" method="POST">
                              <div class="modal-body text-center p-4">
                                <p class="fw-bold text-secondary">Are You sure to Delete this Vet </p>
                              </div>
                              <div class="modal-foote d-flex">
                                <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover"
                                    data-bs-dismiss="modal">No</button></a>

                                      @csrf
                                      <input type="hidden" value="{{$item->user_id}}" name="user_id">
                                     <button type="submit"
                                          class="btn border form-control btnhover">Yes</button>
                                    </form>

                              </div>
                            </div>
                          </div>
                        </div>
                    {{-- end alert --}}

                    {{-- vet view --}}
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="view_vet{{$item->user_id}}" aria-labelledby="offcanvasRightLabel" style="width: 70%">
                      <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">
                    
                        </h5>
                        <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                    
                        <div class="row pad-50 justify-content-around" id="edit_profile">
                    
                    
                          <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
                    
                            <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">View A Vet</h4>
                    
                            <img src="{{ asset($item->image) }}" class="profile_img my-3" alt="img not found">
                    
                    
                            {{-- <button type="file" class="bg-transparent  profilebtn btnhover px-3 py-2" style="border-radius: 5px;">Upload
                              Profile Picture</button> --}}
                    
                            <div class="row mt-5">
                    
                              <div class="col-12">
                    
                                <h5 class="mb-4"> Upload Documents</h5>
                                <a href="{{$item->document1}}" target="blank"> Document</a>
                                @if ($item->document2)
                                <a href="{{$item->document2}}" target="blank"> Document</a>
                                @endif
                                @if ($item->document3)
                                <a href="{{$item->document3}}" target="blank"> Document</a>
                                @endif
                                @if ($item->document4)
                                <a href="{{$item->document4}}" target="blank"> Document</a>
                                @endif
                              </div>
                              <!-- end of col  -->
                    
                            </div>
                            <!-- end of row  -->
                    
                          </div>
                          <!-- end of col-3 -->
                    
                          <div class="col-12 col-md-7">
                                        
                              <div class="row">
                    
                                <div class="col-12">
                    
                                  <div class="row">
                                    <label for="fullname" class="form-label fw-bold fs-5">Personal Details</label>
                    
                                    <div class="col-12 col-md-4">
                    
                                      <input disabled type="text" class="form-control mb-4" placeholder="Full Name" value="{{$item->first_name}}" name="first_name">
                
                                    </div>
                                    <!-- end of col  -->
                    
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" placeholder="Middle Name" value="{{$item->middle_name}}" name="middle_name">
                    
                                    </div>
                                    <!-- end of col  -->
                    
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" value="{{$item->last_name}}" placeholder="Last Name">
                    
                                    </div>
                                    <!-- end of col  -->
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" value="{{$item->license_no}}" placeholder="License No">
                    
                                    </div>
                                    <!-- end of col  -->
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" value="{{$item->reg_vet_council}}" placeholder="Registered Vetenary">
                    
                                    </div>
                                    <!-- end of col  -->
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" value="{{$item->vc_reg_no}}" placeholder="VC Reg No">
                    
                                    </div>
                                    <!-- end of col  -->
                    
                                  </div>
                    
                    
                                </div>
                                <!-- end of inner col  -->
                    
                    
                    
                                <hr class="my-3 bgcolor" style="opacity: 1;">
                    
                              </div>
                              <!-- end of row inner -->
                              <div class="row">
                    
                                <div class="col-12 col-lg-10 ">
                    
                                  <label class="form-label fw-bold fs-5">Contact Details</label>
                    
                                  <div class="row">
                    
                                    <div class="col-12 col-md-6 mb-3">
                                      <input disabled type="text" class="form-control inputno1" value="{{$item->contact_no}}" placeholder="Contact Number" disabled>
                                    </div>
                    
                                    <div class="col-12 col-md-6 mb-3">
                                      <input disabled type="text" class="form-control inputno1" value="{{$item->email}}" placeholder="Email Id" disabled>
                    
                                    </div>
                
                                  </div>
                    
                                </div>
                                <!-- end of col  -->
                    
                    
                              </div>
                              <!-- end of inner row  -->
                    
                              <hr class="my-3 bgcolor" style="opacity: 1;">
                    
                              <div class="row">
                    
                                <div class="col-12 col-md-6 mt-3">
                                  <input disabled type="text" class="form-control" placeholder="Address First Line" value="{{$item->address_line1}}" aria-label="addressfirst">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                  <input disabled type="text" class="form-control" placeholder="Address Second Line" value="{{$item->address_line2}}" aria-label="addresssecode">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                  <input disabled type="text" class="form-control" placeholder="Enter Area" value="{{$item->area}}" aria-label="area">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                  <select id="inputCity" class="form-select overflow-scroll ">
                                    @if ($item->city)
                                    <option value="Pune" @checked(true)>Pune</option>
                                    @else
                                    <option value="" selected disabled>City</option>
                                    <option value="Pune">Pune</option>
                                    @endif
                    
                                  </select>
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                  <select id="inputState" class="form-select overflow-scroll ">
                                    @if ($item->state)
                                    <option value="{{$item->state}}" selected>{{$item->state}}</option>
                                    @else
                                    <option value="" selected disabled>State</option>                                        
                                    @endif
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
                                    @if ($item->district)
                                    <option value="{{$item->district}}" selected>{{$item->district}}</option>
                                    @else
                                    <option value="" selected disabled>District</option>                                        
                                    @endif
                                    <option value="Pune">Pune</option>
                    
                                  </select>
                                </div>
                    
                                <div class="col-12 col-md-6 mt-3">
                                  <select id="inputTaluka" class="form-select overflow-scroll ">
                                    @if ($item->taluka)
                                    <option value="{{$item->taluka}}" selected>{{$item->taluka}}</option>
                                    @else
                                    <option value="" selected disabled>Taluka</option>
                                    @endif
                                    <option value="Pune">Pune</option>
                                  </select>
                                </div>
                    
                                <div class="col-12 col-md-6 mt-3">
                                  <input disabled type="text" class="form-control" placeholder="Pin Code" value="{{$item->zipcode}}" aria-label="pincode">
                                </div>
                    
                    
                              </div>
                              <!-- end of inner row  -->
                    
                            <!-- end of form  -->
                          </div>
                          <!-- end of col-9  -->
                        </div>
                        <!-- end of edit profile row  -->
                      </div>
                    </div>
                    {{-- end view --}}
                </td>
              </tr>

              {{-- edit vet --}}

              <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_vet{{$item->user_id}}" aria-labelledby="offcanvasRightLabel" style="width:70%">
                <div class="offcanvas-header">
                  <h5 id="offcanvasRightLabel">
              
                  </h5>
                  <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <form action="{{ route('update_vet') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$item->user_id}}" name="user_id">
                    <div class="row pad-50 justify-content-around" id="edit_profile">
              
                      <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
              
                        <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">Edit A Vet</h4>
              
                        <img src="{{ asset($item->image) }}" class="profile_img my-3"
                          alt="img not found">
              
                          <input type="file" name="profile" class="form-control d-block mt-3" id="doc1" >
              
                        <div class="row mt-5">
              
                          <div class="col-12">
              
                            <h5 class="mb-4"> Upload Documents</h5>
                            <a href="{{$item->document1}}" target="blank">Document 1 preview</a>
                            <input type="file" name="doc1" class="form-control d-block mt-3" id="doc1" >
                            <a href="{{$item->document2}}" target="blank">Document 2 preview</a>
                            <input type="file" name="doc2" class="form-control d-block mt-3" id="doc2">
                            <a href="{{$item->document3}}" target="blank">Document 3 preview</a>
                            <input type="file" name="doc3" class="form-control d-block mt-3" id="doc3">
              
              
                          </div>
                          <!-- end of col  -->
              
                        </div>
                        <!-- end of row  -->
              
                      </div>
                      <!-- end of col-3 -->
              
                      <div class="col-12 col-md-7">
              
                        <div class="row">
              
                          <div class="col-12">
              
                            <div class="row">
                              <label for="fullname" class="form-label fw-bold fs-5">Personal Details</label>
              
                              <div class="col-12 col-md-4">
              
                                <input type="text" class="form-control mb-4" placeholder="First Name" value="{{$item->first_name}}" name="first_name" required>
              
                              </div>
                              <!-- end of col  -->
              
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" class="form-control" placeholder="Middle Name" value="{{$item->middle_name}}" name="middle_name">
              
                              </div>
                              <!-- end of col  -->
              
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" name="last_name" class="form-control" value="{{$item->last_name}}" placeholder="last_name">
              
                              </div>
                              <!-- end of col  -->
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" class="form-control" placeholder="License No" value="{{$item->license_no}}" name="license_no" required>
              
                              </div>
                              <!-- end of col  -->
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" class="form-control" placeholder="Registered Vetenary" value="{{$item->reg_vet_council	}}" name="reg_vet_council" required>
              
                              </div>
                              <!-- end of col  -->
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" class="form-control" placeholder="VC Reg No" value="{{$item->vc_reg_no}}" name="vc_reg_no" required>
              
                              </div>
                              <!-- end of col  -->
              
                            </div>
                          </div>
                          <!-- end of inner col  -->
              
              
              
                          <hr class="my-3 bgcolor" style="opacity: 1;">
              
                        </div>
                        <!-- end of row inner -->
                        <div class="row">
              
                          <div class="col-12 col-lg-10 ">
              
                            <label class="form-label fw-bold fs-5">Contact Details</label>
              
                            <div class="row">
              
                              <div class="col-12 col-md-6 mb-3">
                                <input type="text" class="form-control inputno1" placeholder="Contact Number" value="{{$item->contact_no}}" name="contact_no" required>
              
                              </div>
              
                              <div class="col-12 col-md-6 mb-3">
                                <input type="text" class="form-control inputno1" placeholder="Email Id" value="{{$item->email}}" name="email" required>
              
                              </div>
                                <div class="col-12 col-md-6 mb-3">
                                  <input type="password" class="form-control inputno1" placeholder="New Password" name="new_password" required>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                  <input type="password" class="form-control inputno1" placeholder="Previous Password" name="prev_password" required>
                                </div>
                
                                <div class="col-12 col-md-6 mb-3">
                                  <input class="bg_danger text-light" type="submit" id="submitform" value="Change Password"/>
                                </div>
                            </div>
              
                          </div>
                          <!-- end of col  -->
                        </div>
                        <!-- end of inner row  -->
              
                        <hr class="my-3 bgcolor" style="opacity: 1;">
              
                        <div class="row">
              
                          <div class="col-12 col-md-6 mt-3">
                            <input type="text" class="form-control" placeholder="Address First Line" value="{{$item->address_line1}}" aria-label="addressfirst"
                              name="address_line1" required>
                          </div>
                          <div class="col-12 col-md-6 mt-3">
                            <input type="text" class="form-control" placeholder="Address Second Line" value="{{$item->address_line2}}" aria-label="addresssecode"
                              name="address_line2">
                          </div>
                          <div class="col-12 col-md-6 mt-3">
                            <input type="text" class="form-control" placeholder="Enter Area" aria-label="area" value="{{$item->area}}" name="area" required>
                          </div>
                          <div class="col-12 col-md-6 mt-3">
                            <select id="inputCity" class="form-select overflow-scroll " name="city" required>
                              @if ($item->city)
                              <option value="{{$item->city}}" selected>{{$item->city}}</option>
                              @else
                              <option value="" selected disabled>City</option>
                              @endif
                              <option value="Pune">Pune</option>
              
                            </select>
                          </div>
                          <div class="col-12 col-md-6 mt-3">
                            <select id="inputState" class="form-select overflow-scroll " name="state" required>
                              @if ($item->state)
                              <option value="{{$item->state}}" selected>{{$item->state}}</option>
                              @else
                              <option value="" selected disabled>State</option>                                  
                              @endif
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
                            <select id="inputDistrict" class="form-select overflow-scroll" name="district" required>
                              @if ($item->district)
                              <option value="{{$item->district}}" selected>{{$item->district}}</option>
                              @else
                              <option value="" selected disabled>District</option>
                              @endif
                              <option value="Pune">Pune</option>
                            </select>
                          </div>
              
                          <div class="col-12 col-md-6 mt-3">
                            <select id="inputTaluka" class="form-select overflow-scroll " name="taluke" required>
                              @if ($item->taluka)
                              <option value="{{$item->taluka}}">{{$item->taluka}}</option>
                              @else
                              <option value="" selected disabled>Taluka</option>                                  
                              @endif
                              <option value="Pune">Pune</option>
                            </select>
                          </div>
              
                          <div class="col-12 col-md-6 mt-3">
                            <input type="number" class="form-control" placeholder="Pin Code" value="{{$item->zipcode}}" aria-label="pincode" name="pincode" required>
                          </div>
              
              
                        </div>
                        <!-- end of inner row  -->
              
                        <div class="col-12 col-md-4 mb-3 mt-5 mx-auto text-center">
                          <button class="form-control bg_danger text-light " type="submit"> Save </button>
                        </div>
              
              
                  </form>
                  <!-- end of form  -->
              
              
              
                </div>
                <!-- end of col-9  -->
              
              
              
              </div>
              {{-- end edit vet --}}

              @endforeach
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

<!-- vet tab  edit off anvas  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="edit_vet" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">

    </h5>
    <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form action="{{ route('addvet') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row pad-50 justify-content-around" id="edit_profile">


        <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">

          <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">Add A Vet</h4>

          <img src="{{ asset('images/user-img.png') }}" class="profile_img my-3"
            alt="img not found">


            <input type="file" name="profile" class="form-control d-block mt-3" id="doc1" required>

          <div class="row mt-5">

            <div class="col-12">

              <h5 class="mb-4"> Upload Documents</h5>
              <input type="file" name="doc1" class="form-control d-block mt-3" id="doc1" required>
              <input type="file" name="doc2" class="form-control d-block mt-3" id="doc2">
              <input type="file" name="doc3" class="form-control d-block mt-3" id="doc3">


            </div>
            <!-- end of col  -->

          </div>
          <!-- end of row  -->

        </div>
        <!-- end of col-3 -->

        <div class="col-12 col-md-7">

          <div class="row">

            <div class="col-12">

              <div class="row">
                <label for="fullname" class="form-label fw-bold fs-5">Personal Details</label>

                <div class="col-12 col-md-4">

                  <input type="text" class="form-control mb-4" placeholder="First Name" name="first_name" required>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" placeholder="Middle Name" name="middle_name">

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-4 mb-3">

                  <input type="text" name="last_name" class="form-control" placeholder="last_name">

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" placeholder="License No" name="license_no" required>

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" placeholder="Registered Vetenary" name="reg_vet_council" required>

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" placeholder="VC Reg No" name="vc_reg_no" required>

                </div>
                <!-- end of col  -->

              </div>


            </div>
            <!-- end of inner col  -->



            <hr class="my-3 bgcolor" style="opacity: 1;">

          </div>
          <!-- end of row inner -->
          <div class="row">

            <div class="col-12 col-lg-10 ">

              <label class="form-label fw-bold fs-5">Contact Details</label>

              <div class="row">

                <div class="col-12 col-md-6 mb-3">
                  <input type="text" class="form-control inputno1" placeholder="Contact Number" name="contact_no" required>

                </div>

                <div class="col-12 col-md-6 mb-3">
                  <input type="text" class="form-control inputno1" placeholder="Email Id" name="email" required>

                </div>

                <div class="col-12 col-md-6 mb-3">
                  <input type="password" class="form-control inputno1" placeholder="Password" name="password" required>
                </div>

                <div class="col-12 col-md-6 mb-3">
                  <button class="form-control bg_danger text-light">Change Password </button>
                </div>

              </div>



            </div>
            <!-- end of col  -->


          </div>
          <!-- end of inner row  -->

          <hr class="my-3 bgcolor" style="opacity: 1;">

          <div class="row">

            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="Address First Line" aria-label="addressfirst"
                name="address_line1" required>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="Address Second Line" aria-label="addresssecode"
                name="address_line2">
            </div>
            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="Enter Area" aria-label="area" name="area" required>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <select id="inputCity" class="form-select overflow-scroll " name="city" required>
                <option value="" selected disabled>City</option>
                <option value="Pune">Pune</option>

              </select>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <select id="inputState" class="form-select overflow-scroll " name="state" required>
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
              <select id="inputDistrict" class="form-select overflow-scroll" name="district" required>
                <option value="" selected disabled>District</option>
                <option value="Pune">Pune</option>

              </select>
            </div>

            <div class="col-12 col-md-6 mt-3">
              <select id="inputTaluka" class="form-select overflow-scroll " name="taluke" required>
                <option value="" selected disabled>Taluka</option>
                <option value="Pune">Pune</option>

              </select>
            </div>

            <div class="col-12 col-md-6 mt-3">
              <input type="number" class="form-control" placeholder="Pin Code" aria-label="pincode" name="pincode" required>
            </div>


          </div>
          <!-- end of inner row  -->

          <div class="col-12 col-md-4 mb-3 mt-5 mx-auto text-center">
            <button class="form-control bg_danger text-light " type="submit"> Save </button>
          </div>


    </form>
    <!-- end of form  -->



  </div>
  <!-- end of col-9  -->



</div>
<!-- end of edit profile row  -->



</div>
</div>
<!-- end offcanvas  -->



<!-- vet tab  edit off anvas  -->

<!-- end offcanvas  -->
@endsection
@section('script')
@endsection