<form action="{{route('B&SPostAdds')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="row pad-50 justify-content-around mt-5 pt-5 mt-lg-0" id="post_ad">


        <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">


                
            <div class="row justify-content-around  shadow py-3">
    
                <h5 class="mb-3">Upload photos of your animal <i class="fas fa-images ms-3"></i></h5>
    
                <div class="col-4 text-center border p-3 upload">
                    {{-- <input type="file" name="img1" id="img1"> --}}
                    <p ><input type="file"  accept="image/*" name="img1" id="file1"  onchange="loadFile1(event)" style="display: none;"></p>
                    <p id="upload1" class="bg-transparent border border-light  profilebtn btnhover" style="border-radius: 5px;">
                        <label for="file1" style="cursor: pointer;"> <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found"></label>
                    </p>
                    <img id="output1" class="upload_img" hidden >
                    @error('img1')
                    <span>Image is required</span>
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
                    <span>Image is required</span>
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
                    <span>Image is required</span>
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
                    <span>Image is required</span>
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
                    <span>Image is required</span>
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
                    <span>Image is required</span>
                    @enderror
                </div>
                <!-- end of col inner  -->
    
                <h6 class="text-secondary mt-3" style="font-size: 14px;">Please Note Maximum file size is 2 MB per file</h6>
    
            </div>
            <!-- end of row images inner  -->

            <hr class="my-4">

            <div class="row shadow py-3">

                <h5 class="mb-3">Upload Video of your animal<i class="fas fa-file-video ms-3"></i></h5>

                <div class="col-12 border video_upload">
                    <div class=" text-center mt-5">
                        <input type='file' name="video"  id='videoUpload' required/>
                        <video width="320" id="video" height="240" controls style="margin-right:20px" hidden>
                            <source  src="" type="video/mp4">
                         Your browser does not support the video tag.
                        </video>
                        @error('video')
                        <span>Video is required</span>
                    @enderror

                    </div>
                    <!-- end video  -->
                </div>
                <!-- end of col inner -->



                <h6 class="text-secondary mt-3" style="font-size: 14px;">Please Note Maximum file size is 20 MB</h6>



            </div>
            <!-- end of row video inner -->


        </div>
        <!-- end of col-4 main -->

        <div class="col-12 col-md-6 col-lg-3 pt-3 shadow">

            <div class="mb-2">
                <input type="number" class="form-control" name="no_animals" id="number" placeholder="No Of Animals" required>
                
            </div>
            <div class="mb-2">
                <input type="number" class="form-control" name="price" id="Price" placeholder="Price">
                @error('price')
                <span>Price is required</span>
                @enderror
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="breed" id="breed" placeholder="Breed">
                @error('breed')
                <span>Breed is required</span>
                @enderror
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="area" id="area" placeholder="Area">
                @error('area')
                <span>Area is required</span>
            @enderror
            </div>

            <div class=" mb-2">
                <select id="inputTaluka" name="taluka" class="form-select overflow-scroll ">
                    <option value="" selected disabled>Taluka</option>
                    <option value="Pune">Pune</option>
                </select>
                @error('taluka')
                <span>Taluka is required</span>
            @enderror
            </div>
            <div class=" mb-2">
                <select id="inputCity" name="city" class="form-select overflow-scroll ">
                    <option value="" selected disabled>City</option>
                    <option value="Pune">Pune</option>
                </select>
                @error('city')
                <span>City is required</span>
            @enderror
            </div>
            <div class=" mb-2">
                <select id="inputDistrict" name="district" class="form-select overflow-scroll ">
                    <option value="" selected disabled>District</option>
                    <option value="Pune">Pune</option>
                </select>
                @error('district')
                <span>District is required</span>
            @enderror
            </div>


            <div class="mb-2">
                <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Pin Code">
                @error('pincode')
                <span>Pincode is required</span>
            @enderror
            </div>

        </div>
        <!-- end of col -4 main -->

        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-2 shadow">

            <div class="d-flex justify-content-around mt-3">

                <label for="breed" class="fw-bold me-auto text-dark">Breed Type</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="breed_type" value="pure" id="Pure" checked>
                    <label class="form-check-label" for="Pure">
                        Pure
                    </label>
                </div>
                <div class="form-check ms-4">
                    <input class="form-check-input" type="radio" name="breed_type" value="cross" id="Cross">
                    <label class="form-check-label" for="Cross">
                        Cross
                    </label>
                </div>
            </div>
            @error('breed_type')
            <span>Breed Type is required</span>
            @enderror


            <div class="d-flex justify-content-around mt-3">

                <label for="areyou" class="fw-bold me-auto text-dark">Are You</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="areyou" value="1" id="Owner" >
                    <label class="form-check-label" for="Owner">
                        Owner
                    </label>
                </div>
                <div class="form-check ms-4">
                    <input class="form-check-input" type="radio" name="areyou" value="0" id="Mediator">
                    <label class="form-check-label" for="Mediator">
                        Mediator
                    </label>
                </div>

            </div>
            @error('areyou')
            <span>Status is required</span>
        @enderror


            <div class="d-flex justify-content-around mt-3 mb-5">

                <label for="vacinated" class="fw-bold me-auto text-dark">Vacinated</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vacinated" value="1" id="Vacinated1">
                    <label class="form-check-label" for="Vacinated1">
                        Yes
                    </label>
                </div>
                <div class="form-check ms-4">
                    <input class="form-check-input" type="radio" name="vacinated" value="0" id="Vacinated2">
                    <label class="form-check-label" for="Vacinated2">
                        No
                    </label>
                </div>
                @error('vacinated')
                <span>Status is required</span>
            @enderror
            </div>
            
            <div class="mb-2">
                <input type="number" class="form-control" name="tag_num" id="tag_num" placeholder="Tag Number :">
                @error('tag_num')
                <span>tag number is required</span>
            @enderror
            </div>

            <div class="mb-4 mt-5">
                <textarea name="message" id="" class="form-control" placeholder="  Comments/Description" rows="6"></textarea>
            </div>
            <input type="hidden" name="request_type" value="3">
            <button type="submit" class="btn bgcolor text-light btnhover2" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>

        </div>
        <!-- end of col-4 main  -->

    </div>
</form>
