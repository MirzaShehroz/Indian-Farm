@extends('app.dashboard')
@section('title','Certify Animal')
@section('pill')
<div class="px-4 pt-4 position-relative" id="v-pills-settings3" role="tabpanel" aria-labelledby="v-pills-settings3-tab">

  <div class="row">

    <form action="{{route('certify_search')}}" method="POST">
      @csrf

      <div class="col-12 d-md-flex mt-3">

        <input type="text" name="animal" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchAnimal')}}   " id="">


        <input type="text" name="vet" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.seachByVet')}}" id="">
        <input type="text" name="city" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchCity')}}" id="">
        <input type="text" name="state" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchState')}}" id="">
        <input type="text" name="district" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchDist')}} " id="">
        <input type="text" name="taluka" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__('eng.searchTaluka')}}" id="">



      </div>
      <!-- end of col  -->

      <div class="col-12 mt-3">

        <button class="bg_danger px-5 py-2 rounded-pill text-light " name="">{{__('eng.search')}}</button>

      </div>
      <!-- end of col   -->
    </form>

    <div class="col-12 mt-4">

      <div class="text-end d-flex d-md-block ">
        <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light" data-bs-toggle="offcanvas"
          data-bs-target="#edit_certified" aria-controls="edit_certified" type="button">
          {{__('eng.addAppoint')}}
        </button>
        <button onclick="exportTableToCSV('record.csv')" class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
          {{__('eng.exportCsv')}}
        </button>

      </div>

      <div class="col-12 overflow-scroll mt-5">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">{{__('eng.userId')}} </th>
              <!-- <th scope="col">First Name</th>

              <th scope="col">Farm Name</th> -->

              <th scope="col">{{__('eng.contactNum')}} </th>



              <!-- <th scope="col">Email Id</th>
              <th scope="col">Farm Owner </th> -->
              <th scope="col">{{__('eng.displayAnimalType')}}</th>
              <th scope="col">{{__('eng.breed')}}</th>
              <th scope="col">{{__('eng.noAnimal')}}</th>

              <th scope="col">{{__('eng.address1')}}</th>
              <th scope="col">{{__('eng.address2')}}</th>


              <th scope="col">{{__('eng.area')}}</th>
              <th scope="col">{{__('eng.city')}}</th>
              <th scope="col">{{__('eng.state')}}</th>
              <th scope="col">{{__('eng.district')}}</th>
              <th scope="col">{{__('eng.taluka')}}</th>
              <th scope="col">{{__('eng.pinCode')}}</th>
              <th scope="col">{{__('eng.vetAssign')}}</th>
              <th scope="col">{{__('eng.certifiedStatus')}}</th>

              <th scope="col">{{__('eng.action')}}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($certify as $certify)
              <tr>
                <td scope="row">{{ $certify->user_id }}</td>
                <!-- <td>null</td>
                <td>null</td> -->
                <td>{{ $certify->contact_no }}</td>
                <!-- <td>null</td>
                <td>null</td> -->
                <td>
                  @if($certify->animal_type ==0)
                  {{__('eng.bull')}}
                  @elseif($certify->animal_type ==1)
                  {{__('eng.buffalo')}}
                  @elseif($certify->animal_type ==2)
                  {{__('eng.cow')}}
                  @elseif($certify->animal_type ==3)
                  {{__('eng.goat')}}
                  @elseif($certify->animal_type ==4)
                  {{__('eng.sheep')}} 
                  @endif
                </td>
                <td>{{ $certify->breed }}</td>
                <td>{{ $certify->no_of_animal }}</td>
                <td>{{ $certify->address_line1 }}</td>
                <td>{{ $certify->address_line2 }}</td>
                <td>{{ $certify->area }}</td>

                <td>{{ $certify->city }}</td>
                <td>{{ $certify->state }}</td>
                <td>{{ $certify->district }}</td>
                <td>{{ $certify->taluka }}</td>
                <td>{{ $certify->zipcode }}</td>
                <!-- <td>{{ $certify->vet_id }}</td> -->
                <td>{{vetname($certify->vet_id)}}</td>
                @if($certify->certified_status==1)
                  <td>{{__('eng.done')}}</td>
                @else
                  <td>{{__('eng.pending')}}</td>
                @endif
                {{-- <td>1</td> --}}



                <td class="d-flex">
                  <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#edit_certified{{$certify->id}}"
                    aria-controls="edit_certified" type="button"><i class="fas fa-pencil-alt"></i></button>
                  <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas"
                    data-bs-target="#view_certified{{ $certify->user_id }}" aria-controls="view_certified"
                    type="button"><i class="fas fa-eye"></i></button>
                  <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal6"
                    type="button"><i class="far fa-trash-alt"></i></button>

                  <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{__("eng.alert")}}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('deleteCertify') }}" method="POST">
                          <div class="modal-body text-center p-4">
                            <p class="fw-bold text-secondary"> {{__("eng.deleteVetAlert")}}</p>
                          </div>
                          <div class="modal-foote d-flex">
                            <a href="#" class="text-decoration-none col-6"><button type="button"
                                class="btn border form-control btnhover" data-bs-dismiss="modal">{{__("eng.no")}}</button></a>

                            @csrf
                            <input type="hidden" value="{{ $certify->id }}" name="id">
                            <a href="#" class="text-decoration-none col-6"><button type="submit"
                                class="btn border form-control btnhover">{{__("eng.yes")}}</button></a>
                        </form>

                      </div>
                    </div>
                  </div>
                </td>


                <td>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_certified{{$certify->id}}" aria-labelledby="offcanvasRightLabel" style="width:70%;">
                    <div class="offcanvas-header">
                      <h5 id="offcanvasRightLabel">
                  
                      </h5>
                      <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                  
                      <div class="row pad-50 p-2 px-lg-5 justify-content-around">
                  
                        <h4 class="mt-5 mb-4 mt-md-0">{{__("eng.editCertify")}}</h4>
                  
                        <div class="col-12">
                  
                          <form action="{{ route('update') }}" method="post">
                            @csrf
                            <div class="row">
                              
                              <input type="hidden" value="{{$certify->id}}" name="id">
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <select id="animaltype" class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype">
                                  @if ($certify->animal_type)
                                  <option value="{{$certify->animal_type}}" selected>{{$certify->animal_type}}</option>
                                  @else
                                  <option value="" disabled selected>{{__("eng.animalType")}}</option>
                                  @endif
                                  <option value="Cow">{{__("eng.cow")}}</option>
                                  <option value="Buffalo">{{__("eng.buffalo")}}</option>
                                  <option value="Bull">{{__("eng.bull")}}</option>
                                  <option value="Sheep">{{__("eng.sheep")}}</option>
                                  <option value="Goat"> {{__("eng.goat")}}</option>
                                </select>
                  
                              </div>
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="number" name="animalsno" id="" value="{{$certify->no_of_animal}}" class="form-control" placeholder="{{__("eng.noAnimal")}} ">
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="text" name="breed" id="" value="{{$certify->breed}}" class="form-control" placeholder="{{__("eng.breed")}}">
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="text" name="personname" id="" value="{{$certify->contact_name}}" class="form-control" placeholder="{{__("eng.personName")}}">
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                  
                            </div>
                            <!-- end of row  -->
                  
                  
                            <div class="row">
                  
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="tel" name="mobileno" id="" value="{{$certify->contact_no}}"  class="form-control" placeholder="{{__("eng.contactNum")}}">
                  
                              </div>
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="text" name="address1" id="" value="{{$certify->address_line1}}" class="form-control" placeholder="{{__("eng.address1")}} ">
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="text" name="address2" id="" value="{{$certify->address_line2}}" class="form-control" placeholder="{{__("eng.address2")}}">
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="text" name="area" id="" value="{{$certify->area}}" class="form-control" placeholder="{{__("eng.area")}} ">
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                  
                  
                            </div>
                            <!-- end of row  -->
                  
                            <div class="row">
                  
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <div class="Districdropdown">
                                  <select id="inputDistrict" name="city" class="form-select overflow-scroll  ">
                                    @if ($certify->city)
                                    <option value="{{$certify->city}}" selected>{{$certify->city}}</option>
                                    @else
                                    <option value="" selected disabled>{{__("eng.city")}}</option>
                                    @endif
                                    <option value="pune">pune</option>
                                    <option value="goa">goa</option>
                                  </select>
                                </div>
                  
                  
                              </div>
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <div class="startdropdown">
                  
                                  <select id="inputState" name="state" class="form-select overflow-scroll ">
                                    @if ($certify->state)
                                    <option value="{{$certify->state}}" selected>{{$certify->state}}</option>
                                    @else
                                    <option selected disabled> {{__("eng.selectState")}}</option>
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
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <div class="Districdropdown">
                                  <select id="inputDistrict" name="district" class="form-select overflow-scroll  ">
                                    @if ($certify->district)
                                    <option value="{{$certify->district}}" selected>{{$certify->district}}</option>
                                    @else
                                    <option value="" selected disabled> {{__("eng.district")}}</option>
                                    @endif
                                    <option value="pune">Pune</option>
                  
                  
                                  </select>
                                </div>
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <div class="Districdropdown">
                                  <select id="inputTaluka" name="taluka" class="form-select overflow-scroll  ">
                                    @if ($certify->taluka)
                                    <option value="{{$certify->taluka}}" selected>{{$certify->taluka}}</option>
                                    @else
                                    <option value="">{{__("eng.selectTaluka")}}</option>
                                    @endif
                                    <option value="pune">pune</option>
                                    <option value="goa">goa</option>
                  
                                  </select>
                                </div>
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                  
                  
                            </div>
                            <!-- end of row  -->
                  
                  
                            <div class="row">
                  
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="number" name="pincode" value="{{$certify->zipcode}}" id="" class="form-control" placeholder="{{__("eng.pinCode")}}">
                  
                  
                              </div>
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="date" name="appoint_date" id="" value="{{$certify->appointment_date}}" class="form-control" placeholder="{{__("eng.appointmentDate")}}">
                  
                  
                              </div>
                              <!-- end of col  -->
                  
                              <div class="col-md-4 col-lg-3 my-3">
                  
                                <input type="time" name="appoint_time" id="" value="{{$certify->appointment_time}}" class="form-control" placeholder="{{__("eng.appointmentTime")}}">
                  
                              </div>
                              <!-- end of col  -->
                  
                            </div>
                            <!-- end of row  -->
                  
                            <div class="row justify-content-around mt-3 text-center">
                  
                              <div class="col-12 col-md-6 text-start pb-5">
                                <label for="price" class="form-label tcolor fw-bold">{{__("eng.comment")}}</label>
                                <br>
                                <textarea name="comment" placeholder="   {{__("eng.comment")}}" class="comment form-control" id="" value="{{$certify->comment}}" rows="5">{{$certify->comment}}</textarea>
                  
                              </div>
                              <!-- end of col  -->
                  
                              <div class="row">
                  
                                <div class="col-12 col-md-4 mt-3">
                  
                                  <div class="Districdropdown">
                                    <select id="assignvet" name="vet_assign" class="form-select overflow-scroll  ">
                                      @if ($certify->vet_id)
                                      <option value="{{ $certify->vet_id }}" selected>{{ $certify->vet_id}}</option>
                                      @else
                                      <option value="" disabled selected> {{__("eng.vetAssign")}} </option>
                                      @endif

                                      @foreach($vets as $item)
                                        <option value="{{ $item->id }}">{{ getname($item->user_id) }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                  
                                </div>
                  
                                <div class="col-12 col-md-4 mt-3">
                  
                                  <div class="Districdropdown">
                                    <select id="appointstatus" name="certify_status" class="form-select overflow-scroll  ">
                                      <option value="" disabled selected>{{__("eng.certifiesStatus")}} </option>
                                      <option value="1" {{ $certify->certified_status==1 ?'selected':null }} >{{__("eng.done")}}</option>
                                      <option value="0"  {{ $certify->certified_status==0 ?'selected':null }}>{{__("eng.pending")}}</option>
                                    </select>
                                  </div>
                  
                                </div>
                  
                                <div class="col-12 col-md-4 mt-3">
                  
                                  <textarea name="vet_comment" placeholder="  {{__("eng.vetComment")}}" class="comment form-control" id=""
                                    rows="5"></textarea>
                  
                                </div>
                  
                  
                  
                              </div>
                  
                              <div class="col-12 mt-4">
                  
                                <button id="submitbtn" type="submit"
                                  class="btn rounded-pill btnsubmit bg_danger textli px-5 text-light border_color2 py-2 btnhover2">
                                  {{__("eng.submit")}}
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
                </td>


                <td>
                  {{-- view model --}}

                  <!-- certified tab  view off anvas  -->
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="view_certified{{ $certify->user_id }}"
                    aria-labelledby="offcanvasRightLabel" style="width: 70%;">
                    <div class="offcanvas-header">
                      <h5 id="offcanvasRightLabel">

                      </h5>
                      <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                      <div class="row pad-50 p-2 px-lg-5 justify-content-around">

                        <h4 class="mt-5 mb-4 mt-md-0">{{__("eng.viewCertify")}}</h4>

                        <div class="col-12">

                          <div class="row">


                            <div class="col-md-4 col-lg-3 my-3">

                              <select id="animaltype" class="form-select" onchange="showDiv('hidden_div', this)"
                                name="animaltype">
                                @if($certify->animal_type)
                                  <option value="{{ $certify->animal_type }}" disabled selected>
                                    {{ $certify->animal_type }}</option>
                                @else
                                  <option value="" disabled selected>{{__("eng.")}}{{__("eng.animalType")}}</option>
                                @endif
                                <option value="Cow">{{__("eng.cow")}}</option>
                                <option value="Buffalo">{{__("eng.buffalo")}}</option>
                                <option value="Bull">{{__("eng.bull")}}</option>
                                <option value="Sheep">{{__("eng.sheep")}}</option>
                                <option value="Goat"> {{__("eng.goat")}}</option>
                              </select>

                            </div>

                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="animalsno" id="" value="{{ $certify->no_of_animal }}"
                                class="form-control" placeholder="{{__("eng.noAnimal")}} ">


                            </div>
                            <!-- end of col  -->

                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="Breed" id="" value="{{ $certify->breed }}" class="form-control"
                                placeholder="{{__("eng.breed")}}">


                            </div>
                            <!-- end of col  -->

                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="personname" id="" class="form-control"
                                value="{{ $certify->contact_name }}" placeholder="{{__("eng.personName")}}">
                            </div>
                            <!-- end of col  -->


                          </div>
                          <!-- end of row  -->


                          <div class="row">


                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="mobileno" id="" value="{{ $certify->contact_no }}"
                                class="form-control" placeholder="{{__("eng.contactNum")}}">

                            </div>

                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="address1" id="" class="form-control"
                                value="{{ $certify->address_line1 }}" placeholder="{{__("eng.address1")}}">


                            </div>
                            <!-- end of col  -->

                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="address2" id="" class="form-control"
                                value="{{ $certify->address_line2 }}" placeholder="{{__("eng.address2")}}">


                            </div>
                            <!-- end of col  -->

                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="Area" id="" value="{{ $certify->area }}" class="form-control"
                                placeholder="{{__("eng.area")}} ">


                            </div>
                            <!-- end of col  -->



                          </div>
                          <!-- end of row  -->

                          <div class="row">


                            <div class="col-md-4 col-lg-3 my-3">

                              <div class="Districdropdown">
                                <select id="inputDistrict" class="form-select overflow-scroll  " disabled>
                                  @if($certify->city)
                                    <option value="{{ $certify->city }}">{{ $certify->city }}</option>
                                  @else
                                    <option value="">{{__("eng.city")}}</option>
                                  @endif
                                </select>
                              </div>


                            </div>

                            <div class="col-md-4 col-lg-3 my-3">

                              <div class="startdropdown">

                                <select id="inputState" class="form-select overflow-scroll " disabled>
                                  @if($certify->state)
                                    <option value="{{ $certify->state }}">{{ $certify->state }}</option>
                                  @else
                                    <option selected disabled> {{__("eng.state")}}</option>
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


                            </div>
                            <!-- end of col  -->

                            <div class="col-md-4 col-lg-3 my-3">

                              <div class="Districdropdown">
                                <select id="inputDistrict" class="form-select overflow-scroll  " disabled>
                                  @if($certify->disctrict)
                                    <option value="{{ $certify->disctrict }}">{{ $certify->disctrict }}</option>
                                  @else
                                    <option value=""> {{__("eng.district")}}</option>
                                  @endif
                                </select>
                              </div>
                            </div>
                            <!-- end of col  -->

                            <div class="col-md-4 col-lg-3 my-3">

                              <div class="Districdropdown">
                                <select id="inputTaluka" class="form-select overflow-scroll  ">
                                  @if($certify->taluka)
                                    <option value="{{ $certify->taluka }}">{{ $certify->taluka }}</option>
                                  @else
                                    <option value="">{{__("eng.selectTaluka")}}</option>
                                  @endif
                                </select>
                              </div>


                            </div>
                            <!-- end of col  -->



                          </div>
                          <!-- end of row  -->


                          <div class="row">


                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="pincode" id="" value="{{ $certify->zipcode }}"
                                class="form-control" placeholder="{{__("eng.pinCode")}}" disabled>


                            </div>

                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="pincode" id="" value="{{ $certify->appointment_date }}"
                                class="form-control" placeholder="{{__("eng.appointmentDate")}}" disabled>


                            </div>
                            <!-- end of col  -->

                            <div class="col-md-4 col-lg-3 my-3">

                              <input type="text" name="vetcontact" id="" value="{{ $certify->appointment_time }}"
                                class="form-control" placeholder="{{__("eng.appointmentTime")}}" disabled>

                            </div>
                            <!-- end of col  -->




                          </div>
                          <!-- end of row  -->

                          <div class="row justify-content-around mt-3 text-center">

                            <div class="col-12 col-md-6 text-start pb-5">
                              <label for="price" class="form-label tcolor fw-bold">{{__("eng.comment")}}</label>
                              <br>
                              <textarea name="comment" placeholder="   Comments" class="comment form-control" id=""
                                rows="5" disabled>{{ $certify->comment }}</textarea>

                            </div>
                            <!-- end of col  -->

                            <div class="row">

                              <div class="col-12 col-md-4 mt-3">

                                <div class="Districdropdown">
                                  <select id="assignvet" class="form-select overflow-scroll  ">
                                    @if($certify->vet_id)
                                      <option value="{{ $certify->vet_id }}">{{ $certify->vet_id }}</option>
                                    @else
                                      <option value="" disabled selected> {{__("eng.vetAssign")}} </option>
                                    @endif
                                  </select>
                                </div>

                              </div>

                              <div class="col-12 col-md-4 mt-3">

                                <div class="Districdropdown">
                                  <select id="appointstatus" class="form-select overflow-scroll  ">
                                    @if($certify->certified_status==1)
                                      <option value="{{ $certify->certified_status }}">{{__("eng.done")}}</option>

                                    @elseif($certify->certified_status==0)
                                      <option value="{{ $certify->certified_status }}">{{__("eng.pending")}}</option>
                                    @else
                                      <option value="" disabled selected>{{__("eng.appointmenStatus")}}</option>
                                    @endif

                                  </select>
                                </div>

                              </div>

                              <div class="col-12 col-md-4 mt-3">

                                <textarea name="comment" placeholder="  {{__("eng.vetComment")}}"
                                  class="comment form-control" id="" rows="5"></textarea>

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

                  {{-- end model --}}
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
{{--        {{ $certify->render("pagination::bootstrap-4") }}--}}


      </div>
      <!-- end of col  -->


    </div>
    <!-- end of row paggi  -->
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

      <h4 class="mt-5 mb-4 mt-md-0">{{__("eng.editCertify")}}</h4>
      @if($errors->any())
        {{$errors}}}
        @endif

      <div class="col-12">

        <form action="{{ route('register_cappointment') }}" method="post">
          @csrf
          <div class="row">


            <div class="col-md-4 col-lg-3 my-3">

              <select id="animaltype" class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype">
                <option value="" disabled selected>{{__("eng.animalType")}}</option>
                <option value="Cow">{{__("eng.cow")}}</option>
                <option value="Buffalo">{{__("eng.buffalo")}}</option>
                <option value="Bull">{{__("eng.bull")}}</option>
                <option value="Sheep">{{__("eng.sheep")}}</option>
                <option value="Goat"> {{__("eng.goat")}}</option>
              </select>

            </div>

            <div class="col-md-4 col-lg-3 my-3">

              <input type="number" name="animalsno" id="" class="form-control" placeholder="{{__("eng.noAnimal")}}">


            </div>
            <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">

              <input type="text" name="breed" id="" class="form-control" placeholder="{{__("eng.breed")}}">


            </div>
            <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">

              <input type="text" name="personname" id="" class="form-control" placeholder="{{__("eng.personName")}}">


            </div>
            <!-- end of col  -->


          </div>
          <!-- end of row  -->


          <div class="row">


            <div class="col-md-4 col-lg-3 my-3">

              <input type="tel" name="mobileno" id="" class="form-control" placeholder="{{__("eng.contactNum")}}">

            </div>

            <div class="col-md-4 col-lg-3 my-3">

              <input type="text" name="address1" id="" class="form-control" placeholder="{{__("eng.address1")}} ">


            </div>
            <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">

              <input type="text" name="address2" id="" class="form-control" placeholder="{{__("eng.address2")}}">


            </div>
            <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">

              <input type="text" name="area" id="" class="form-control" placeholder="{{__("eng.area")}} ">


            </div>
            <!-- end of col  -->



          </div>
          <!-- end of row  -->

          <div class="row">


            <div class="col-md-4 col-lg-3 my-3">

              <div class="Districdropdown">
                <select id="inputDistrict" name="city" class="form-select overflow-scroll  ">
                  <option value="">{{__("eng.city")}}</option>
                  <option value="pune">pune</option>
                  <option value="goa">goa</option>
                </select>
              </div>


            </div>

            <div class="col-md-4 col-lg-3 my-3">

              <div class="startdropdown">

                <select id="inputState" name="state" class="form-select overflow-scroll ">
                  <option selected disabled> {{__("eng.state")}}</option>
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
                <select id="inputDistrict" name="district" class="form-select overflow-scroll  ">
                  <option value=""> {{__("eng.district")}}</option>
                  <option value="pune">Pune</option>


                </select>
              </div>


            </div>
            <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">

              <div class="Districdropdown">
                <select id="inputTaluka" name="taluka" class="form-select overflow-scroll  ">
                  <option value="">{{__("eng.selectTaluka")}}</option>
                  <option value="pune">pune</option>
                  <option value="goa">goa</option>

                </select>
              </div>


            </div>
            <!-- end of col  -->



          </div>
          <!-- end of row  -->


          <div class="row">


            <div class="col-md-4 col-lg-3 my-3">

              <input type="number" name="pincode" id="" class="form-control" placeholder="{{__("eng.pinCode")}}">


            </div>

            <div class="col-md-4 col-lg-3 my-3">

              <input type="date" name="appoint_date" id="" class="form-control" placeholder="   {{__("eng.appointmentDate")}}">


            </div>
            <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">

              <input type="time" name="appoint_time" id="" class="form-control" placeholder="{{__("eng.appointmentTime")}}">

            </div>
            <!-- end of col  -->

          </div>
          <!-- end of row  -->

          <div class="row justify-content-around mt-3 text-center">

            <div class="col-12 col-md-6 text-start pb-5">
              <label for="price" class="form-label tcolor fw-bold">Comments</label>
              <br>
              <textarea name="comment" placeholder="  {{__("eng.comment")}}" class="comment form-control" id="" rows="5"></textarea>

            </div>
            <!-- end of col  -->

            <div class="row">

              <div class="col-12 col-md-4 mt-3">

                <div class="Districdropdown">
                  <select id="assignvet" name="vet_assign" class="form-select overflow-scroll  ">
                    <option value="" disabled selected>{{__("eng.vetAssign")}} </option>
                    @foreach($vets as $item)
                      <option value="{{ $item->id }}">{{ getname($item->user_id) }}</option>
                    @endforeach
                  </select>
                </div>

              </div>

              <div class="col-12 col-md-4 mt-3">

                <div class="Districdropdown">
                  <select id="appointstatus" name="certify_status" class="form-select overflow-scroll  ">
                    <option value="" disabled selected>{{__("eng.certifiedStatus")}} </option>
                    <option value="1">{{__("eng.done")}}</option>
                    <option value="0">{{__("eng.pending")}}</option>
                  </select>
                </div>

              </div>

              <div class="col-12 col-md-4 mt-3">

                <textarea name="vet_comment" placeholder=" {{__("eng.vetComment")}}" class="comment form-control" id=""
                  rows="5"></textarea>

              </div>



            </div>

            <div class="col-12 mt-4">

              <button id="submitbtn" type="submit"
                class="btn rounded-pill btnsubmit bg_danger textli px-5 text-light border_color2 py-2 btnhover2">
                {{__("eng.submit")}}
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



@endsection