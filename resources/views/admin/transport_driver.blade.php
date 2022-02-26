@extends('app.dashboard')
@section('title','Transport Driver')
@section('pill')
<div class="px-4 pt-4 position-relative" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings1-tab">

  <div class="row">

    <form action="{{ route('transport_search') }}" method="GET">

      <div class="col-12 d-md-flex mt-3">

        <input type="text" name="first_name" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Name   "
          id="">


        <input type="text" name="city" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By City" id="">
        <input type="text" name="state" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By State" id="">
        <input type="text" name="district" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By District "
          id="">
        <input type="text" name="taluka" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Taluka"
          id="">



      </div>
      <!-- end of col  -->

      <div class="col-12 mt-3">

        <button class="bg_danger px-5 py-2 rounded-pill text-light " name="submit">Search</button>

      </div>
      <!-- end of col   -->
    </form>

    <div class="col-12 mt-4">

      <div class="text-end d-flex d-md-block ">
        <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas"
          data-bs-target="#add_transport" aria-controls="add_transport" type="button">
          Add A Transport
        </button>
        <button onclick="exportTableToCSV('record.csv')" class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
          Export TO CSV
        </button>

        {{-- {{dd($data) }} --}}

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
              <th scope="col">Vehicle Make & Model </th>
              <th scope="col">Vehicle Type </th>
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
            
            @foreach($data as $item)
              <tr>
                <td scope="row">{{ $item->user_id }}</td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->middle_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->license_no }}</td>
                <td>{{ $item->vehicle_make_model }}</td>
                <td>{{ $item->vehicle_type }}</td>
                <td>{{ $item->contact_no }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address_line1 }}</td>

                <td>{{ $item->address_line2 }}</td>
                <td>{{ $item->area }}</td>
                <td>{{ $item->city }}</td>
                <td>{{ $item->state }}</td>
                <td>{{ $item->district }}</td>
                <td>{{ $item->taluka }}</td>
                <td>{{ $item->zipcode }}</td>

                <td class="d-flex">
                  <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas"
                    data-bs-target="#edit_transport{{ $item->user_id }}" aria-controls="edit_transport"
                    type="button"><i class="fas fa-pencil-alt"></i></button>
                  <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_transport{{ $item->user_id }}"
                    aria-controls="view_transport" type="button"><i class="fas fa-eye"></i></button>
                  <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal4"
                    type="button"><i class="far fa-trash-alt"></i></button>

                     {{-- delete model --}}

                     <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <a href="#" class="text-decoration-none col-6"><button type="submit"
                                      class="btn border form-control btnhover">Yes</button></a>
                                </form>

                          </div>
                        </div>
                      </div>
                      {{-- end model --}}
                      
                    </td>
                </tr>
                    <tr>
                      {{-- edit model --}}
                      <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_transport{{ $item->user_id }}"
                        aria-labelledby="offcanvasRightLabel" style="width:70%;">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
        
        
                          <form action="{{ route('update_transport') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $item->user_id }}" name="user_id">
                            <div class="row pad-50 justify-content-around" id="edit_profile">
        
                              <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
        
                                <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">Edit A
                                  Transport</h4>
        
                                <img src="{{ asset($item->image) }}" class="profile_img my-3" alt="img not found">
        
        
                                <input type="file" name="profile" class="form-control d-block mt-3" id="">
        
                                <div class="row mt-5">
        
                                  <div class="col-12">
        
                                    <h5 class="mb-4"> Upload Documents</h5>
                                    <a href="{{ $item->document1 }}" target="blank">Document 1 preview</a>
                                    <input type="file" name="doc1" class="form-control d-block mt-3" id="">
                                    <a href="{{ $item->document1 }}" target="blank">Document 1 preview</a>
                                    <input type="file" name="doc2" class="form-control d-block mt-3" id="">
                                    <a href="{{ $item->document1 }}" target="blank">Document 1 preview</a>
                                    <input type="file" name="doc3" class="form-control d-block mt-3" id="">
        
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
        
                                        <input type="text" class="form-control mb-4" name="first_name"
                                          value="{{ $item->first_name }}" placeholder="First Name" required>
        
                                      </div>
                                      <!-- end of col  -->
        
                                      <div class="col-12 col-md-4 mb-3">
        
                                        <input type="text" class="form-control" name="middle_name"
                                          value="{{ $item->middle_name }}" placeholder="Middle Name">
        
                                      </div>
                                      <!-- end of col  -->
        
                                      <div class="col-12 col-md-4 mb-3">
        
                                        <input type="text" class="form-control" name="last_name"
                                          value="{{ $item->last_name }}" placeholder="Last Name">
        
                                      </div>
                                      <!-- end of col  -->
                                      <div class="col-12 col-md-4 mb-3">
        
                                        <input type="text" class="form-control" name="license_no"
                                          value="{{ $item->license_no }}" placeholder="License No" required>
        
                                      </div>
                                      <!-- end of col  -->
                                      <div class="col-12 col-md-4 mb-3">
        
                                        <input type="text" class="form-control" name="make"
                                          value="{{ $item->vehicle_make_model }}" placeholder="Vehicle model and make"
                                          required>
        
                                      </div>
                                      <!-- end of col  -->
                                      <div class="col-12 col-md-4 mb-3">
        
                                        <input type="text" class="form-control" name="type" value="{{ $item->vehicle_type }}"
                                          placeholder="Vehicle type" required>
        
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
                                        <input type="text" class="form-control inputno1" name="contact_no"
                                          value="{{ $item->contact_no }}" placeholder="Contact Number" required>
        
                                      </div>
        
                                      <div class="col-12 col-md-6 mb-3">
                                        <input type="text" class="form-control inputno1" name="email"
                                          value="{{ $item->email }}" placeholder="Email Id" required>
        
                                      </div>
        
                                      <div class="col-12 col-md-6 mb-3">
                                        <input type="text" class="form-control inputno1" name="password" placeholder="Password">
        
                                      </div>
        
                                      {{-- <div class="col-12 col-md-6 mb-3">
                                                             <button class="form-control bg_danger text-light">Change Password </button>
                          
                                                            </div> --}}
        
                                    </div>
        
        
        
                                  </div>
                                  <!-- end of col  -->
        
        
                                </div>
                                <!-- end of inner row  -->
        
                                <hr class="my-3 bgcolor" style="opacity: 1;">
        
                                <div class="row">
        
                                  <div class="col-12 col-md-6 mt-3">
                                    <input type="text" class="form-control" placeholder="Address First Line"
                                      value="{{ $item->address_line1 }}" name="address_line1" aria-label="addressfirst"
                                      required>
                                  </div>
                                  <div class="col-12 col-md-6 mt-3">
                                    <input type="text" class="form-control" placeholder="Address Second Line"
                                      value="{{ $item->address_line2 }}" name="address_line2" aria-label="addresssecode">
                                  </div>
                                  <div class="col-12 col-md-6 mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Area" name="area"
                                      value="{{ $item->area }}" aria-label="area" required>
                                  </div>
                                  <div class="col-12 col-md-6 mt-3">
                                    <select id="inputCity" name="city" class="form-select overflow-scroll" required>
                                      @if($item->city)
                                        <option value="{{ $item->city }}" selected>{{ $item->city }}</option>
                                      @else
                                        <option value="" selected disabled>City</option>
                                      @endif
                                      <option value="Pune">Pune</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-md-6 mt-3">
                                    <select id="inputState" name="state" class="form-select overflow-scroll " required>
                                      @if($item->state)
                                        <option value="{{ $item->state }}" selected>{{ $item->state }}</option>
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
                                    <select id="inputDistrict" name="district" class="form-select overflow-scroll " required>
                                      @if($item->district)
                                        <option value="{{ $item->district }}" selected>{{ $item->district }}</option>
                                      @else
                                        <option value="" selected disabled>District</option>
                                      @endif
                                      <option value="Pune">Pune</option>
        
                                    </select>
                                  </div>
        
                                  <div class="col-12 col-md-6 mt-3">
                                    <select id="inputTaluka" name="taluka" class="form-select overflow-scroll " required>
                                      @if($item->taluka)
                                        <option value="{{ $item->taluka }}" selected>{{ $item->taluka }}</option>
                                      @else
                                        <option value="" selected disabled>Taluka</option>
                                      @endif
                                      <option value="Pune">Pune</option>
        
                                    </select>
                                  </div>
        
                                  <div class="col-12 col-md-6 mt-3">
                                    <input type="text" class="form-control" name="zipcode" placeholder="Pin Code"
                                      value="{{ $item->zipcode }}" aria-label="pincode" required>
                                  </div>
        
        
                                </div>
                                <!-- end of inner row  -->
        
                                <div class="col-12 col-md-4 mb-3 mt-5 mx-auto text-center">
                                  <button class="form-control bg_danger text-light "> Save </button>
        
                                </div>
        
        
                          </form>
                          <!-- end of form  -->
        
        
        
                        </div>
                        <!-- end of col-9  -->
        
        
        
                      </div>
                      {{-- end mode --}}
                    </tr>
                    <tr>
                      {{-- view model --}}
                     <div class="offcanvas offcanvas-end" tabindex="-1" id="view_transport{{ $item->user_id }}"
                       aria-labelledby="offcanvasRightLabel" style="width:70%;">
                       <div class="offcanvas-header">
                         <h5 id="offcanvasRightLabel">
                         </h5>
                         <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas"
                           aria-label="Close"></button>
                       </div>
                       <div class="offcanvas-body">
        
        
                         <form action="{{ route('update_transport') }}" method="post"
                           enctype="multipart/form-data">
                           @csrf
                           <input type="hidden" value="{{ $item->user_id }}" name="user_id">
                           <div class="row pad-50 justify-content-around" id="edit_profile">
        
                             <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">
        
                               <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">View A
                                 Transport</h4>
        
                               <img src="{{ asset($item->image) }}" class="profile_img my-3" alt="img not found">
        
        
        
                               <div class="row mt-5">
        
                                 <div class="col-12">
        
                                   <h5 class="mb-4"> Upload Documents</h5>
                                   <a href="{{ $item->document1 }}" target="blank">Document 1 preview</a>
                                   <a href="{{ $item->document1 }}" target="blank">Document 1 preview</a>
                                   <a href="{{ $item->document1 }}" target="blank">Document 1 preview</a>
        
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
        
                                       <input type="text" class="form-control mb-4" name="first_name"
                                         value="{{ $item->first_name }}" placeholder="First Name" required disabled>
        
                                     </div>
                                     <!-- end of col  -->
        
                                     <div class="col-12 col-md-4 mb-3">
        
                                       <input type="text" class="form-control" name="middle_name"
                                         value="{{ $item->middle_name }}" placeholder="Middle Name" disabled>
        
                                     </div>
                                     <!-- end of col  -->
        
                                     <div class="col-12 col-md-4 mb-3">
        
                                       <input type="text" class="form-control" name="last_name"
                                         value="{{ $item->last_name }}" placeholder="Last Name" disabled>
        
                                     </div>
                                     <!-- end of col  -->
                                     <div class="col-12 col-md-4 mb-3">
        
                                       <input type="text" class="form-control" name="license_no"
                                         value="{{ $item->license_no }}" placeholder="License No" required disabled>
        
                                     </div>
                                     <!-- end of col  -->
                                     <div class="col-12 col-md-4 mb-3">
        
                                       <input type="text" class="form-control" name="make"
                                         value="{{ $item->vehicle_make_model }}" placeholder="Vehicle model and make"
                                         required disabled>
        
                                     </div>
                                     <!-- end of col  -->
                                     <div class="col-12 col-md-4 mb-3">
        
                                       <input type="text" class="form-control" name="type" value="{{ $item->vehicle_type }}"
                                         placeholder="Vehicle type" required disabled>
        
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
                                       <input type="text" class="form-control inputno1" name="contact_no"
                                         value="{{ $item->contact_no }}" placeholder="Contact Number" required disabled>
        
                                     </div>
        
                                     <div class="col-12 col-md-6 mb-3">
                                       <input type="text" class="form-control inputno1" name="email"
                                         value="{{ $item->email }}" placeholder="Email Id" required disabled>
        
                                     </div>
        
                                     <div class="col-12 col-md-6 mb-3">
                                       <input type="text" class="form-control inputno1" name="password" placeholder="Password" disabled>
        
                                     </div>
        
                                     {{-- <div class="col-12 col-md-6 mb-3">
                                                            <button class="form-control bg_danger text-light">Change Password </button>
                         
                                                           </div> --}}
        
                                   </div>
        
        
        
                                 </div>
                                 <!-- end of col  -->
        
        
                               </div>
                               <!-- end of inner row  -->
        
                               <hr class="my-3 bgcolor" style="opacity: 1;">
        
                               <div class="row">
        
                                 <div class="col-12 col-md-6 mt-3">
                                   <input type="text" class="form-control" placeholder="Address First Line"
                                     value="{{ $item->address_line1 }}" name="address_line1" aria-label="addressfirst"
                                     required disabled>
                                 </div>
                                 <div class="col-12 col-md-6 mt-3">
                                   <input type="text" class="form-control" placeholder="Address Second Line"
                                     value="{{ $item->address_line2 }}" name="address_line2" aria-label="addresssecode" disabled>
                                 </div>
                                 <div class="col-12 col-md-6 mt-3">
                                   <input type="text" class="form-control" placeholder="Enter Area" name="area"
                                     value="{{ $item->area }}" aria-label="area" required disabled>
                                 </div>
                                 <div class="col-12 col-md-6 mt-3">
                                   <select id="inputCity" name="city" class="form-select overflow-scroll" required disabled>
                                     @if($item->city)
                                       <option value="{{ $item->city }}" selected>{{ $item->city }}</option>
                                     @else
                                       <option value="" selected disabled>City</option>
                                     @endif
                                     <option value="Pune">Pune</option>
                                   </select>
                                 </div>
                                 <div class="col-12 col-md-6 mt-3">
                                   <select id="inputState" name="state" class="form-select overflow-scroll " required disabled>
                                     @if($item->state)
                                       <option value="{{ $item->state }}" selected>{{ $item->state }}</option>
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
                                   <select id="inputDistrict" name="district" class="form-select overflow-scroll " required disabled>
                                     @if($item->district)
                                       <option value="{{ $item->district }}" selected>{{ $item->district }}</option>
                                     @else
                                       <option value="" selected disabled>District</option>
                                     @endif
                                     <option value="Pune">Pune</option>
        
                                   </select>
                                 </div>
        
                                 <div class="col-12 col-md-6 mt-3">
                                   <select id="inputTaluka" name="taluka" class="form-select overflow-scroll " required disabled>
                                     @if($item->taluka)
                                       <option value="{{ $item->taluka }}" selected>{{ $item->taluka }}</option>
                                     @else
                                       <option value="" selected disabled>Taluka</option>
                                     @endif
                                     <option value="Pune">Pune</option>
        
                                   </select>
                                 </div>
        
                                 <div class="col-12 col-md-6 mt-3">
                                   <input type="text" class="form-control" name="zipcode" placeholder="Pin Code"
                                     value="{{ $item->zipcode }}" aria-label="pincode" required disabled>
                                 </div>
        
        
                               </div>
                               <!-- end of inner row  -->
        
        
        
                         </form>
                         <!-- end of form  -->
        
        
        
                       </div>
                       <!-- end of col-9  -->
        
        
        
                     </div>
                     {{-- end mode --}}

                    </tr>

            

            @endforeach
          </tbody>
        </table>


      </div>
      <!-- end of col  -->

    </div>
    <!-- end of col  -->

    <div class="row mt-5 justify-content-around ext-centert">

      <div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">

{{--        <nav aria-label="Page navigation example">--}}
{{--          <ul class="pagination">--}}
{{--            <li class="page-item">--}}
{{--              <a class="page-link" href="#" aria-label="Previous">--}}
{{--                <span aria-hidden="true">&laquo;</span>--}}
{{--              </a>--}}
{{--            </li>--}}
{{--            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--            <li class="page-item">--}}
{{--              <a class="page-link" href="#" aria-label="Next">--}}
{{--                <span aria-hidden="true">&raquo;</span>--}}
{{--              </a>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </nav>--}}
        {{ $item->render("pagination::bootstrap-4") }}


      </div>
      <!-- end of col  -->


    </div>
    <!-- end of row paggi  -->


    </form>
    <!-- end of from  -->





  </div>
  <!-- end of row  -->
</div>



<!-- transport tab  edit off anvas  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="add_transport" aria-labelledby="offcanvasRightLabel" style="width:70%;">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">

    </h5>
    <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">


    <form action="{{ route('register_transport') }}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="row pad-50 justify-content-around" id="edit_profile">

        <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">

          <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">Add A Transport</h4>

          <img src="{{ asset('images/user-img.png') }}" class="profile_img my-3"
            alt="img not found">


          <input type="file" name="profile" class="form-control d-block mt-3" id="" required>

          <div class="row mt-5">

            <div class="col-12">

              <h5 class="mb-4"> Upload Documents</h5>
              <input type="file" name="doc1" class="form-control d-block mt-3" id="" required>
              <input type="file" name="doc2" class="form-control d-block mt-3" id="">
              <input type="file" name="doc3" class="form-control d-block mt-3" id="">

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

                  <input type="text" class="form-control mb-4" name="first_name" placeholder="First Name" required>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" name="last_name" placeholder="Last Name">

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" name="license_no" placeholder="License No" required>

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" name="make" placeholder="Vehicle model and make" required>

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" name="type" placeholder="Vehicle type" required>

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
                  <input type="text" class="form-control inputno1" name="contact_no" placeholder="Contact Number"
                    required>

                </div>

                <div class="col-12 col-md-6 mb-3">
                  <input type="text" class="form-control inputno1" name="email" placeholder="Email Id" required>

                </div>

                <div class="col-12 col-md-6 mb-3">
                  <input type="text" class="form-control inputno1" name="password" placeholder="Password" required>

                </div>

                {{-- <div class="col-12 col-md-6 mb-3">
                                       <button class="form-control bg_danger text-light">Change Password </button>
    
                                      </div> --}}

              </div>



            </div>
            <!-- end of col  -->


          </div>
          <!-- end of inner row  -->

          <hr class="my-3 bgcolor" style="opacity: 1;">

          <div class="row">

            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="Address First Line" name="address_line1"
                aria-label="addressfirst" required>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="Address Second Line" name="address_line2"
                aria-label="addresssecode">
            </div>
            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="Enter Area" name="area" aria-label="area" required>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <select id="inputCity" name="city" class="form-select overflow-scroll" required>
                <option value="" selected disabled>City</option>
                <option value="Pune">Pune</option>

              </select>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <select id="inputState" name="state" class="form-select overflow-scroll " required>
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
              <select id="inputDistrict" name="district" class="form-select overflow-scroll " required>
                <option value="" selected disabled>District</option>
                <option value="Pune">Pune</option>

              </select>
            </div>

            <div class="col-12 col-md-6 mt-3">
              <select id="inputTaluka" name="taluka" class="form-select overflow-scroll " required>
                <option value="" selected disabled>Taluka</option>
                <option value="Pune">Pune</option>

              </select>
            </div>

            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" name="zipcode" placeholder="Pin Code" aria-label="pincode"
                required>
            </div>


          </div>
          <!-- end of inner row  -->

          <div class="col-12 col-md-4 mb-3 mt-5 mx-auto text-center">
            <button class="form-control bg_danger text-light "> Save </button>

          </div>


    </form>
    <!-- end of form  -->



  </div>
  <!-- end of col-9  -->



</div>
<!-- end of edit profile row  -->




<!-- end offcanvas  -->  --}}

</div>
</div>
<!-- end offcanvas  -->




@endsection




