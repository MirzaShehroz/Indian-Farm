@extends('app.dashboard')
@section('title','Vet')
@section('pill')
<div class="px-4 pt-4 position-relative" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

  <div class="row">

    <form action="{{route('vet_search')}}" method="post">
      @csrf
      <div class="col-12 d-md-flex mt-3">

        <input type="text" name="full_name" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchName')}} " id="">


        <input type="text" name="city" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchCity')}}" id="">
        <input type="text" name="state" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchState')}}" id="">
        <input type="text" name="district" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchDist')}} " id="">
        <input type="text" name="taluka" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchTaluka')}}" id="">



      </div>
      <!-- end of col  -->

      <div class="col-12 mt-3">

        <button class="bg_danger px-5 py-2 rounded-pill text-light " name="">{{__('eng.search')}}</button>
      </div>
    </form>
      <!-- end of col   -->

      <div class="col-12 mt-4">

        <div class="text-end d-flex d-md-block ">
          <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas"
            data-bs-target="#edit_vet" aria-controls="edit_vet" type="button">
            {{__('eng.addVet')}}
          </button>
          <button onclick="exportTableToCSV('record.csv')" class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
            {{__('eng.exportCsv')}}
          </button>

        </div>

        <div class="col-12 overflow-scroll mt-5">

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">{{__('eng.userId')}}</th>
                <th scope="col">{{__('eng.firstName')}}</th>
                <th scope="col">{{__('eng.middleName')}}</th>
                <th scope="col">{{__('eng.lastName')}}</th>
                <th scope="col">{{__('eng.licenseNo')}} </th>
                <th scope="col">{{__('eng.registCouncil')}}</th>
                <th scope="col">{{__('eng.vcRegistNum')}}</th>
                <th scope="col">{{__('eng.contactNum')}} </th>


                <th scope="col">{{__('eng.emailId')}}</th>
                <th scope="col">{{__('eng.address1')}}</th>
                <th scope="col">{{__('eng.address2')}}</th>


                <th scope="col">{{__('eng.area')}}</th>
                <th scope="col">{{__('eng.city')}}</th>
                <th scope="col">{{__('eng.state')}}</th>
                <th scope="col">{{__('eng.district')}}</th>
                <th scope="col">{{__('eng.taluka')}}</th>
                <th scope="col">{{__('eng.pinCode')}}</th>

                <th scope="col">{{__('eng.action')}}</th>
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
                                <h5 class="modal-title" id="exampleModalLabel">{{__('eng.alert')}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="{{route('deleteVet')}}" method="POST">
                              <div class="modal-body text-center p-4">
                                <p class="fw-bold text-secondary">{{__('eng.deletingMsg')}} </p>
                              </div>
                              <div class="modal-foote d-flex">
                                <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover"
                                    data-bs-dismiss="modal">{{__('eng.no')}}</button></a>

                                      @csrf
                                      <input type="hidden" value="{{$item->user_id}}" name="user_id">
                                     <button type="submit"
                                          class="btn border form-control btnhover">{{__('eng.yes')}}</button>
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
                    
                            <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">{{__('eng.viewVet')}}</h4>
                    
                            <img src="{{ asset($item->image) }}" class="profile_img my-3" alt="img not found">
                    
                    
                            {{-- <button type="file" class="bg-transparent  profilebtn btnhover px-3 py-2" style="border-radius: 5px;">Upload
                              Profile Picture</button> --}}
                    
                            <div class="row mt-5">
                    
                              <div class="col-12">
                    
                                <h5 class="mb-4"> {{__('eng.documents')}}</h5>
                                <a href="{{$item->document1}}" target="blank"> {{__('eng.viewDocument')}}</a>
                                @if ($item->document2)
                                <a href="{{$item->document2}}" target="blank"> {{__('eng.viewDocument')}}</a>
                                @endif
                                @if ($item->document3)
                                <a href="{{$item->document3}}" target="blank"> {{__('eng.viewDocument')}}</a>
                                @endif
                                @if ($item->document4)
                                <a href="{{$item->document4}}" target="blank"> {{__('eng.viewDocument')}}</a>
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
                                    <label for="fullname" class="form-label fw-bold fs-5">{{__('eng.personalDetail')}}</label>
                    
                                    <div class="col-12 col-md-4">
                    
                                      <input disabled type="text" class="form-control mb-4" placeholder="{{__('eng.fullName')}}" value="{{$item->first_name}}" name="first_name">
                
                                    </div>
                                    <!-- end of col  -->
                    
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" placeholder="{{__('eng.middleName')}}" value="{{$item->middle_name}}" name="middle_name">
                    
                                    </div>
                                    <!-- end of col  -->
                    
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" value="{{$item->last_name}}" placeholder="{{__('eng.lastName')}}">
                    
                                    </div>
                                    <!-- end of col  -->
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" value="{{$item->license_no}}" placeholder="{{__('eng.licenseNo')}}">
                    
                                    </div>
                                    <!-- end of col  -->
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" value="{{$item->reg_vet_council}}" placeholder="{{__('eng.registCouncil')}}">
                    
                                    </div>
                                    <!-- end of col  -->
                                    <div class="col-12 col-md-4 mb-3">
                    
                                      <input disabled type="text" class="form-control" value="{{$item->vc_reg_no}}" placeholder="{{__('eng.vcRegistNum')}}">
                    
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
                    
                                  <label class="form-label fw-bold fs-5">{{__('eng.contactDetail')}}</label>
                    
                                  <div class="row">
                    
                                    <div class="col-12 col-md-6 mb-3">
                                      <input disabled type="text" class="form-control inputno1" value="{{$item->contact_no}}" placeholder="{{__('eng.contactNum')}}" disabled>
                                    </div>
                    
                                    <div class="col-12 col-md-6 mb-3">
                                      <input disabled type="text" class="form-control inputno1" value="{{$item->email}}" placeholder="{{__('eng.emailId')}}" disabled>
                    
                                    </div>
                
                                  </div>
                    
                                </div>
                                <!-- end of col  -->
                    
                    
                              </div>
                              <!-- end of inner row  -->
                    
                              <hr class="my-3 bgcolor" style="opacity: 1;">
                    
                              <div class="row">
                    
                                <div class="col-12 col-md-6 mt-3">
                                  <input disabled type="text" class="form-control" placeholder="{{__('eng.address1')}}" value="{{$item->address_line1}}" aria-label="addressfirst">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                  <input disabled type="text" class="form-control" placeholder="{{__('eng.address2')}}" value="{{$item->address_line2}}" aria-label="addresssecode">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                  <input disabled type="text" class="form-control" placeholder="{{__('eng.ebterArea')}}" value="{{$item->area}}" aria-label="area">
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                  <select id="inputCity" class="form-select overflow-scroll ">
                                    @if ($item->city)
                                    <option value="Pune" @checked(true)>Pune</option>
                                    @else
                                    <option value="" selected disabled>{{__('eng.city')}}</option>
                                    <option value="Pune">Pune</option>
                                    @endif
                    
                                  </select>
                                </div>
                                <div class="col-12 col-md-6 mt-3">
                                  <select id="inputState" class="form-select overflow-scroll ">
                                    @if ($item->state)
                                    <option value="{{$item->state}}" selected>{{$item->state}}</option>
                                    @else
                                    <option value="" selected disabled>{{__('eng.selectState')}}</option>                                        
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
                                    <option value="" selected disabled>{{__('eng.selectDist')}}</option>                                        
                                    @endif
                                    <option value="Pune">Pune</option>
                    
                                  </select>
                                </div>
                    
                                <div class="col-12 col-md-6 mt-3">
                                  <select id="inputTaluka" class="form-select overflow-scroll ">
                                    @if ($item->taluka)
                                    <option value="{{$item->taluka}}" selected>{{$item->taluka}}</option>
                                    @else
                                    <option value="" selected disabled>{{__('eng.selectTalukla')}}</option>
                                    @endif
                                    <option value="Pune">Pune</option>
                                  </select>
                                </div>
                    
                                <div class="col-12 col-md-6 mt-3">
                                  <input disabled type="text" class="form-control" placeholder="{{__('eng.pinCode')}}" value="{{$item->zipcode}}" aria-label="pincode">
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
              
                        <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">{{__('eng.editVet')}}</h4>
              
                        <img src="{{ asset($item->image) }}" class="profile_img my-3"
                          alt="img not found">
              
                          <input type="file" name="profile" class="form-control d-block mt-3" id="doc1" >
              
                        <div class="row mt-5">
              
                          <div class="col-12">
              
                            <h5 class="mb-4"> {{__('eng.documents')}}</h5>
                            <a href="{{$item->document1}}" target="blank">{{__('eng.viewDocument')}}</a>
                            <input type="file" name="doc1" class="form-control d-block mt-3" id="doc1" >
                            <a href="{{$item->document2}}" target="blank">{{__('eng.viewDocument')}}</a>
                            <input type="file" name="doc2" class="form-control d-block mt-3" id="doc2">
                            <a href="{{$item->document3}}" target="blank">{{__('eng.viewDocument')}}</a>
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
                              <label for="fullname" class="form-label fw-bold fs-5">{{__('eng.personalDetail')}}</label>
              
                              <div class="col-12 col-md-4">
              
                                <input type="text" class="form-control mb-4" placeholder="{{__('eng.firstName')}}" value="{{$item->first_name}}" name="first_name" required>
              
                              </div>
                              <!-- end of col  -->
              
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" class="form-control" placeholder="{{__('eng.middleName')}}" value="{{$item->middle_name}}" name="middle_name">
              
                              </div>
                              <!-- end of col  -->
              
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" name="last_name" class="form-control" value="{{$item->last_name}}" placeholder="{{__('eng.lastName')}}">
              
                              </div>
                              <!-- end of col  -->
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" class="form-control" placeholder="{{__('eng.licenseNo')}}" value="{{$item->license_no}}" name="license_no" required>
              
                              </div>
                              <!-- end of col  -->
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" class="form-control" placeholder="{{__('eng.registCouncil')}}" value="{{$item->reg_vet_council	}}" name="reg_vet_council" required>
              
                              </div>
                              <!-- end of col  -->
                              <div class="col-12 col-md-4 mb-3">
              
                                <input type="text" class="form-control" placeholder="{{__('eng.vcRegistNum')}}" value="{{$item->vc_reg_no}}" name="vc_reg_no" required>
              
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
              
                            <label class="form-label fw-bold fs-5">{{__('eng.contactDetail')}}</label>
              
                            <div class="row">
              
                              <div class="col-12 col-md-6 mb-3">
                                <input type="text" class="form-control inputno1" placeholder="{{__('eng.contact')}}" value="{{$item->contact_no}}" name="contact_no" required>
              
                              </div>
              
                              <div class="col-12 col-md-6 mb-3">
                                <input type="text" class="form-control inputno1" placeholder="{{__('eng.emailId')}}" value="{{$item->email}}" name="email" required>
              
                              </div>
                                <div class="col-12 col-md-6 mb-3">
                                  <input type="password" class="form-control inputno1" placeholder="{{__('eng.newPass')}}" name="new_password" >
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                  <input type="password" class="form-control inputno1" placeholder="{{__('eng.prevPass')}}" name="prev_password" >
                                </div>
                
                                <div class="col-12 col-md-6 mb-3">
                                  <input class="bg_danger text-light" type="submit" id="submitform" value="{{__('eng.changePass')}}"/>
                                </div>
                            </div>
              
                          </div>
                          <!-- end of col  -->
                        </div>
                        <!-- end of inner row  -->
              
                        <hr class="my-3 bgcolor" style="opacity: 1;">
              
                        <div class="row">
              
                          <div class="col-12 col-md-6 mt-3">
                            <input type="text" class="form-control" placeholder="{{__('eng.address1')}}" value="{{$item->address_line1}}" aria-label="addressfirst"
                              name="address_line1" required>
                          </div>
                          <div class="col-12 col-md-6 mt-3">
                            <input type="text" class="form-control" placeholder="{{__('eng.address2')}}" value="{{$item->address_line2}}" aria-label="addresssecode"
                              name="address_line2">
                          </div>
                          <div class="col-12 col-md-6 mt-3">
                            <input type="text" class="form-control" placeholder="{{__('eng.enterArea')}}" aria-label="area" value="{{$item->area}}" name="area" required>
                          </div>
                          <div class="col-12 col-md-6 mt-3">
                            <select id="inputCity" class="form-select overflow-scroll " name="city" required>
                              @if ($item->city)
                              <option value="{{$item->city}}" selected>{{$item->city}}</option>
                              @else
                              <option value="" selected disabled>{{__('eng.city')}}</option>
                              @endif
                              <option value="Pune">Pune</option>
              
                            </select>
                          </div>
                          <div class="col-12 col-md-6 mt-3">
                            <select id="inputState" class="form-select overflow-scroll " name="state" required>
                              @if ($item->state)
                              <option value="{{$item->state}}" selected>{{$item->state}}</option>
                              @else
                              <option value="" selected disabled>{{__('eng.selectState')}}</option>                                  
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
                              <option value="" selected disabled>{{__('eng.district')}}</option>
                              @endif
                              <option value="Pune">Pune</option>
                            </select>
                          </div>
              
                          <div class="col-12 col-md-6 mt-3">
                            <select id="inputTaluka" class="form-select overflow-scroll " name="taluke" required>
                              @if ($item->taluka)
                              <option value="{{$item->taluka}}">{{$item->taluka}}</option>
                              @else
                              <option value="" selected disabled>{{__('eng.taluka')}}</option>                                  
                              @endif
                              <option value="Pune">Pune</option>
                            </select>
                          </div>
              
                          <div class="col-12 col-md-6 mt-3">
                            <input type="number" class="form-control" placeholder="{{__('eng.pinCode')}}" value="{{$item->zipcode}}" aria-label="pincode" name="pincode" required>
                          </div>
              
              
                        </div>
                        <!-- end of inner row  -->
              
                        <div class="col-12 col-md-4 mb-3 mt-5 mx-auto text-center">
                          <button class="form-control bg_danger text-light " type="submit"> {{__('eng.save')}} </button>
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

{{--          <nav aria-label="Page navigation example">--}}
{{--            <ul class="pagination">--}}
{{--              <li class="page-item">--}}
{{--                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                  <span aria-hidden="true">&laquo;</span>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--              <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--              <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--              <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--              <li class="page-item">--}}
{{--                <a class="page-link" href="#" aria-label="Next">--}}
{{--                  <span aria-hidden="true">&raquo;</span>--}}
{{--                </a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </nav>--}}
          {{ $data->render("pagination::bootstrap-4") }}


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

          <h4 class="border-start border-5 tcolor" style="border-color: #0572B2 !important;">{{__('eng.addVet')}}</h4>

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
                <label for="fullname" class="form-label fw-bold fs-5">{{__('eng.personalDetail')}}</label>

                <div class="col-12 col-md-4">

                  <input type="text" class="form-control mb-4" placeholder="{{__('eng.firstName')}}" name="first_name" required>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" placeholder="{{__('eng.middleName')}}" name="middle_name">

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-4 mb-3">

                  <input type="text" name="last_name" class="form-control" placeholder="{{__('eng.lastName')}}">

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" placeholder="{{__('eng.licenseNo')}}" name="license_no" required>

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" placeholder="{{__('eng.registCouncil')}}" name="reg_vet_council" required>

                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 mb-3">

                  <input type="text" class="form-control" placeholder="{{__('eng.vcRegistNum')}}" name="vc_reg_no" required>

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

              <label class="form-label fw-bold fs-5">{{__('eng.contactDetail')}}</label>

              <div class="row">

                <div class="col-12 col-md-6 mb-3">
                  <input type="text" class="form-control inputno1" placeholder="{{__('eng.contactNum')}}" name="contact_no" required>

                </div>

                <div class="col-12 col-md-6 mb-3">
                  <input type="text" class="form-control inputno1" placeholder="{{__('eng.emailId')}}" name="email" required>

                </div>

                <div class="col-12 col-md-6 mb-3">
                  <input type="password" class="form-control inputno1" placeholder="{{__('eng.password')}}" name="password" required>
                </div>

                <div class="col-12 col-md-6 mb-3">
                  <button class="form-control bg_danger text-light">{{__('eng.changePass')}} </button>
                </div>

              </div>



            </div>
            <!-- end of col  -->


          </div>
          <!-- end of inner row  -->

          <hr class="my-3 bgcolor" style="opacity: 1;">

          <div class="row">

            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="{{__('eng.address1')}}" aria-label="addressfirst"
                name="address_line1" required>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="{{__('eng.address2')}}" aria-label="addresssecode"
                name="address_line2">
            </div>
            <div class="col-12 col-md-6 mt-3">
              <input type="text" class="form-control" placeholder="{{__('eng.enterArea')}}" aria-label="area" name="area" required>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <select id="inputCity" class="form-select overflow-scroll " name="city" required>
                <option value="" selected disabled>{{__('eng.city')}}</option>
                <option value="Pune">Pune</option>

              </select>
            </div>
            <div class="col-12 col-md-6 mt-3">
              <select id="inputState" class="form-select overflow-scroll " name="state" required>
                <option value="" selected disabled>{{__('eng.selectState')}}</option>
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
                <option value="" selected disabled>{{__('eng.district')}}</option>
                <option value="Pune">Pune</option>

              </select>
            </div>

            <div class="col-12 col-md-6 mt-3">
              <select id="inputTaluka" class="form-select overflow-scroll " name="taluke" required>
                <option value="" selected disabled>{{__('eng.taluka')}}</option>
                <option value="Pune">Pune</option>

              </select>
            </div>

            <div class="col-12 col-md-6 mt-3">
              <input type="number" class="form-control" placeholder="{{__('eng.pinCode')}}" aria-label="pincode" name="pincode" required>
            </div>


          </div>
          <!-- end of inner row  -->

          <div class="col-12 col-md-4 mb-3 mt-5 mx-auto text-center">
            <button class="form-control bg_danger text-light " type="submit"> {{__('eng.save')}} </button>
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