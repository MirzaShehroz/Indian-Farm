{{-- <form action="#" method="POST"> --}}
    {{-- @csrf --}}
    
    <form action="{{route('B&SEditprofile')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row pad-50 justify-content-between mt-5 pt-5 mt-lg-0" id="edit_profile">
        <div class="col-12 col-md-3 text-center mt-5 pt-5 mt-md-0 pt-md-0 mb-5 " style="
          background-image: linear-gradient(315deg, #aee1f9 0%, #f6ebe6 74%);
           border-radius: 20px;  box-shadow: 1px 1px 10px rgb(218, 218, 218) !important;">

    <h4 class="border-start border-5 mt-2 tcolor" style="border-color: #0572B2 !important;">Edit Your Profile</h4>
        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
    <img src="{{asset( $data->image ? $data->image :'images/user-img.png')}}"  class="profile_img my-3" alt="img not found">

        <input type="file" name="profile" class="bg-transparent  profilebtn btnhover px-3 py-2" style="border-radius: 5px;"/ value="Upload Profile Picture">
        <button type="submit">Update Profile</button>
        
        {{-- {{dd($data)}} --}}
    </div>
    <!-- end of col-3 -->
    
</form>
<div class="col-12 col-md-8">
    <div class="row">
        
        <div class="col-12 col-md-6">
                    <form action="{{route('B&SEditpersonal')}}" method="POST" id="personal_detail" >
                        @csrf
                            <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                            <div class="mb-3">
                                <label for="fullname"  class="form-label fw-bold fs-5">Personal Details</label>
                                <input type="text" id="full_name" name="full_name" value="{{$data->first_name}}" class="form-control mb-4" id="fullname" placeholder="Full Name">
                                <input type="text" id="farm_name" name="farm_name" value="{{$seller->farm_name}}" class="form-control" id="fullname" placeholder="Farm Name">
                            </div>
                            <button type="submit" id="personal_submit" class="px-3 border border-secondary btnhover float-end bg-transparent py-2">Update/Change</button>
                        </div>
                        <!-- end of inner col  -->
                <hr class="my-3 bgcolor" style="opacity: 1;">

                <div class="col-12 d-flex py-2 align-items-center">

                    <span class="fw-bold me-3">Are you the Owner/Agent</span>
                    <div class="form-check ms-3">
                                <input class="form-check-input" id="owner_status" value="owner" {{ $data->owner_status==='owner' ? 'checked' : null }} type="radio" name="status" id="flexRadioDefault1"  >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Owner
                                </label>
                            </div>
                            <div class="form-check ms-4">
                                <input class="form-check-input" id="agent_status" type="radio" name="status" value="agent" {{ $data->owner_status==='agent' ? 'checked' : null }} id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Agent
                                </label>
                            </div>
                        </div>
                        <!-- end of col  -->
                    </form>



                <hr class="my-3 bgcolor" style="opacity: 1;">

            </div>
            <!-- end of row inner -->
            <div class="row">

                <div class="col-12 col-lg-10 ">

                    <label class="form-label fw-bold fs-5">Contact Details</label>

                    <div class="input-group d-block mb-3 d-md-flex">
                        <input type="number" name="contact_no" class="form-control inputno1" value="{{$data->contact_no}}" placeholder="Contact Number"  aria-describedby="basic-addon4">

                        <button type="button"  class="px-3 btnhover py-2 py-md-0 float-end mt-2 float-md-none mt-md-0 border border-secondary bg-transparent ms-2" id="basic-addon4">Update/Change</button>
                        <br class="d-md-none">
                        <span class="ms-3 text-secondary">Requires OTP</span>
                    </div>

                    <div class="input-group d-block mb-3 d-md-flex">
                        <input type="email" name="email" class="form-control inputno1" value="{{$data->email}}" placeholder="Email Id"  aria-describedby="basic-addon4">

                        <button type="button"  class="px-3 btnhover py-2 py-md-0 float-end mt-2 float-md-none mt-md-0 border border-secondary bg-transparent ms-2" id="basic-addon4">Update/Change</button>
                        <br class="d-md-none">
                        <span class="ms-3 text-secondary">Requires OTP</span>
                    </div>






                </div>
                <!-- end of col  -->




            </div>
            <!-- end of inner row  -->

            <hr class="my-3 bgcolor" style="opacity: 1;">
        <form action="{{route('B&SEditaddress')}}" method="POST" id="addressDetail">
            @csrf

            <input type="hidden" value="{{$data->id}}">
            <div class="row">

                <div class="col-12 col-md-6 mt-3">
                    <input type="text" id="address1" class="form-control" value="{{$address ? $address->address_line1 : NUll }}" placeholder="Address First Line" aria-label="addressfirst">
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <input type="text" id="address2" class="form-control" value="{{$address ? $address->address_line2 : Null}}" placeholder="Address Second Line" aria-label="addresssecode">
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <input type="text" id="area" class="form-control" value="{{$address ? $address->area : Null}}" placeholder="Enter Area" aria-label="area">
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <select id="inputCity" class="form-select overflow-scroll ">
                        <option value="" selected disabled>City</option>
                        @if ($address)
                            <option value="{{$address->city}}" selected>{{$address->city}}</option>
                        @else
                        <option value="Pune">Pune</option>
                        @endif
                    </select>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <select id="inputState"  class="form-select overflow-scroll ">
                        @if ($address)
                            <option value="{{$address->state}}">{{$address->state}}</option>
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
                        @if ($address)
                            <option value="{{$address->district}}">{{$address->district}}</option>
                        @else
                            <option value="" selected disabled>District</option>
                        @endif
                        <option value="Pune">Pune</option>

                    </select>
                </div>

                <div class="col-12 col-md-6 mt-3">
                    <select id="inputTaluka"  class="form-select overflow-scroll ">
                        @if ($address)
                            <option value="{{$address->taluka}}">{{$address->taluka}}</option>
                        @else
                        <option value="" selected disabled>Taluka</option>
                        @endif
                        <option value="Pune">Pune</option>
                    </select>
                </div>

                <div class="col-12 col-md-6 mt-3">
                    <input type="text" id="zip"  name="pincode" value="{{$address ? $address->zipcode : null}}" class="form-control" placeholder="Pin Code" aria-label="pincode">
                </div>

                <hr class="mt-5 mb-3 bgcolor" style="opacity: 0.6;">
                <div class="col-12 text-center mx-auto col-md-3">
                    <button type="submit"  class="px-3 btnhover py-2 border border-secondary bg-transparent">Update/Change</button>
                </div>

            </div>
            <!-- end of inner row  -->
        </form>
        <!-- end of form  -->



    </div>
    <!-- end of col-9  -->
{{-- </form> --}}
</div>
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">

    $('#personal_detail').on('submit',function(e){
        let id = $('#user_id').val();
        let f_name = $('#full_name').val();
        let farm_name = $('#farm_name').val();
        let agentStatus = $('#owner_status').val();
        console.log(agentStatus)
        e.preventDefault();
        $.ajax({
          type:'POST',
          url: '/b&s/personal/details/update',
          data:{
            "_token": "{{ csrf_token() }}",
            id:id,
            first_name:f_name,
            farm_name:farm_name,
          },
          success:function(response){
            if(response=='success'){
                alert('Personal detail  updated successfully!');
            }
            else{
                alert('Error in updating');
            }
          },
          });
        });
      </script>
      {{-- address detail --}}
      <script>
        $('#addressDetail').on('submit',function(e){
            let id=$('#user_id').val();
            let adress2=$('#address2').val();
            let adress1=$('#address1').val();
            let area=$('#area').val();
            let city=$('#inputCity').val();
            let state=$('#inputState').val();
            let district=$('#inputDistrict').val();  
            let taluka=$('#inputTaluka').val();
            let zip=$('#zip').val();
            // console.log(city);
        e.preventDefault();
        $.ajax({
          type:'POST',
          url: '/b&s/address/details/update',
          data:{
            "_token": "{{ csrf_token() }}",
            id:id,
            address1:adress1,
            address2:adress2,
            area:area,
            city:city,
            state:state,
            district:district,
            taluka:taluka,
            zip:zip,
          },
          success:function(response){
           if(response=='success'){
               alert('Address updated!')
           }
           else{
               alert('Having some issue!')
           }
          },
          });
        });
      </script>
@endsection