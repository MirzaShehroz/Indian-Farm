    
 <form action="{{route('B&SPostAdds')}}" method="POST" enctype="multipart/form-data">
     @csrf
    <div class="row pad-50 justify-content-around mt-5 pt-5 mt-lg-0" id="post_ad">


    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">


           
        <div class="row justify-content-around  shadow py-3">
    
            <h5 class="mb-3">{{__('eng.uploadAnimalImage')}} <i class="fas fa-images ms-3"></i></h5>

            <div class="col-4 text-center border p-3 upload">
                {{-- <input type="file" name="img1" id="img1"> --}}
                <p ><input type="file"  accept="image/*" name="img1" id="file1"  onchange="loadFile1(event)" style="display: none;"></p>
                <p id="upload1" class="bg-transparent border border-light  profilebtn btnhover" style="border-radius: 5px;">
                    <label for="file1" style="cursor: pointer;"> <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found"></label>
                </p>
                <img id="output1" class="upload_img" hidden >
                @error('img1')
                <span>{{__('eng.imageRequired')}}</span>
                @enderror
            </div>
            <!-- end of col inner  -->

            <div class="col-4 text-center border p-3 upload">
                {{-- <input type="file" name="img1" id="img1"> --}}
                <p ><input type="file"  accept="image/*" name="img2" id="file2"  onchange="loadFile2(event)" style="display: none;"></p>
                <p id="upload2" class="bg-transparent border border-light  profilebtn btnhover" style="border-radius: 5px;">
                    <label for="file2" style="cursor: pointer;"> <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found"></label>
                </p>
                <img id="output2" class="upload_img" hidden >
                @error('img2')
                <span>{{__('eng.imageRequired')}}</span>
                @enderror
            </div>
            <!-- end of col inner  -->

            <div class="col-4 text-center border p-3 upload">
                {{-- <input type="file" name="img1" id="img1"> --}}
                <p ><input type="file"  accept="image/*" name="img3" id="file3"  onchange="loadFile3(event)" style="display: none;"></p>
                <p id="upload3" class="bg-transparent border border-light  profilebtn btnhover" style="border-radius: 5px;">
                    <label for="file3" style="cursor: pointer;"> <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found"></label>
                </p>
                <img id="output3" class="upload_img" hidden >
                @error('img3')
                <span>{{__('eng.imageRequired')}}</span>
                @enderror
            </div>
            <!-- end of col inner  -->
            <div class="col-4 text-center border p-3 upload">
                {{-- <input type="file" name="img1" id="img1"> --}}
                <p ><input type="file"  accept="image/*" name="img4" id="file4"  onchange="loadFile4(event)" style="display: none;"></p>
                <p id="upload4" class="bg-transparent border border-light  profilebtn btnhover" style="border-radius: 5px;">
                    <label for="file4" style="cursor: pointer;"> <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found"></label>
                </p>
                <img id="output4" class="upload_img" hidden >
                @error('img4')
                <span>{{__('eng.imageRequired')}}</span>
                @enderror
            </div>
            <!-- end of col inner  -->

            <div class="col-4 text-center border p-3 upload">
                {{-- <input type="file" name="img1" id="img1"> --}}
                <p ><input type="file"  accept="image/*" name="img5" id="file5"  onchange="loadFile5(event)" style="display: none;"></p>
                <p id="upload5" class="bg-transparent border border-light  profilebtn btnhover" style="border-radius: 5px;">
                    <label for="file5" style="cursor: pointer;"> <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found"></label>
                </p>
                <img id="output5" class="upload_img" hidden >
                @error('img5')
                <span>{{__('eng.imageRequired')}}</span>
                @enderror
            </div>
            <!-- end of col inner  -->

            <div class="col-4 text-center border p-3 upload">
                {{-- <input type="file" name="img1" id="img1"> --}}
                <p ><input type="file"  accept="image/*" name="img6" id="file6"  onchange="loadFile6(event)" style="display: none;"></p>
                <p id="upload6" class="bg-transparent border border-light  profilebtn btnhover" style="border-radius: 5px;">
                    <label for="file6" style="cursor: pointer;"> <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found"></label>
                </p>
                <img id="output6" class="upload_img" hidden >
                @error('img6')
                <span>{{__('eng.imageRequired')}}</span>
                @enderror
            </div>
            <!-- end of col inner  -->
            <h6 class="text-secondary mt-3" style="font-size: 14px;">{{__('eng.maxImageSize')}}</h6>

        </div>
        <!-- end of row images inner  -->
        <!-- end of row images inner  -->

        <hr class="my-4">

        <div class="row  shadow py-3">

            <h5 class="mb-3">{{__('eng.uploadVideo')}}<i class="fas fa-file-video ms-3"></i></h5>

            <div class="col-12 border video_upload">


                <div class=" text-center mt-5">
                    <input type='file' name="video"  id='videoUpload' required/>
                    <video width="320" id="video" height="240" controls style="margin-right:20px" hidden>
                        <source  src="" type="video/mp4">
                            {{__('eng.videoTag')}}
                    </video>
                    @error('video')
                    <span>{{__('eng.videoRequired')}}</span>    
                    @enderror

                </div>
                <!-- end video  -->
            </div>
            <!-- end of col inner -->


            <h6 class="text-secondary mt-3" style="font-size: 14px;">{{__('eng.maxImageSize')}}</h6>



        </div>
        <!-- end of row video inner -->


    </div>
    <!-- end of col-4 main -->

    <div class="col-12 col-md-6 col-lg-3 pt-3  shadow">

        <div class="mb-2">
            <input type="number" class="form-control" name="age" id="age" placeholder="{{__('eng.age')}}" required>
        
        </div>
        <div class="mb-2">
            <input type="number" class="form-control" name="price" id="Price" placeholder="{{__('eng.price')}}">
            @error('price')
            <span>{{__('eng.priceRequired')}}</span>    
            @enderror
        </div>
        <div class="mb-2">
            <input type="date" class="form-control" name="due_month" id="monthpregnent" placeholder="Due Month If Pregnant"  required>

        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="breed" id="breed" placeholder="{{__('eng.breed')}}">
            @error('breed')
            <span>{{__('eng.breedRequired')}}</span>    
            @enderror
        </div>
        <div class="mb-2">
            <input type="number" class="form-control" name="milk_cap" id="milk" placeholder="{{__('eng.milkCap')}}
                " required>
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="area" id="area" placeholder="{{__('eng.area')}}">
            @error('area')
            <span>{{__('eng.areaRequired')}}</span>    
            @enderror
        </div>

        <div class=" mb-2">
            <select id="inputTaluka" name="taluka" class="form-select overflow-scroll ">
                <option value="" selected disabled>{{__('eng.taluka')}}</option>
                <option value="Pune">Pune</option>
            </select>
            @error('taluka')
            <span>{{__('eng.talukaRequired')}}</span>    
            @enderror
        </div>
        <div class=" mb-2">
            <select id="inputCity" name="city" class="form-select overflow-scroll ">
                <option value="" selected disabled>{{__('eng.city')}}</option>
                <option value="Pune">Pune</option>
            </select>
            @error('city')
            <span>{{__('eng.cityRequired')}}</span>    
            @enderror
        </div>
        <div class=" mb-2">
            <select id="inputDistrict" name="district" class="form-select overflow-scroll ">
                <option value="" selected disabled>{{__('eng.district')}}</option>
                <option value="Pune">Pune</option>
            </select>
            @error('district')
            <span>{{__('eng.districtRequired')}}</span>    
            @enderror
        </div>

        <div class="mb-2">
            <input type="number" class="form-control" name="pincode" id="pincode" placeholder="{{__('eng.pinCode')}}">
            @error('pincode')
            <span>{{__('eng.pinRequired')}}</span>    
            @enderror
        </div>


    </div>
    <!-- end of col -4 main -->

    <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0  shadow">



        <span class="fw-bold me-3 fs-6 text-secondary">{{__('eng.genderSet')}}</span>

        <div class="d-flex justify-content-aroun mt-3">

            <label for="status" class="fw-bold me-auto text-dark">{{__('eng.gender')}}</label>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    {{__('eng.female')}}
                </label>
            </div>
            <div class="form-check ms-4">
                <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    {{__('eng.male')}}
                </label>
            </div>
        <span id="genderError" style="display: none">{{__('eng.selectGender')}}</span>
        </div>


        <div class="d-flex justify-content-around mt-3">

            <label for="pregnant" class="fw-bold me-auto text-dark">{{__('eng.pregnant')}}</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pregnant" value="1" id="Pregnant1" checked>
                <label class="form-check-label" for="Pregnant1">
                    {{__('eng.yes')}}
                </label>
            </div>
            <div class="form-check ms-4">
                <input class="form-check-input" type="radio" name="pregnant" value="0" id="Pregnant2">
                <label class="form-check-label" for="Pregnant2">
                    {{__('eng.no')}}
                </label>
            </div>

        </div>



        <div class="d-flex justify-content-around mt-3">

            <label for="breed" class="fw-bold me-auto text-dark">{{__('eng.breedType')}}</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="breed_type" value="pure" id="Pure">
                <label class="form-check-label" for="Pure">
                    {{__('eng.pure')}}
                </label>
            </div>
            <div class="form-check ms-4">
                <input class="form-check-input" type="radio" name="breed" value="cross" id="Cross">
                <label class="form-check-label" for="Cross">
                    {{__('eng.cross')}}
                </label>
            </div>
            @error('breed')
            <span>{{__('eng.breedRequired')}}</span>    
            @enderror

        </div>



        <div class="d-flex justify-content-around mt-3">

            <label for="areyou" class="fw-bold me-auto text-dark">{{__('eng.areYou')}}</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="areyou" value="0" id="Owner" >
                <label class="form-check-label" for="Owner">
                    {{__('eng.owner')}}
                </label>
            </div>
            <div class="form-check ms-4">
                <input class="form-check-input" type="radio" name="areyou" value="1" id="Mediator">
                <label class="form-check-label" for="Mediator">
                    {{__('eng.mediator')}}
                </label>
            </div><br>
            @error('areyou')
            <span>{{__('eng.ownerRequired')}}</span>    
            @enderror

        </div>


        <div class="d-flex justify-content-around mt-3 mb-4">

            <label for="vacinated" class="fw-bold me-auto text-dark">{{__('eng.vacinated')}}</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vacinated" value="1" id="Vacinated1">
                <label class="form-check-label" for="Vacinated1">
                    {{__('eng.yes')}}
                </label>
            </div>
            <div class="form-check ms-4">
                <input class="form-check-input" type="radio" name="vacinated" value="0" id="Vacinated2">
                <label class="form-check-label" for="Vacinated2">
                    {{__('eng.no')}}
                </label>
            </div>
            @error('vacinated')
                <span>  {{__('eng.vacinationRequired')}}</span>
            @enderror
        </div>
        
        <div class="mb-2">
            <input type="number" class="form-control" name="tag_num" id="tag_num" placeholder="{{__('eng.tagNum')}}">
            @error('tag_num')
            <span>  {{__('eng.tagNumber')}}</span>
        @enderror
        </div>

        <div class="mb-4">
            <textarea name="message" id="" class="form-control" placeholder=" {{__('eng.desc')}}" name="message" rows="6"></textarea>
        </div>
        
        <input type="hidden" name="request_type" value="2">
        <button id="submit" type="submit" class="btn bgcolor text-light btnhover2" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__('eng.submit')}}</button>

        </div>
        <!-- end of col-4 main  -->

    </div>
</form>   


