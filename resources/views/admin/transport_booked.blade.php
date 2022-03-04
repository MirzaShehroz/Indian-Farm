@extends('app.dashboard')
@section('title','Transport Booked')
       @section('pill')
       <div class="px-4 pt-4 position-relative" id="v-pills-settings4" role="tabpanel" aria-labelledby="v-pills-settings4-tab">
                        <div class="row">

                            <form action="{{url('search/booked/transport')}}" method="post">
                              @csrf
                            <div class="col-12 d-md-flex mt-3">

                                <!-- <input type="text" name="animal" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Animal   " id=""> -->
                               <select name="animal" class="me-3 border ps-2 mb-3 py-2 inputs1">
                                 <option value="">{{__("eng.animalType")}}</option>
                                 <option value="0">{{__("eng.bull")}}</option>
                                 <option value="1">{{__("eng.buffalo")}}</option>
                                 <option value="2">{{__("eng.cow")}}</option>
                                 <option value="3">{{__("eng.sheep")}}</option>
                                 <option value="4">{{__("eng.goat")}}</option>
                               </select>
                                
                                <!-- <input type="text" name="vet" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="Search By Vet" id=""> -->
                                <input type="text" name="city" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__("eng.searchCity")}}" id="">
                                <input type="text" name="state" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__("eng.searchState")}}" id="">
                                <input type="text" name="district" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__("eng.searchDist")}} " id="">
                                <input type="text" name="taluka" class="me-3 border ps-2 mb-3 py-2 inputs1" placeholder="{{__("eng.searchTaluka")}}" id="">

                             
                                
                            </div>
                            <!-- end of col  -->

                            <div class="col-12 mt-3">

                                <button class="bg_danger px-5 py-2 rounded-pill text-light " name="">{{__("eng.search")}}</button>

                            </div>
                           <!-- end of col   -->

                           <div class="col-12 mt-4">

                          <div class="text-end d-flex d-md-block ">
                            <button class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light"  data-bs-toggle="offcanvas" data-bs-target="#add_transportbook" aria-controls="edit_transportbook" type="button">
                              {{__("eng.addAppoint")}}
                            </button>
                            <button onclick="exportTableToCSV('record.csv')" class="bg_danger px-md-4 me-2 py-2 rounded-pill text-light ">
                              {{__("eng.exportCsv")}}
                            </button>

                          </div>

                            <div class="col-12 overflow-scroll mt-5">

                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">{{__("eng.userId")}}</th>
                                        <th scope="col">{{__("eng.fullName")}}</th>
                                       
                                 
                                
                                        <th scope="col">{{__("eng.contactNum")}}</th>
                                     
                                      
                                      
                                        <!-- <th scope="col">Email Id</th> -->
                                      
                                        <th scope="col">{{__("eng.displayAnimalType")}}</th>
                                        <th scope="col">{{__("eng.noAnimal")}}</th>
                                        <!-- <th scope="col">Vehicle Make & Model</th> -->
                                        <th scope="col">{{__("eng.dateOfTrans")}}</th>
                                        <th scope="col">{{__("eng.fromCity")}}</th>
                                        <th scope="col">{{__("eng.toCity")}}</th>
                                       
                                    
                                        <th scope="col">{{__("eng.driverAssign")}}</th>
                                        <th scope="col"> {{__("eng.status")}}</th>
                                       
                                        <th scope="col">{{__("eng.action")}}</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if($transport!=null)
                                      @foreach($transport as $trans)
                                      <tr>
                                        <td>{{$trans->user_id}}</td>
                                        <td>{{$trans->contact_name}}</td>
                                        <td>{{$trans->contact_no}}</td>
                                        <!-- <td>1</td> -->
                                        @if($trans->animal_type==0)
                                         <td>Bull</td>
                                         @elseif($trans->animal_type==1)
                                        <td>Buffalo</td>
                                         @elseif($trans->animal_type==2)
                                         <td>Cow</td>
                                         @elseif($trans->animal_type==3)
                                         <td>Sheep</td>
                                         @elseif($trans->animal_type==4)
                                       <td>Goat</td>
                                           @endif
                                        <td>{{$trans->no_of_animal}}</td>
                                        <!-- <td>1</td> -->
                                        <td>{{$trans->date_of_transport}}</td>
                                        <td>{{from_address($trans->from_address_id)->city}}</td>
                                        <td>{{to_address($trans->to_address_id)->city}}</td>
                                  
                                      
                                        <td>{{getname($trans->driver_id)}}</td>
                                        <td>
                                        @if($trans->status==0)
                                        {{__("eng.assign")}}
                                        @elseif($trans->status==1)
                                        {{__("eng.confirmed")}}
                                        @elseif($trans->status==2)
                                        {{__("eng.complete")}}
                                        @elseif($trans->status==3)
                                        {{__("eng.cancelled")}}
                                        @elseif($trans->status==4)
                                        {{__("eng.intrasit")}}
                                        @endif
                                        </td>

                                        <td class="d-flex">
                                            <button class="bg_danger text-light me-2"  data-bs-toggle="offcanvas" data-bs-target="#edit_transportbook" aria-controls="edit_transportbook" type="button" onclick="gettrans({{$trans->id}})"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="offcanvas" data-bs-target="#view_transportbook" aria-controls="view_transportbook" type="button" onclick="gettrans({{$trans->id}})"><i class="fas fa-eye"></i></button>
                                            <button class="bg_danger text-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal7" type="button" onclick="deletetrans({{$trans->id}})"><i class="far fa-trash-alt" ></i></button>
                                        </td>
                                        
                                      </tr>
                                      @endforeach

                                      @else
                                      {{__("eng.noData")}}
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
                                {{ $transport->render("pagination::bootstrap-4") }}
                        
                        
                            </div>
                            <!-- end of col  -->
                        
                        
                          </div>
                          <!-- end of row paggi  -->
                          

                        </form>
                        <!-- end of from  -->


                     


                        </div>
                        <!-- end of row  -->
                       
    </div>







         <!-- book edit_transportbook tab   off anvas  -->
         <div class="offcanvas offcanvas-end" tabindex="-1" id="add_transportbook" aria-labelledby="offcanvasRightLabel" style="width:90%">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                        
        <div class="row p-3 px-lg-5 justify-content-around">

            <h4 class="mt-5 mb-4 mt-md-0">{{__("eng.addTrans")}}</h4>

           <div class="col-12">
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-danger">{{$error}}<br></div>
@endforeach
@endif                
        <form action="{{url('add/transport/booked')}}" method="post">
          @csrf
            <div class="row">


                    <div class="col-md-4 col-lg-3 my-3">
                       
                        <select id="aanimaltype"  class="form-select"  name="animaltype">
                          <option value="" disabled  selected>{{__("eng.animalType")}}</option>
                          <option value="0">{{__("eng.bull")}}</option>
                          <option value="1">{{__("eng.buffalo")}}</option>
                          <option value="2">{{__("eng.cow")}}</option>
                          <option value="3" >{{__("eng.sheep")}}</option>
                          <option  value="4"> {{__("eng.goat")}}</option>
                        </select>
                        
                      </div>
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="no_animals" id="ano_animals" class="form-control" placeholder="{{__("eng.noAnimal")}} ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="breed" id="abreed" class="form-control" placeholder="{{__("eng.breed")}} ">


                      </div>
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="contact_person" id="acontact_person" class="form-control" placeholder="{{__("eng.personName")}} ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="contact_no" id="acontact_no" class="form-control" placeholder="{{__("eng.contactNum")}} ">


                      </div>
                      <!-- end of col  -->
                      <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="date" name="date_transport" id="adate_transport" class="form-control" placeholder="{{__("eng.transDate")}} ">


                      </div>
                      <!-- end of col  -->

                
                      
                    </div>
                    <!-- end of row  -->


            <div class="row">

                <h5 class="tcolor my-4">From Address</h5>

                 
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="faddressline1" id="afaddresslin1" class="form-control" placeholder="{{__("eng.address1")}} ">


                    </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="faddressline2" id="afaddressline2" class="form-control" placeholder="{{__("eng.address2")}} ">


                    </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="area" id="aarea" class="form-control" placeholder="{{__("eng.area")}}  ">


                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="acity" name="city" class="form-select overflow-scroll  ">
                              <option value="" disabled selected> {{__("eng.city")}} </option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                            
                            </select>
                          </div>
        

                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="startdropdown">
                       
                            <select id="astate"  class="form-select overflow-scroll " name="state">
                              <option  disabled selected> {{__("eng.selectState")}} </option>
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
                            <select id="adistrict" class="form-select overflow-scroll  " name="district">
                              <option value="" disabled selected> {{__("eng.district")}} </option>
                              <option value="xyz">XYZ</option>
                              <option value="lmno">LMNO</option>
                              <option value="abcd">ABCD</option>
                            </select>
                          </div>


                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="ataluka" class="form-select overflow-scroll  " name="taluka">
                              <option value="" disbaled selected>{{__("eng.taluka")}} </option>
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                            
                            </select>
                          </div>


                    </div>
                      <!-- end of col  -->
                      
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="zipcode" id="azipcode" class="form-control" placeholder="{{__("eng.pinCode")}}  ">


                    </div>
                      <!-- end of col  -->
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="date" name="appoint_date" id="aappoint_date" class="form-control" placeholder="{{__("eng.appointmentDate")}}  ">


                      </div>
                      <!-- end of col  -->
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="time" name="appoint_time" id="aappoint_time" class="form-control" placeholder="{{__("eng.appointmentTime")}}  ">


                      </div>
                      <!-- end of col  -->
                      
                      
                      
                    </div>
                    <!-- end of row  -->
                    
           

            <div class="row mb-4">

                <h5 class="tcolor my-4">{{__("eng.toAddress")}} </h5>

                 
                <div class="col-md-4 col-lg-3 my-3">
                        
                    <input type="text" name="taddressline1" id="taaddressline1" class="form-control" placeholder="{{__("eng.address1")}}  ">


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="taddressline2" id="taaddressline2" class="form-control" placeholder="{{__("eng.address2")}} ">


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="tarea" id="taarea" class="form-control" placeholder="{{__("eng.area")}}  ">


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="Districdropdown">
                        <select id="tacity" name="tcity"class="form-select overflow-scroll  ">
                         
                          <option value="" disabled selected> {{__("eng.city")}} </option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                        
                        </select>
                      </div>
    

                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="startdropdown">
                   
                        <select id="atstate" name="tstate"  class="form-select overflow-scroll ">
                          <option selected disabled> {{__("eng.state")}} </option>
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
                        <select id="atdistrict" class="form-select overflow-scroll  " name="tdistrict">
                          <option value="" disabled selected> {{__("eng.district")}} </option>
                          <option value="xyz"> XYZ</option>
                          <option value="lmno"> LMNO</option>
                          <option value="abc">ABC</option>
                        </select>
                      </div>


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="Districdropdown">
                        <select id="attaluka" class="form-select overflow-scroll  " name="ttaluka">
                          <option value="">{{__("eng.taluka")}} </option>
                          <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                        
                        </select>
                      </div>


                  </div>
                  <!-- end of col  -->
                  
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="tzipcode" id="atzipcode" class="form-control" placeholder="{{__("eng.pinCode")}}  ">


                  </div>
                  <!-- end of col  -->
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="date" name="tappoint_date" id="atappoint_date" class="form-control" placeholder="{{__("eng.appointmentDate")}}  ">


                  </div>
                  <!-- end of col  -->
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="time" name="tappoint_time" id="atappoint_time" class="form-control" placeholder="{{__("eng.appointmentTime")}}  ">


                  </div>
                  <!-- end of col  -->
                  
                      
                      
                      
                    </div>
                    <!-- end of row  -->

                    <div class="row justify-content-around">

                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                                <select id="adriverassign" class="form-select overflow-scroll  " name="edriverassign">
                                  <option value=""  disabled selected>{{__("eng.driverAssign")}} </option>
                                  @if($drivers!=null)
                                      @foreach($drivers as $driver)
                                      <option value="{{$driver->id}}">{{$driver->first_name}}</option>
                                      @endforeach
                                  @else
                                  <option value="">{{__("eng.noDriver")}} </option>
                                  @endif
                                  <option ></option>
                                
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->
                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                                <select id="astatus" class="form-select overflow-scroll  " name="estatus">
                                  <option value=""  disabled >{{__("eng.status")}}  </option>
                                  <option value="0"  >{{__("eng.assign")}} </option>
                                  <option value="1" >{{__("eng.confirmed")}}  </option>
                                  <option value="2" >{{__("eng.complete")}} </option>
                                  <option value="2" >{{__("eng.cancelled")}} </option>
                                  <option value="3" >{{__("eng.intrasit")}}  </option>
                                  
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->

                    </div>
                    
           

                    <div class="row justify-content-around mt-5 text-center">

                        <div class="col-12">

                            <button id="submitbtn" type="submit" class="btn btnsubmit bg_danger rounded-pill px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
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















     <!-- book edit_transportbook tab   off anvas  -->
     <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_transportbook" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                        
        <div class="row p-3 px-lg-5 justify-content-around">

            <h4 class="mt-5 mb-4 mt-md-0">{{__("eng.editTrans")}}</h4>

           <div class="col-12">
               
          <form  action="{{url('update/transport/book')}}" method="post">
              @csrf
              
            <div class="row">
            <input name="transportbook" id="transportid" type="hidden">
            
                    <div class="col-md-4 col-lg-3 my-3">
                       
                        <select id="eanimaltype"  class="form-select"  name="animaltype">
                          <option value="" disabled  selected>{{__("eng.animalType")}}</option>
                          <option value="0">{{__("eng.bull")}}</option>
                          <option value="1">{{__("eng.buffalo")}}</option>
                          <option value="2">{{__("eng.cow")}}</option>
                          <option value="3" >{{__("eng.sheep")}}</option>
                          <option  value="4"> {{__("eng.goat")}}</option>
                        </select>
                        
                      </div>
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="no_animals" id="eno_animals" class="form-control" placeholder="{{__("eng.noAnimal")}} ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="breed" id="ebreed" class="form-control" placeholder="{{__("eng.breed")}} ">


                      </div>
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="contact_person" id="econtact_person" class="form-control" placeholder="{{__("eng.personName")}}">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="contact_no" id="econtact_no" class="form-control" placeholder="{{__("eng.contactNum")}} ">


                      </div>
                      <!-- end of col  -->
                      <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="date" name="date_transport" id="date_transport" class="form-control" placeholder="{{__("eng.transDate")}}">


                      </div>
                      <!-- end of col  -->

                
                      
                    </div>
                    <!-- end of row  -->


            <div class="row">

                <h5 class="tcolor my-4">From Address</h5>

                 
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="faddressline1" id="efaddresslin1" class="form-control" placeholder="{{__("eng.address1")}} ">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="faddressline2" id="efaddressline2" class="form-control" placeholder="{{__("eng.address2")}}">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="area" id="earea" class="form-control" placeholder="{{__("eng.area")}} ">


                      </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="city" name="city" class="form-select overflow-scroll  ">
                              <option value="" disabled> {{__("eng.city")}}</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                            
                            </select>
                          </div>
        

                      </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="startdropdown">
                       
                            <select id="estate"  class="form-select overflow-scroll " name="state">
                              <option  disabled> {{__("eng.state")}}</option>
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
                            <select id="edistrict" class="form-select overflow-scroll  " name="district">
                              <option value="" disabled> {{__("eng.district")}}</option>
                              <option value="xyz">XYZ</option>
                              <option value="lmno">LMNO</option>
                              <option value="abcd">ABCD</option>
                            </select>
                          </div>


                      </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="etaluka" class="form-select overflow-scroll  " name="taluka">
                              <option value="">{{__("eng.taluka")}}</option>
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                            
                            </select>
                          </div>


                      </div>
                      <!-- end of col  -->
                      
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="zipcode" id="ezipcode" class="form-control" placeholder="{{__("eng.pinCode")}} ">


                      </div>
                      <!-- end of col  -->
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="date" name="appoint_date" id="eappoint_date" class="form-control" placeholder="{{__("eng.appointmentDate")}}">


                      </div>
                      <!-- end of col  -->
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="time" name="appoint_time" id="eappont_time" class="form-control" placeholder="{{__("eng.appointmentTime")}}">


                      </div>
                      <!-- end of col  -->
                      
                      
                      
                    </div>
                    <!-- end of row  -->
                    
           

            <div class="row mb-4">

                <h5 class="tcolor my-4">{{__("eng.toAddress")}}</h5>

                 
                <div class="col-md-4 col-lg-3 my-3">
                        
                    <input type="text" name="taddressline1" id="teaddressline1" class="form-control" placeholder="{{__("eng.address1")}} ">


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="taddressline2" id="teaddressline2" class="form-control" placeholder="{{__("eng.address2")}}">


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="tarea" id="tearea" class="form-control" placeholder="{{__("eng.area")}} ">


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="Districdropdown">
                        <select id="tecity" name="tcity" class="form-select overflow-scroll  ">
                         
                          <option value="" disabled>{{__("eng.city")}}</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                        
                        </select>
                </div>
    

                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="startdropdown">
                   
                        <select id="etstate" name="tstate"  class="form-select overflow-scroll ">
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
                        <select id="etdistrict" class="form-select overflow-scroll  " name="tdistrict">
                          <option value="" disabled> {{__("eng.district")}}</option>
                          <option value="xyz"> XYZ</option>
                          <option value="lmno"> LMNO</option>
                          <option value="abc">ABC</option>
                        </select>
                      </div>


                </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="Districdropdown">
                        <select id="ettaluka" class="form-select overflow-scroll  " name="ttaluka">
                          <option value="">{{__("eng.taluka")}}</option>
                          
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                        
                        </select>
                      </div>


                </div>
                  <!-- end of col  -->
                  
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="tzipcode" id="etzipcode" class="form-control" placeholder="{{__("eng.pinCode")}}">


                </div>
                  <!-- end of col  -->
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="date" name="tappoint_date" id="etappoint_date" class="form-control" placeholder="{{__("eng.appointmentDate")}} ">


                  </div>
                  <!-- end of col  -->
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="time" name="tappoint_time" id="etappoint_time" class="form-control" placeholder="{{__("eng.appointmentTime")}} ">


                  </div>
                  <!-- end of col  -->
                  
                      
                      
                      
                    </div>
                    <!-- end of row  -->

                    <div class="row justify-content-around">

                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                                <select id="driverassign" class="form-select overflow-scroll  " name="edriverassign">
                                  <option value=""  disabled>{{__("eng.driverAssign")}}</option>
                                  @if($drivers!=null)
                                      @foreach($drivers as $driver)
                                      <option value="{{$driver->id}}">{{$driver->first_name}}</option>
                                      @endforeach
                                  @else
                                  <option value="">No driver</option>
                                  @endif
                                
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->
                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                                <select id="status" class="form-select overflow-scroll " name="estatus">
                                 
                                  <option value=""  disabled >{{__("eng.status")}} </option>
                                  <option value="0"  >{{__("eng.assign")}}</option>
                                  <option value="1" >{{__("eng.confirmed")}} </option>
                                  <option value="2" >{{__("eng.complete")}}</option>
                                  <option value="2" >{{__("eng.cancelled")}}</option>
                                  <option value="3" >{{__("eng.intrasit")}} </option>
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->

                    </div>
                    
           

                    <div class="row justify-content-around mt-5 text-center">

                        <div class="col-12">

                            <button id="submitbtn" type="submit" class="btn btnsubmit bg_danger rounded-pill px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
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


                                                  <!-- book edit_transportbook tab   off anvas  -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="view_transportbook" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">
    
                          </h5>
                          <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          
                        
        <div class="row p-3 px-lg-5 justify-content-around">

            <h4 class="mt-5 mb-4 mt-md-0">{{__('eng.viewTrans')}}</h4>

           <div class="col-12">
               
               <form action="" method="post">

            <div class="row">


                    <div class="col-md-4 col-lg-3 my-3">
                       
                        <select id="vanimaltype"  class="form-select"  name="animaltype">
                          <option value="" disabled  >{{__("eng.animalType")}}</option>
                          <option value="0">{{__("eng.bull")}}</option>
                          <option value="1">{{__("eng.buffalo")}}</option>
                          <option value="2">{{__("eng.cow")}}</option>
                          <option value="3" >{{__("eng.sheep")}}</option>
                          <option  value="4"> {{__("eng.goat")}}</option>
                        </select>
                        
                      </div>
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vnoanimal" class="form-control" placeholder="{{__("eng.noAnimal")}}">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vbreed" class="form-control" placeholder="{{__("eng.breed")}} ">


                      </div>
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vcontactperson" class="form-control" placeholder="{{__("eng.personName")}}">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vcontactno" class="form-control" placeholder="{{__("eng.contactnum")}}">


                      </div>
                      <!-- end of col  -->

                      <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="date" name="date_transport" id="vdate_transport" class="form-control" placeholder="{{__("eng.transDate")}}">


                      </div>
                      
                    </div>
                    <!-- end of row  -->


            <div class="row">

                <h5 class="tcolor my-4">From Address</h5>

                 
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vfaddressline1" class="form-control" placeholder="{{__("eng.address1")}}">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vfaddressline2" class="form-control" placeholder="{{__("eng.address2")}}">


                      </div>
                      <!-- end of col  -->
    
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vfarea" class="form-control" placeholder="{{__("eng.area")}} ">


                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="vfcity" class="form-select overflow-scroll  ">
                              
                              <option value="" disabled> {{__("eng.city")}}</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                        
                            
                            </select>
                          </div>
        

                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="startdropdown">
                       
                            <select id="vfstate"  class="form-select overflow-scroll ">
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
                            <select id="vfdistrict" class="form-select overflow-scroll  ">
                             
                              <option value="" disabled> {{__("eng.district")}}</option>
                          <option value="xyz"> XYZ</option>
                          <option value="lmno"> LMNO</option>
                          <option value="abc">ABC</option>
                            
                            </select>
                          </div>


                    </div>
                      <!-- end of col  -->

                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <div class="Districdropdown">
                            <select id="vftaluka"  class="form-select overflow-scroll  ">
                              <option value="" disbaled>{{__("eng.taluka")}}</option>
                              <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                            
                            </select>
                          </div>


                    </div>
                      <!-- end of col  -->
                      
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vfzipcode" class="form-control" placeholder="{{__("eng.pinCode")}} ">


                    </div>
                      <!-- end of col  -->
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vfappoint_date" class="form-control" placeholder="{{__("eng.appointmentDate")}} ">


                    </div>
                      <!-- end of col  -->
                      
                    <div class="col-md-4 col-lg-3 my-3">
                        
                        <input type="text" name="" id="vfappoint_time" class="form-control" placeholder="{{__("eng.appointmentTime")}} ">


                      </div>
                      <!-- end of col  -->
                      
                      
                      
                    </div>
                    <!-- end of row  -->
                    
           

            <div class="row mb-4">

                <h5 class="tcolor my-4">{{__("eng.toAddres")}}</h5>

                 
                <div class="col-md-4 col-lg-3 my-3">
                        
                    <input type="text" name="" id="vtaddressline1" class="form-control" placeholder="{{__("eng.address1")}} ">


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="" id="vtaddressline2" class="form-control" placeholder="{{__("eng.address2")}}">


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="" id="vtarea" class="form-control" placeholder="{{__("eng.area")}} ">


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="Districdropdown">
                        <select id="vtcity" class="form-select overflow-scroll  ">
                              <option value="" disabled> {{__("eng.city")}}</option>
                              <option value="chandigarh" >Chandigarh</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="delhi"> Delhi</option>
                        
                         
                        
                        </select>
                      </div>
    

                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="startdropdown">
                   
                        <select id="vtstate"  class="form-select overflow-scroll ">
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
                        <select id="vtdistrict" class="form-select overflow-scroll  ">
                          <option value="" disabled> {{__("eng.district")}}</option>
                          <option value="xyz"> XYZ</option>
                          <option value="lmno"> LMNO</option>
                          <option value="abc">ABC</option>
                         
                        
                        </select>
                      </div>


                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <div class="Districdropdown">
                        <select id="vttaluka" class="form-select overflow-scroll  ">
                          <option value="">{{__("eng.taluka")}}</option>
                          <option value="Taluka AND">Taluka AND</option>
                              <option value="Taluka AND">Taluka OR</option>
                              <option value="Taluka AND">Taluka IF</option>
                        
                        </select>
                      </div>


                  </div>
                  <!-- end of col  -->
                  
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="" id="vtzipcode" class="form-control" placeholder="{{__("eng.pinCode")}} ">


                  </div>
                  <!-- end of col  -->
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="" id="vtappoint_date" class="form-control" placeholder="{{__("eng.appointmentDate")}} ">


                  </div>
                  <!-- end of col  -->
                  
                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="" id="vtappoint_time" class="form-control" placeholder="{{__("eng.appointmentTime")}} ">


                  </div>
                  <!-- end of col  -->
                  
                      
                      
                      
                    </div>
                    <!-- end of row  -->

                    <div class="row justify-content-around">

                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                                <select id="vdriverassign" class="form-select overflow-scroll  ">
                                @if($drivers!=null)
                                      @foreach($drivers as $driver)
                                      <option value="{{$driver->id}}">{{$driver->first_name}}</option>
                                      @endforeach
                                  @else
                                  <option value="">{{__("eng.noDriver")}}</option>
                                  @endif
                                </select>
                              </div>
            
        
                          </div>
                          <!-- end of col  -->
                        <div class="col-md-4 my-3">
                    
                            <div class="Districdropdown">
                                <select id="vstatus" class="form-select overflow-scroll  ">
                                  <option value=""  disabled >{{__("eng.state")}} </option>
                                  <option value="0"  >{{__("eng.assign")}}</option>
                                  <option value="1" >{{__("eng.confirm")}} </option>
                                  <option value="2" >{{__("eng.complete")}}</option>
                                  <option value="2" >{{__("eng.cancel")}}</option>
                                  <option value="3" >{{__("eng.intrasit")}} </option>
                                
                                </select>
                              </div>
            
        
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
               
                      <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">{{__("eng.alert")}}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{url('delete/transport/booking')}}" method="post">
                                  @csrf
                                <input id="trans_id" name="id" type="hidden">
                                <div class="modal-body text-center p-4">
                                  <p class="fw-bold text-secondary"> {{__("eng.deleteTransAlert")}}</p>
                                </div>
                                <div class="modal-foote d-flex">
                                 <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">{{__("eng.no")}}</button></a> 
                                 <a href="#" class="text-decoration-none col-6"><button type="submit" class="btn border form-control btnhover">{{__("eng.yes")}}</button></a> 
                                 </form>
                                </div>
                              </div>
                            </div>
                          </div>
                             
       @endsection
@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
  function deletetrans(id){
    document.getElementById('trans_id').value=id;
  }

  function gettrans(id){
      $.ajax({

        type:'POST',
        url:"{{url('/gettransport/booking')}}"+ '/'+id,
        data:{_token: "{{ csrf_token() }}"},
        success:function(data) {
          console.log(data.fromaddress.appointment_time);
         document.getElementById('eanimaltype').value=data.trans.animal_type;
         document.getElementById('eno_animals').value=data.trans.no_of_animal;
        document.getElementById('ebreed').value=data.trans.breed;
        document.getElementById('econtact_person').value=data.trans.contact_name;
        document.getElementById('econtact_no').value=data.trans.contact_no;
        document.getElementById('date_transport').value=data.trans.date_of_transport;
        document.getElementById('efaddresslin1').value=data.fromaddress.address_line1;
        document.getElementById('efaddressline2').value=data.fromaddress.address_line2;
        document.getElementById('earea').value=data.fromaddress.area;
        document.getElementById('city').value=data.fromaddress.city;
        document.getElementById('edistrict').value=data.fromaddress.district;
        document.getElementById('estate').value=data.fromaddress.state;
        document.getElementById('etaluka').value=data.fromaddress.taluka;
        document.getElementById('ezipcode').value=data.fromaddress.zipcode;
        document.getElementById('eappoint_date').value=data.fromaddress.appointment_date;
        document.getElementById('eappont_time').value=data.fromaddress.appointment_time;
      

        document.getElementById('teaddressline1').value=data.toaddress.address_line1;
        document.getElementById('teaddressline2').value=data.toaddress.address_line2;
        document.getElementById('tearea').value=data.toaddress.area;
        document.getElementById('tecity').value=data.toaddress.city;
        document.getElementById('etdistrict').value=data.toaddress.district;
        document.getElementById('etstate').value=data.toaddress.state;
        document.getElementById('ettaluka').value=data.toaddress.taluka;
        document.getElementById('etzipcode').value=data.toaddress.zipcode;
        document.getElementById('etappoint_date').value=data.toaddress.appointment_date;
        document.getElementById('etappoint_time').value=data.toaddress.appointment_time;


        document.getElementById('driverassign').value=data.trans.driver_id;
        document.getElementById('status').value=data.trans.status;

        document.getElementById('transportid').value=data.trans.id;
        








         document.getElementById('vanimaltype').value=data.trans.animal_type;
         document.getElementById('vnoanimal').value=data.trans.no_of_animal;
        document.getElementById('vbreed').value=data.trans.breed;
        document.getElementById('vcontactperson').value=data.trans.contact_name;
        document.getElementById('vcontactno').value=data.trans.contact_no;
        document.getElementById('vdate_transport').value=data.trans.date_of_transport;
        document.getElementById('vfaddressline1').value=data.fromaddress.address_line1;
        document.getElementById('vfaddressline2').value=data.fromaddress.address_line2;
        document.getElementById('vfarea').value=data.fromaddress.area;
        document.getElementById('vfcity').value=data.fromaddress.city;
        document.getElementById('vfdistrict').value=data.fromaddress.district;
        document.getElementById('vfstate').value=data.fromaddress.state;
        document.getElementById('vftaluka').value=data.fromaddress.taluka;
        document.getElementById('vfzipcode').value=data.fromaddress.zipcode;
        document.getElementById('vfappoint_date').value=data.fromaddress.appointment_date;
        document.getElementById('vfappoint_time').value=data.fromaddress.appointment_time;
      

        document.getElementById('vtaddressline1').value=data.toaddress.address_line1;
        document.getElementById('vtaddressline2').value=data.toaddress.address_line2;
        document.getElementById('vtarea').value=data.toaddress.area;
        document.getElementById('vtcity').value=data.toaddress.city;
        document.getElementById('vtdistrict').value=data.toaddress.district;
        document.getElementById('vtstate').value=data.toaddress.state;
        document.getElementById('vttaluka').value=data.toaddress.taluka;
        document.getElementById('vtzipcode').value=data.toaddress.zipcode;
        document.getElementById('vtappoint_date').value=data.toaddress.appointment_date;
        document.getElementById('vtappoint_time').value=data.toaddress.appointment_time;


        document.getElementById('vdriverassign').value=data.trans.driver_id;
        document.getElementById('vstatus').value=data.trans.status;

        document.getElementById('transportid').value=data.trans.id;
   




        }

      });
  }
</script>
@endsection
@section('script')
<script>
 
</script>
@endsection