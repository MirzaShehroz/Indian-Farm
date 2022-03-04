@extends('layouts.app')
@section('content')
<div class="row pad-50 justify-content-between mt-5 pt-5 mt-lg-0" id="edit_profile">


    <div class="col-12 col-md-3 text-center mt-5 pt-4 mt-md-0 pt-md-0 mb-5">


      <form action="{{route('registerRequest')}}" method="post" enctype="multipart/form-data">

      <img src="{{asset('images/user-img.png')}}" class="profile_img my-3" alt="img not found">

      <input type="file" class="form-control" name="profile">
      @error('profile')
      <span>{{$message}}</span>
      @enderror
      {{-- <button type="file" class="bg-transparent  profilebtn btnhover px-3 py-2" style="border-radius: 5px;">Upload Profile Picture</button> --}}


    </div>
    <!-- end of col-3 -->

    <div class="col-12 col-md-8">

        @csrf

   <h5 class="mb-4">{{__('guest.personalDetail')}}</h5>
        <div class="row">
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="first_name" placeholder="{{__('guest.firstName')}}" aria-label="First name">
            @error('first_name')
                <span>{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="middle_name" placeholder="{{__('guest.middleName')}}" aria-label="{{__('guest.middleName')}}">
            @error('middle_name')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="last_name" placeholder="{{__('guest.lastName')}}" aria-label="{{__('guest.lastName')}}">
            @error('last_name')
            <span>{{$message}}</span>
        @enderror
          </div>
        </div>

      
        <div class="row my-2">
          <div class="col-12 col-md-4 my-2">
            <input type="number" class="form-control" name="license_no" placeholder="{{__('guest.licenseNo')}}" aria-label="License">
            @error('license_no')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-4 my-2">
            <input type="text" class="form-control" name="vetinary_council" placeholder="{{__('guest.registCouncil')}}" aria-label="Registered Vetinary Council ">
            @error('vetinary_council')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-4 my-2">
            <input type="number" class="form-control" name="registration" placeholder="{{__('guest.vcRegistNum')}}" aria-label="VC Registration NO">
            @error('registration')
            <span>{{$message}}</span>
        @enderror
          </div>
        </div>

        <h5 class="my-4">{{__('guest.contactDetail')}}</h5>
        <div class="row">
          <div class="col-12 col-md-3 my-2">
            <input type="number" class="form-control" name="contact_no" placeholder="{{__('guest.contactNum')}}" aria-label="Contact Number">
            @error('contact_no')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="email" class="form-control" name="email" placeholder="{{__('guest.emailId')}}" aria-label="Email Id">
            @error('email')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="password" class="form-control" name="password" placeholder="{{__('guest.password')}}" aria-label="Password">
            @error('password')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="password" class="form-control" name="confirm_password" placeholder="{{__('guest.confirmPass')}}" aria-label="Confirm Password">
            @error('confirm_password')
            <span>{{$message}}</span>
        @enderror
          </div>
        </div>


        <div class="row my-2">
          <div class="col-12 col-md-3 my-2">
            <input type="text" class="form-control" name="address1" placeholder="{{__('guest.address1')}} " aria-label="Address Line 1 ">
            @error('address1')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="text" class="form-control" name="address2" placeholder="{{__('guest.address2')}}" aria-label="Address Line 2">
            @error('address2')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="text" class="form-control" name="area" placeholder="{{__('guest.area')}}" aria-label="area">
            @error('area')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <select id="inputCity" name="city" class="form-select overflow-scroll ">
              <option value="" selected disabled>{{__('guest.city')}}</option>
              <option value="Pune">Pune</option>
            </select>
            @error('city')
            <span>{{$message}}</span>
        @enderror
          </div>
        </div>


        <div class="row my-2">
          <div class="col-12 col-md-3 my-2">
            <select id="inputState" name="state" class="form-select overflow-scroll ">
              <option value="" selected disabled>{{__('guest.selectState')}}</option>
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
          <div class="col-12 col-md-3 my-2">
            <select id="inputDistrict" name="district" class="form-select overflow-scroll ">
              <option value="" selected disabled>{{__('guest.district')}}</option>
              <option value="Pune">Pune</option>
            </select>
            @error('district')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <select id="inputTaluka" name="taluka" class="form-select overflow-scroll ">
              <option value="" selected disabled>{{__('guest.selectTaluka')}}</option>
              <option value="Pune">Pune</option>
            </select>
            @error('taluka')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="number" class="form-control" name="pincode" placeholder="Pin Code" aria-label="Pin Code">
          </div>
        </div>
        <h5 class="my-4">{{__('guest.documents')}}</h5>
        <div class="row">
          <div class="col-12 col-md-3 my-2">
            <input type="file" class="form-control" name="doc1">
            @error('doc1')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="file" class="form-control" name="doc2">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="file" class="form-control" name="doc3">
          </div>
          <div class="col-12 col-md-3 my-2">
            <input type="file" class="form-control" name="doc4">
          </div>
        </div>
      
        <div class="col-12 text-center ">

          <a href="transport_post_submit.html" class="text-decoration-none text-light"> <button class="bgcolor px-5 py-2 text-light mt-5 border_color2" type="submit">{{__('guest.submit')}}</button></a>

        </div>
        <!-- end of col  -->
    </form>
    <!-- end of form  -->
    </div>
    <!-- end of col-9  -->
  </div>
    <!-- end of edit profile row  -->


@endsection