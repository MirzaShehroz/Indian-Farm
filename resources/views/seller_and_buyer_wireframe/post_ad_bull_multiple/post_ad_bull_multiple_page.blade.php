
<form action="{{route('B&SPostAdds')}}" method="post" enctype="multipart/form-data">
    @csrf

  
    <div class="row pad-50 justify-content-around mt-5 pt-5 mt-lg-0" id="post_ad">


        <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">


            <div class="row justify-content-around shadow py-3">

                <h5 class="mb-3">Upload photos of your animal <i class="fas fa-images ms-3"></i></h5>

                <div class="col-4 text-center border p-3 upload">
                    <input type="file" name="img1">
                    <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found">
                    @error('img1')
                    <span>Image is required</span>    
                    @enderror

                </div>
                <!-- end of col inner  -->

                <div class="col-4 text-center border p-3 upload">
                    <input type="file" name="img2">
                    <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found">
                    @error('img2')
                    <span>Image is required</span>    
                    @enderror

                </div>
                <!-- end of col inner  -->

                <div class="col-4 text-center border p-3 upload">
                    <input type="file" name="img3">

                    <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found">
                    @error('img3')
                    <span>Image is required</span>    
                    @enderror

                </div>
                <!-- end of col inner  -->
                <div class="col-4 text-center border p-3 upload">
                    <input type="file" name="img4">

                    <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found">
                    @error('img4')
                    <span>Image is required</span>    
                    @enderror

                </div>
                <!-- end of col inner  -->

                <div class="col-4 text-center border p-3 upload">
                    <input type="file" name="img5">

                    <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found">
                    @error('img5')
                    <span>Image is required</span>    
                    @enderror

                </div>
                <!-- end of col inner  -->

                <div class="col-4 text-center border p-3 upload">
                    <input type="file" name="img6">
                    <img src="{{asset('images/plus.png')}}" class="upload_img" alt="im not found">
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
                        <input type="file" name="video">
                        <img src="{{asset('images/video-camera.png')}}" class="imgvideo" alt="img not found">
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
                    <input class="form-check-input" type="radio" name="breed_type" value="pure" id="Pure">
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
                @error('breed_type')
                <span>Breed Type is required</span>    
                @enderror

            </div>



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
                @error('areyouu')
                <span>OwnerShip status is required</span>    
                @enderror
            </div>


            <div class="d-flex justify-content-around mt-3 mb-5">

                <label for="vacinated" class="fw-bold me-auto text-dark">Vacinated</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vacinated" value="1" id="Vacinated1" required>
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

            </div>

            <div class="mb-4 mt-5">
                <textarea name="message" id="" class="form-control" placeholder="  Comments/Description" rows="6"></textarea>
            </div>
            <input type="hidden" name="req_type" value="0" >
            <button type="submit" class="btn bgcolor text-light btnhover2" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        </div>
        <!-- end of col-4 main  -->



    </div>
</form>