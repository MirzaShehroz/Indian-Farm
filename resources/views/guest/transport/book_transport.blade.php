@extends('layouts.app')
@section('content')
<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around">

    <h4 class="mt-5 pt-5 mb-4 mt-md-0">{{__('guest.bookTrans')}}</h4>

   <div class="col-12">
       
  <form action="{{route('book-vendor')}}" method="POST">
    @csrf

    <div class="row">

            <div class="col-md-4 col-lg-3 my-3">
               
                <select id="animaltype"  class="form-select" onchange="showDiv('hidden_div', this)" name="animaltype" value="{{old('animaltype')}}">
                  <option name="animal_type" value="" disabled  selected>{{__('guest.animalType')}}</option>
                  <option value="2">{{__('guest.cow')}}</option>
                  <option value="1">{{__('guest.buffalo')}}</option>
                  <option value="0">{{__('guest.bull')}}</option>
                  <option value="3" >{{__('guest.sheep')}}</option>
                  <option  value="4"> {{__('guest.goat')}}</option>
                </select>
                @error('animaltype')
                    {{$message}}
                @enderror
                
              </div>

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="number" name="animalsno" value="{{old('animalsno')}}" id="" class="form-control" placeholder="{{__('guest.noAnimal')}} ">
                @error('animalsno')
                {{$message}}
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="personname" id="" value="{{old('personname')}}" class="form-control" placeholder="{{__('guest.personName')}} ">
                @error('personname')
                {{$message}}
                 @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="tel" name="mobileno" id="" value="{{old('mobileno')}}" class="form-control" placeholder="{{__('guest.contactNum')}} ">
                @error('mobileno')
                {{$message}}
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="date" name="dot" id="" value="{{old('dot')}}" class="form-control" placeholder="{{__('guest.transDate')}}">
                @error('dot')
                {{$message}}
            @enderror
              </div>
              <!-- end of col  -->
            </div>
            <!-- end of row  -->


    <div class="row">

        <h5 class="tcolor my-4">{{__('guest.fromAddress')}}</h5>

         
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="faddressline1" id="" value="{{old('faddressline1')}}" class="form-control" placeholder="{{__('guest.address1')}} ">
                @error('faddressline1')
                {{$message}}
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="faddressline2" id="" value="{{old('faddressline2')}}" class="form-control" placeholder="{{__('guest.address2')}}">
                @error('faddressline2')
                {{$message}}
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="fromarea" value="{{old('fromarea')}}" id="" class="form-control" placeholder="{{__('guest.area')}} ">
                @error('fromarea')
                {{$message}}
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" name="fromcity" value="{{old('fromcity')}}" class="form-select overflow-scroll  ">
                      <option value="" selected>{{__('guest.city')}}</option>
                      <option value="goa">Goa</option>
                      <option value="lahore">Lahore</option>
                      <option value="islamabad">Islamabad</option>
                    </select>
                    @error('fromcity')
                    {{$message}}
                @enderror
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="startdropdown">
               
                    <select id="inputState" name="fromstate" value="{{old('fromstate')}}" class="form-select overflow-scroll ">
                      <option selected disabled> {{__('guest.selectState')}}</option>
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
                    @error('fromstate')
                    {{$message}}
                    @enderror
                  </div>


           

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" value="{{old('fromdistrict')}}" name="fromdistrict" class="form-select overflow-scroll  ">
                      <option value=""> {{__('guest.selectDist')}}</option>
                      <option value="Bihar">Bihar</option>
                      <option value="punjab">Punjab</option>
                      <option value="sindh">Sindh</option>
                    </select>
                    @error('fromdistrict')
                    {{$message}}
                @enderror
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputTaluka" name="fromtaluka" value="{{old('fromtaluka')}}" class="form-select overflow-scroll  ">
                      <option value="">{{__('guest.selectTaluka')}}</option>
                      <option value="Taluka1">Taluka1</option>
                      <option value="Taluka2">Taluka2</option>
                      <option value="Taluka13">Taluka3</option>
                    </select>
                    @error('fromtaluka')
                    {{$message}}
                @enderror
                  </div>


              </div>
              <!-- end of col  -->
              
              
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="number" name="frompincode" id="" value="{{old('frompincode')}}" class="form-control" placeholder="{{__('guest.pinCode')}} ">
                @error('frompincode')
                {{$message}}
                 @enderror

              </div>
              <!-- end of col  -->
              
              
              
            </div>
            <!-- end of row  -->
            
   

    <div class="row mb-4">

        <h5 class="tcolor my-4">{{__('guest.toAddress')}}</h5>

         
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="taddressline1" id="" value="{{old('taddressline1')}}" class="form-control" placeholder="{{__('guest.address1')}} ">
                @error('taddressline1')
                {{$message}}
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="taddressline2" id="" value="{{old('taddressline2')}}" class="form-control" placeholder="{{__('guest.address2')}}">
                @error('taddressline2')
                {{$message}}
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="text" name="toarea" id="" value="{{old('toarea')}}" class="form-control" placeholder="{{__('guest.area')}} ">
                @error('toarea')
                {{$message}}
            @enderror

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" name="tocity" value="{{old('tocity')}}" class="form-select overflow-scroll  ">
                      <option value="">{{__('guest.city')}}</option>
                      <option value="goa">Goa</option>
                      <option value="lahore">Lahore</option>
                      <option value="islamabad">Islamabad</option>
                    </select>
                    @error('tocity')
                    {{$message}}
                    @enderror
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="startdropdown">
               
                    <select id="inputState"  name="tostate" value="{{old('toatate')}}" class="form-select overflow-scroll ">
                      <option selected disabled> {{__('guest.selectState')}}</option>
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
                    @error('tostate')
                    {{$message}}
                    @enderror
                  </div>


           

              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputDistrict" name="todistrict" value="{{old('todistrict')}}" class="form-select overflow-scroll  ">
                      <option value=""> {{__('guest.selectDist')}}</option>
                      <option value="bihar">Bihar</option>
                      <option value="punjab">Punjab</option>
                      <option value="kpk">kpk</option>
                    </select>
                    @error('todistrict')
                    {{$message}}
                @enderror
                  </div>


              </div>
              <!-- end of col  -->

            <div class="col-md-4 col-lg-3 my-3">
                
                <div class="Districdropdown">
                    <select id="inputTaluka" name="totaluka" value="{{old('totaluka')}}" class="form-select overflow-scroll  ">
                      <option value="">{{__('guest.selectTaluka')}}</option>
                      <option value="Taluka1">Taluka1</option>
                      <option value="Taluka2">Taluka2</option>
                      <option value="Taluka3">Taluka3</option>
                    </select>
                    @error('totaluka')
                    {{$message}}
                     @enderror
                  </div>


              </div>
              <!-- end of col  -->
              
              
            <div class="col-md-4 col-lg-3 my-3">
                
                <input type="number" name="topincode" id="" value="{{old('topincode')}}" class="form-control" placeholder="{{__('guest.pinCode')}} ">
                @error('topincode')
                {{$message}}
                 @enderror

              </div>
              <!-- end of col  -->
              
              
              
            </div>
            <!-- end of row  -->
            
   

            <div class="row justify-content-around mt-5 pb-5 text-center">

                <div class="col-12">

                    <button id="submitbtn" type="submit" class="btn btnsubmit bgcolor px-5 text-light border_color2 py-2 btnhover2" >
                        {{__('guest.submit')}}
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