@extends('app.dashboard')
@section('title','Users')
@section('pill')
    <div class=" px-4 pt-4 position-relative ps-md-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

        <div class="row">

            <form action="{{route('search')}}" method="post">
                @csrf
                <div class="col-12 d-md-flex mt-3">

                    <input type="text" name="full_name" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Name" id="">
                    <input type="text" name="contact_no" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Contact Number" id="">
                    <input type="text" name="email" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search Email id " id="">
                    <input type="text" name="area" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search Area" id="">


                </div>
                <!-- end of col  -->

                <div class="col-12 d-md-flex mt-3">

                    <input type="text" name="city" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By City" id="">
                    <input type="text" name="state" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By State" id="">
                    <input type="text" name="district" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By District" id="">
                    <input type="text" name="taluka" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Taluka" id="">

                    <select class="py-2 border" name="owner_status" id="">
                        <option class="" disabled selected>Owner Status</option>
                        <option class="owner"  >Owner</option>
                        <option class="agent" >Owner Agent</option>
                    </select>


                </div>
                <!-- end of col  -->

                <div class="col-12 mt-3">

                    <button class="bg_danger px-5 py-2 rounded-pill text-light " type="submit">Search</button>

                </div>
            </form>
            <!-- end of col   -->

            <div class="col-12 mt-4">

                <div class="text-end d-flex d-md-block ">
                    <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1" type="button">
                        Add A User
                    </button>
                    <button onclick="exportTableToCSV('record.csv')" class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light " >
                        Export as CSV
                    </button>

                </div>
                {{-- {{dd($data)}} --}}
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
                        {{-- {{dd($data)}} --}}
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->user_id}}</td>
                                <td>{{$item->first_name}}</td>
                                <td>{{$item->farm_name}}</td>
                                <td>{{$item->contact_no}}</td>
                                <td>{{$item->email}}</td>
                                @if ($item->owner_status=='owner')
                                    <td>{{$item->first_name}}</td>
                                @else
                                    <td>user is not owner </td>
                                @endif
                                <td>{{$item->address_line1}}</td>
                                @if ($item->address_line2)
                                    <td>{{$item->address_line2}}</td>
                                @else
                                    <td>Not Data Found</td>
                                @endif
                                <td>{{$item->area}}</td>
                                <td>{{$item->city}}</td>
                                <td>{{$item->state}}</td>
                                <td>{{$item->district}}</td>
                                <td scope="row">{{$item->taluka}}</td>
                                <td>{{$item->zipcode}}</td>
                                <td class="d-flex">
                                    <button class="bg_danger text-light me-2"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3{{$item->user_id}}"" aria-controls="offcanvasRight3{{$item->user_id}}"" type="button"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2{{$item->user_id}}" aria-controls="offcanvasRight2{{$item->user_id}}" type="button"><i class="fas fa-eye"></i></button>
                                    <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->user_id}}" type="button"><i class="far fa-trash-alt"></i></button>



                                    {{-- edit model --}}

                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight3{{$item->user_id}}"" aria-labelledby="offcanvasRightLabel" style="width:70%;">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasRightLabel">

                                        </h5>
                                        <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">

                                        <form action="{{route('update_user')}}" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            <input type="hidden" value="{{$item->user_id}}" name="user_id">
                                            <div class="row pad-50 justify-content-around" id="edit_profile">


                                                <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">

                                                    <h4 class="border-start border-5 tcolor " style="border-color: #0572B2 !important;">Edit User</h4>

                                                    <img src="{{asset($item->image)}}" class="profile_img my-3" alt="img not found" >


                                                    <input type="file" name="profile" class="bg-transparent border border-light profilebtn btnhover px-3 py-2" style="border-radius: 5px;" value="Upload Profile Photo" />


                                                </div>
                                                <!-- end of col-3 -->

                                                <div class="col-12 col-md-7">

                                                    <div class="row">

                                                        <div class="col-12">

                                                            <div class="row">
                                                                <label for="fullname" class="form-label fw-bold fs-5">Personal Details</label>

                                                                <div class="col-12 col-md-6 mb-3">

                                                                    <input type="text" name="full_name" class="form-control mb-4" id="fullname" placeholder="Full Name" value="{{$item->first_name}}" required>
                                                                </div>
                                                                <!-- end of col  -->

                                                                <div class="col-12 col-md-6 mb-3">

                                                                    <input type="text" name="farm_name" class="Farm_name" class="form-control" id="fullname" placeholder="Farm Name " value="{{$item->farm_name}}" required>

                                                                </div>
                                                                <!-- end of col  -->

                                                            </div>


                                                        </div>
                                                        <!-- end of inner col  -->
                                                        <hr class="my-3 bgcolor" style="opacity: 1;">

                                                        <div class="col-12 d-flex py-2 align-items-center">

                                                            <span class="fw-bold me-3"> Owner Status</span>

                                                            @if ($item->owner_status=='owner')
                                                                <div class="form-check ms-3">
                                                                    <input class="form-check-input" type="radio" name="owner_Status" value="owner" id="flexRadioDefault1" required checked>
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Owner
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ms-4">
                                                                    <input class="form-check-input" type="radio" name="owner_Status" value="agent" id="flexRadioDefault2" required >
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Agent
                                                                    </label>
                                                                </div>
                                                            @else
                                                                <div class="form-check ms-3">
                                                                    <input class="form-check-input" type="radio" name="owner_Status" value="owner" id="flexRadioDefault1" required >
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Owner
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ms-4">
                                                                    <input class="form-check-input" type="radio" name="owner_Status" value="agent" id="flexRadioDefault2" required checked>
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Agent
                                                                    </label>
                                                                </div>
                                                            @endif


                                                        </div>
                                                        <!-- end of col  -->
                                                        <hr class="my-3 bgcolor" style="opacity: 1;">

                                                        <div class="col-12 d-flex py-2 align-items-center">

                                                            <span class="fw-bold me-3">Premium Member</span>

                                                            @if ($item->membership_type==1)
                                                                <div class="form-check ms-3">
                                                                    <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1" required checked>
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Yes
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ms-4">
                                                                    <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2" required >
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        No
                                                                    </label>
                                                                </div>
                                                            @else
                                                                <div class="form-check ms-3">
                                                                    <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1" required >
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Yes
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ms-4">
                                                                    <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2" required checked>
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        No
                                                                    </label>
                                                                </div>

                                                            @endif

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
                                                                    <input type="text" name="contact_no" class="form-control inputno1" placeholder="Contact Number" value="{{$item->contact_no}}"  aria-describedby="basic-addon4" required>

                                                                </div>

                                                                <div class="col-12 col-md-6 mb-3">
                                                                    <input type="email" name="email" class="form-control inputno1" placeholder="Email Id" value="{{$item->email}}"  aria-describedby="basic-addon4" required>

                                                                </div>

                                                            </div>



                                                        </div>
                                                        <!-- end of col  -->


                                                    </div>
                                                    <!-- end of inner row  -->

                                                    <hr class="my-3 bgcolor" style="opacity: 1;">

                                                    <div class="row">

                                                        <div class="col-12 col-md-6 mt-3">
                                                            <input type="text" name="address1" class="form-control" placeholder="Address First Line" value="{{$item->address_line1}}" aria-label="addressfirst" required>
                                                        </div>
                                                        <div class="col-12 col-md-6 mt-3">
                                                            <input type="text" name="address2" class="form-control" placeholder="Address Second Line"  value="{{$item->address_line2}}"aria-label="addresssecode" >
                                                        </div>
                                                        <div class="col-12 col-md-6 mt-3">
                                                            <input type="text" name="area" class="form-control" placeholder="Enter Area"  value="{{$item->area}}" aria-label="area" required>
                                                        </div>
                                                        <div class="col-12 col-md-6 mt-3">
                                                            <select id="inputCity" name="city" class="form-select overflow-scroll " required>
                                                                @if ($item->city=='Pune')
                                                                    <option value="Pune" selected>Pune</option>
                                                                @else
                                                                    <option value=""  selected disabled>City</option>
                                                                    <option value="Pune">Pune</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-6 mt-3">
                                                            <select id="inputState" name="state" class="form-select overflow-scroll " required>
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
                                                            <select id="inputDistrict" name="district" class="form-select overflow-scroll " required>
                                                                @if ($item->district=='Pune')
                                                                    <option value="Pune" selected>Pune</option>
                                                                @else
                                                                    <option value="" selected disabled>District</option>
                                                                    <option value="Pune">Pune</option>
                                                                @endif

                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 mt-3">
                                                            <select id="inputTaluka" name="taluka" class="form-select overflow-scroll " required>
                                                                @if ($item->taluka=='Pune')
                                                                    <option value="Pune" selected>Pune</option>
                                                                @else
                                                                    <option value="" selected disabled>Taluka</option>
                                                                    <option value="Pune">Pune</option>
                                                                @endif

                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-md-6 mt-3">
                                                            <input type="number" name="pin_code" class="form-control" placeholder="Pin Code" aria-label="pincode" value="{{$item->zipcode}}" required>
                                                        </div>

                                                        <hr class="mt-5 mb-3 bgcolor" style="opacity: 0.6;">
                                                        <div class="col-12 text-center mx-auto col-md-3 mb-5">
                                                            <button type="submit"  class="px-3 px-md-5 text-light py-2 border bg_danger border-secondary">Update</button>
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
        {{-- end model --}}
        <div class="modal fade" id="exampleModal{{$item->user_id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$item->user_id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{$item->user_id}}">Alert {{$item->user_id}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center p-4">
                        <p class="fw-bold text-secondary">Are You sure to Delete this user </p>
                    </div>
                    <form action="{{route('deleteUser')}}" method="POST">
                        @csrf
                        <div class="modal-foote d-flex">
                            <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">No</button></a>
                            <input type="hidden" name="user_id" value="{{$item->user_id}}">
                            <input type="submit" class="btn border form-control btnhover" value="Yes"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </td>
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
            {{-- {{ $data->render("pagination::bootstrap-4") }} --}}


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

            <form action="{{route('register_user')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row pad-50 justify-content-around" id="edit_profile">


                    <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">

                        <h4 class="border-start border-5 tcolor " style="border-color: #0572B2 !important;">Add User</h4>

                        <img src="{{asset('images/user-img.png')}}" class="profile_img my-3" alt="img not found" >


                        <input type="file" name="profile" class="bg-transparent border border-light profilebtn btnhover px-3 py-2" style="border-radius: 5px;" value="Upload Profile Photo" required/>


                    </div>
                    <!-- end of col-3 -->

                    <div class="col-12 col-md-7">

                        <div class="row">

                            <div class="col-12">

                                <div class="row">
                                    <label for="fullname" class="form-label fw-bold fs-5">Personal Details</label>

                                    <div class="col-12 col-md-6 mb-3">

                                        <input type="text" name="full_name" class="form-control mb-4" id="fullname" placeholder="Full Name" required>
                                    </div>
                                    <!-- end of col  -->

                                    <div class="col-12 col-md-6 mb-3">

                                        <input type="text" name="farm_name" class="Farm_name" class="form-control" id="fullname" placeholder="Farm Name " required>

                                    </div>
                                    <!-- end of col  -->

                                </div>


                            </div>
                            <!-- end of inner col  -->
                            <hr class="my-3 bgcolor" style="opacity: 1;">

                            <div class="col-12 d-flex py-2 align-items-center">

                                <span class="fw-bold me-3"> Owner Status</span>

                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="owner_Status" value="owner" id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Owner
                                    </label>
                                </div>
                                <div class="form-check ms-4">
                                    <input class="form-check-input" type="radio" name="owner_Status" value="agent" id="flexRadioDefault2" required>
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
                                    <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check ms-4">
                                    <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2" required>
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
                                        <input type="text" name="contact_no" class="form-control inputno1" placeholder="Contact Number"  aria-describedby="basic-addon4" required>

                                    </div>

                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="email" name="email" class="form-control inputno1" placeholder="Email Id"  aria-describedby="basic-addon4" required>

                                    </div>

                                </div>



                            </div>
                            <!-- end of col  -->


                        </div>
                        <!-- end of inner row  -->

                        <hr class="my-3 bgcolor" style="opacity: 1;">

                        <div class="row">

                            <div class="col-12 col-md-6 mt-3">
                                <input type="text" name="address1" class="form-control" placeholder="Address First Line" aria-label="addressfirst" required>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <input type="text" name="address2" class="form-control" placeholder="Address Second Line" aria-label="addresssecode" >
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <input type="text" name="area" class="form-control" placeholder="Enter Area" aria-label="area" required>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <select id="inputCity" name="city" class="form-select overflow-scroll " required>
                                    <option value=""  selected disabled>City</option>
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
                                <input type="number" name="pin_code" class="form-control" placeholder="Pin Code" aria-label="pincode" required>
                            </div>

                            <hr class="mt-5 mb-3 bgcolor" style="opacity: 0.6;">
                            <div class="col-12 text-center mx-auto col-md-3 mb-5">
                                <button type="submit"  class="px-3 px-md-5 text-light py-2 border bg_danger border-secondary">Save</button>
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










    <!-- user edit canvas  -->

    @foreach ($data as $users)
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2{{$users->user_id}}" aria-labelledby="offcanvasRightLabel" style="  width: 70%;">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">

                </h5>
                <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div class="row pad-50 justify-content-around" id="edit_profile">


                    <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">

                        <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">View User</h4>

                        <img src="{{asset($users->image)}}" class="profile_img my-3" alt="img not found">


                        {{-- <button type="file" class="bg-transparent  profilebtn btnhover px-3 py-2" style="border-radius: 5px;">Upload Profile Picture</button> --}}


                    </div>
                    <!-- end of col-3 -->

                    <div class="col-12 col-md-7">

                        <form action="" method="post" >

                            <div class="row">

                                <div class="col-12">

                                    <div class="row">
                                        <label for="fullname" class="form-label fw-bold fs-5">Personal Details</label>

                                        <div class="col-12 col-md-6 mb-3">

                                            <input type="text" class="form-control mb-4" id="fullname" value="{{$users->first_name}}" placeholder="Full Name">


                                        </div>
                                        <!-- end of col  -->

                                        <div class="col-12 col-md-6">

                                            <input type="text" class="form-control" value="{{$users->farm_name}}" id="fullname" placeholder="Farm Name">

                                        </div>
                                        <!-- end of col  -->

                                    </div>


                                </div>
                                <!-- end of inner col  -->
                                <hr class="my-3 bgcolor" style="opacity: 1;">

                                <div class="col-12 d-flex py-2 align-items-center">

                                    <span class="fw-bold me-3"> Owner Status</span>

                                    @if ($users->owner_status=='owner')
                                        <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Owner
                                            </label>
                                        </div>
                                    @elseif ($users->owner_status=='agent')
                                        <div class="form-check ms-4">
                                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Agent
                                            </label>
                                        </div>
                                    @endif


                                </div>
                                <!-- end of col  -->
                                <hr class="my-3 bgcolor" style="opacity: 1;">

                                <div class="col-12 d-flex py-2 align-items-center">

                                    <span class="fw-bold me-3">Premium Member</span>

                                    @if ($users->membership_type==1)
                                        <div class="form-check ms-3">
                                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                    @endif
                                    @if ($users->membership_type==0)
                                        <div class="form-check ms-4">
                                            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                No
                                            </label>
                                        </div>
                                    @endif


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
                                            <input type="text" class="form-control inputno1" placeholder="Contact Number" value="{{$users->contact_no}}"  aria-describedby="basic-addon4">

                                        </div>

                                        <div class="col-12 col-md-6 mb-3">
                                            <input type="text" class="form-control inputno1" placeholder="Email Id" value="{{$users->email}}" aria-describedby="basic-addon4">

                                        </div>

                                    </div>

                                </div>
                                <!-- end of col  -->


                            </div>
                            <!-- end of inner row  -->

                            <hr class="my-3 bgcolor" style="opacity: 1;">

                            <div class="row">

                                <div class="col-12 col-md-6 mt-3">
                                    <input type="text" class="form-control" placeholder="Address First Line" value="{{$users->address_line1}}" aria-label="addressfirst">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                    <input type="text" class="form-control" placeholder="Address Second Line" value="{{$users->address_line2}}" aria-label="addresssecode">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                    <input type="text" class="form-control" placeholder="Enter Area" value="{{$users->area}}" aria-label="area">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                    <select id="inputCity" class="form-select overflow-scroll ">
                                        <option value="" selected disabled>City</option>
                                        @if ($users->city=='Pune')
                                            <option value="Pune" selected>Pune</option>
                                        @endif

                                    </select>
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                    <select id="inputState" class="form-select overflow-scroll ">
                                        <option value="" selected disabled>State</option>
                                        @if ($users->state=="Andhra Pradesh")
                                            <option value="Andhra Pradesh" selected>Andhra Pradesh</option>
                                        @endif
                                        @if ($users->state=="Andaman and Nicobar Islands")
                                            <option value="Andaman and Nicobar Islands" selected>Andaman and Nicobar Islands</option>
                                        @endif
                                        @if ($users->state=="Arunachal Pradesh")
                                            <option value="Arunachal Pradesh" selected>Arunachal Pradesh</option>
                                        @endif
                                        @if ($users->state=="Assam")
                                            <option value="Assam" selected>Assam</option>
                                        @endif
                                        @if ($users->state=="Bihar")
                                            <option value="Bihar" selected>Bihar</option>
                                        @endif
                                        @if ($users->state=="Chandigarh")
                                            <option value="Chandigarh" selected>Chandigarh</option>
                                        @endif
                                        @if ($users->state=="Chhattisgarh")
                                            <option value="Chhattisgarh" selected>Chhattisgarh</option>
                                        @endif
                                        @if ($users->state=="Dadar and Nagar Haveli")
                                            <option value="Dadar and Nagar Haveli" selected>Dadar and Nagar Haveli</option>
                                        @endif
                                        @if ($users->state=="Daman and Diu")
                                            <option value="Daman and Diu" selected>Daman and Diu</option>
                                        @endif
                                        @if ($users->state=="Delhi")
                                            <option value="Delhi" selected>Delhi</option>
                                        @endif
                                        @if ($users->state=="Lakshadweep")
                                            <option value="Lakshadweep" selected>Lakshadweep</option>
                                        @endif
                                        @if ($users->state=="Puducherry")
                                            <option value="Puducherry " selected>Puducherry</option>
                                        @endif
                                        @if ($users->state=="Goa")
                                            <option value="Goa" selected>Goa</option>
                                        @endif
                                        @if ($users->state=="Gujarat")
                                            <option value="Gujarat" selected>Gujarat</option>
                                        @endif
                                        @if ($users->state=="Haryana")
                                            <option value="Haryana" selected>Haryana</option>
                                        @endif
                                        @if ($users->state=="Himachal Pradesh")
                                            <option value="Himachal Pradesh" selected>Himachal Pradesh</option>
                                        @endif
                                        @if ($users->state=="Jammu and Kashmir")
                                            <option value="Jammu and Kashmir" selected>Jammu and Kashmir</option>
                                        @endif
                                        @if ($users->state=="Jharkhand")
                                            <option value="Jharkhand" selected>Jharkhand</option>
                                        @endif
                                        @if ($users->state=="Karnataka")
                                            <option value="Karnataka" selected>Karnataka</option>
                                        @endif
                                        @if ($users->state=="Kerala")
                                            <option value="Kerala" selected>Kerala</option>
                                        @endif
                                        @if ($users->state=="Madhya Pradesh")
                                            <option value="Madhya Pradesh" selected>Madhya Pradesh</option>
                                        @endif
                                        @if ($users->state=="Maharashtra")
                                            <option value="Maharashtra" selected>Maharashtra</option>
                                        @endif
                                        @if ($users->state=="Manipur")
                                            <option value="Manipur" selected>Manipur</option>
                                        @endif
                                        @if ($users->state=="Meghalaya")
                                            <option value="Meghalaya" selected>Meghalaya</option>
                                        @endif
                                        @if ($users->state=="Mizoram")
                                            <option value="Mizoram" selected>Mizoram</option>
                                        @endif
                                        @if ($users->state=="Nagaland")
                                            <option value="Nagaland" selected>Nagaland</option>
                                        @endif
                                        @if ($users->state=="Odisha")
                                            <option value="Odisha" selected>Odisha</option>
                                        @endif
                                        @if ($users->state=="Punjab")
                                            <option value="Punjab" selected>Punjab</option>
                                        @endif
                                        @if ($users->state=="Rajasthan")
                                            <option value="Rajasthan" selected>Rajasthan</option>
                                        @endif
                                        @if ($users->state=="Sikkim")
                                            <option value="Sikkim" selected>Sikkim</option>
                                        @endif
                                        @if ($users->state=="Tamil Nadu")
                                            <option value="Tamil Nadu" selected>Tamil Nadu</option>
                                        @endif
                                        @if ($users->state=="Telangana")
                                            <option value="Telangana" selected>Telangana</option>
                                        @endif
                                        @if ($users->state=="Tripura")
                                            <option value="Tripura" selected>Tripura</option>
                                        @endif
                                        @if ($users->state=="Uttar Pradesh")
                                            <option value="Uttar Pradesh" selected>Uttar Pradesh</option>
                                        @endif
                                        @if ($users->state=="Uttarakhand")
                                            <option value="Uttarakhand" selected>Uttarakhand</option>
                                        @endif
                                        @if ($users->state=="West Bengal")
                                            <option value="West Bengal" selected>West Bengal</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="col-12 col-md-6 mt-3">
                                    <select id="inputDistrict" class="form-select overflow-scroll ">
                                        <option value="" selected disabled>District</option>
                                        @if ($users->district=='Pune')
                                            <option value="Pune" selected>Pune</option>
                                        @endif

                                    </select>
                                </div>

                                <div class="col-12 col-md-6 mt-3">
                                    <select id="inputTaluka" class="form-select overflow-scroll ">
                                        <option value="" selected disabled>Taluka</option>
                                        @if ($users->taluka=='Pune')
                                            <option value="Pune" selected>Pune</option>
                                        @endif

                                    </select>
                                </div>

                                <div class="col-12 col-md-6 mt-3">
                                    <input type="number" class="form-control" value="{{$users->zipcode}}" placeholder="Pin Code" aria-label="pincode">
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

    @endforeach



    <script>
        function downloadCSV(csv, filename) {
            let csvFile;
            let downloadLink;

            // CSV file
            csvFile = new Blob([csv], {type: "text/csv"});

            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Hide download link
            downloadLink.style.display = "none";

            // Add the link to DOM
            document.body.appendChild(downloadLink);

            // Click download link
            downloadLink.click();
        }
        function exportTableToCSV(filename) {
            let csv = [];
            let rows = document.querySelectorAll("table tr");

            for (let i = 0; i < rows.length; i++) {
                let row = [], cols = rows[i].querySelectorAll("td, th");

                for (let j = 0; j < cols.length; j++)
                    row.push(cols[j].innerText);

                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCSV(csv.join("\n"), filename);
        }
    </script>
@endsection

{{--<script>--}}
{{--    function downloadCSV(csv, filename) {--}}
{{--        let csvFile;--}}
{{--        let downloadLink;--}}

{{--        // CSV file--}}
{{--        csvFile = new Blob([csv], {type: "text/csv"});--}}

{{--        // Download link--}}
{{--        downloadLink = document.createElement("a");--}}

{{--        // File name--}}
{{--        downloadLink.download = filename;--}}

{{--        // Create a link to the file--}}
{{--        downloadLink.href = window.URL.createObjectURL(csvFile);--}}

{{--        // Hide download link--}}
{{--        downloadLink.style.display = "none";--}}

{{--        // Add the link to DOM--}}
{{--        document.body.appendChild(downloadLink);--}}

{{--        // Click download link--}}
{{--        downloadLink.click();--}}
{{--    }--}}
{{--</script>--}}
{{--<script>--}}
{{--    function exportTableToCSV(filename) {--}}
{{--        let csv = [];--}}
{{--        let rows = document.querySelectorAll("table tr");--}}

{{--        for (let i = 0; i < rows.length; i++) {--}}
{{--            let row = [], cols = rows[i].querySelectorAll("td, th");--}}

{{--            for (let j = 0; j < cols.length; j++)--}}
{{--                row.push(cols[j].innerText);--}}
{{--            csv.push(row.join(","));--}}
{{--        }--}}

{{--        // Download CSV file--}}
{{--        downloadCSV(csv.join("\n"), filename);--}}
{{--    }--}}
{{--</script>--}}
