@extends('layouts.app')
@section('content')
    
<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around">

    <h4 class="mt-5 mb-4 mt-md-0">Book an Vet Appoinment</h4>

   <div class="col-12">
       
       <form action="{{route('appointment')}}" method="post">
        @csrf
        <div class="row">


                <div class="col-md-4 col-lg-3 my-3">
                  
                    <select id="animaltype"  class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype">
                      <option value="" disabled  selected>Select Animal Type...</option>
                      <option value="2">Cow</option>
                      <option value="1">Buffalo</option>
                      <option value="0">Bull</option>
                      <option value="3" >Sheep</option>
                      <option  value="4"> Goat</option>
                    </select>
                    @error('animaltype')
                        <span>{{$message}}</span>
                    @enderror
                    
                  </div>

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="number" name="animalsno" id="" class="form-control" placeholder="No Of Animals ">
                    @error('animalsno')
                    <span>{{$message}}</span>
                @enderror

                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="breed" id="" class="form-control" placeholder="Breed">
                    @error('breed')
                    <span>{{$message}}</span>
                @enderror

                  </div>
                  <!-- end of col  -->

                <div class="col-md-4 col-lg-3 my-3">
                    
                    <input type="text" name="personname" id="" class="form-control" placeholder="Contact Person Name ">
                    @error('[personname]')
                    <span>{{$message}}</span>
                @enderror

                  </div>
                  <!-- end of col  -->

                  
                </div>
                <!-- end of row  -->


        <div class="row">


            <div class="col-md-4 col-lg-3 my-3">
          
                <input type="tel" name="mobileno" id="" class="form-control" placeholder="Contact Number">
                @error('mobileno')
                <span>{{$message}}</span>
            @enderror

              </div>

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="address1" id="" class="form-control" placeholder="Address Line 1 ">
                @error('address1')
                <span>{{$message}}</span>
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="address2" id="" class="form-control" placeholder="Address Line 2">


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="area" id="" class="form-control" placeholder="Area ">
                @error('area')
                <span>{{$message}}</span>
            @enderror

              </div>
              <!-- end of col  -->
              
              
              
            </div>
            <!-- end of row  -->
            
    <div class="row">


            <div class="col-md-4 col-lg-3 my-3">
          
                <div class="Districdropdown">
                    <select id="inputDistrict" name="city" class="form-select overflow-scroll  ">
                      <option value="">City</option>
                    </select>
                    @error('city')
                    <span>{{$message}}</span>
                    @enderror
                  </div>

                
              </div>

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="startdropdown">
               
                    <select id="inputState"  name="state" class="form-select overflow-scroll ">
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
                    @error('state')
                    <span>{{$message}}</span>
                @enderror
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" name="district" class="form-select overflow-scroll  ">
                      <option value=""> District</option>
                      <option value="Delhi"> Delhi</option>

                    </select>
                    @error('district')
                    <span>{{$message}}</span>
                @enderror
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputTaluka" name="taluka" class="form-select overflow-scroll  ">
                      <option value="">Select Taluka</option>
                      <option value="Pune">Pune</option>
                      <option value="Goa">Goa</option>


                    </select>
                    @error('taluka')
                    <span>{{$message}}</span>
                    @enderror
                  </div>


              </div>
              <!-- end of col  -->
              

              
            </div>
            <!-- end of row  -->


    <div class="row">


            <div class="col-md-4 col-lg-3 my-3">
          
                     <input type="number" name="pincode" id="" class="form-control" placeholder="Pin Code">
                     @error('pincode')
                     <span>{{$message}}</span>
                 @enderror
                
              </div>

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="vet" name="vet_assign" class="form-select overflow-scroll  ">
                      <option value=""> Select A Vet </option>
                      @foreach ($data as $item)
                      <option value="{{$item->id}}"> {{getname($item->user_id)}} </option>
                      @endforeach
                    
                    </select>
                    @error('vet_assign')
                    <span>{{$message}}</span>
                @enderror
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="tel" name="vetcontact"  id="" class="form-control" placeholder="Vet Contact Number">

              </div>
              <!-- end of col  -->

              
            </div>
            <!-- end of row  -->

            <div class="row justify-content-around mt-3 text-center">

                <div class="col-12 col-md-6 text-start pb-5">
                    <label for="price" class="form-label tcolor fw-bold">Comments</label>
                    <br>
                    <textarea name="comment" placeholder="Enter Your Message..." name="comment" class="comment form-control" id="" rows="5"></textarea>

                </div>
                <!-- end of col  -->

                <div class="col-12">

                    <button id="submitbtn" type="submit" class="btn btnsubmit bgcolor px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
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




@endsection