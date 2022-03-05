@extends('layouts.app');
@section('content')
    <div class="row pad-50 justify-content-between mt-5 pt-5 mt-lg-0" id="edit_ads">
        {{-- {{ dd($ads) }} --}}
        <form action="{{route('B&SUpdateAds')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $ads->id}}">
            <div class="col-12">

                <div class="row">

                    <div class="col-12 col-md-3 col-lg-2 my-3 text-center">

                        <!-- <input accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                        <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                        <img id="output" class=" adimg2" alt="img not found"> -->
                        <p><input type="file" accept="image/*" name="image1" id="file" onchange="loadFile(event)"
                                style="display: none; " ></p>
                        <p><label class="bgcolor px-3 py-2 mt-4 rounded-pill text-light" for="file"
                                style="cursor: pointer;">{{ __('eng.uploadImage') }}</label></p>
                        <p><img id="output" width="200" class=" adimg2"
                                src="{{ asset($ads->photo1 ? $ads->photo1 : 'images/Overview.png') }}" /><br></p>
                        <button type="button" class="bgcolor btnhover2 border_color2 px-3 py-2 mt-4 rounded-pill text-light"
                            onclick="deleteimg(0)">{{ __('eng.delete') }}</button>

                    </div>
                    <!-- end of col  -->
                    <div class="col-12 col-md-3 col-lg-2 my-3 text-center">

                        <!-- <input accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                        <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                        <img id="output" class=" adimg2" alt="img not found"> -->
                        <p><input type="file" accept="image/*" name="image2" id="image2" onchange="loadFile1(event)"
                                style="display: none;" ></p>
                        <p><label class="bgcolor px-3 py-2 mt-4 rounded-pill text-light" for="image2"
                                style="cursor: pointer;">{{ __('eng.uploadImage') }}</label></p>
                        <p><img id="output1" width="200" class=" adimg2"
                                src="{{ asset($ads->photo2 ? $ads->photo2 : 'images/Overview.png') }}" /><br></p>
                        <button  type="button" class="bgcolor btnhover2 border_color2 px-3 py-2 mt-4 rounded-pill text-light"
                            onclick="deleteimg(1)">{{ __('eng.delete') }}</button>

                    </div>
                    <!-- end of col  -->
                    <div class="col-12 col-md-3 col-lg-2 my-3 text-center">

                        <!-- <input accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                        <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                        <img id="output" class=" adimg2" alt="img not found"> -->
                        <p><input type="file" accept="image/*" name="image3" id="image3" onchange="loadFile2(event)"
                                style="display: none;" ></p>
                        <p><label class="bgcolor px-3 py-2 mt-4 rounded-pill text-light" for="image3"
                                style="cursor: pointer;">{{ __('eng.uploadImage') }}</label></p>
                        <p><img id="output2" width="200" class=" adimg2"
                                src="{{ asset($ads->photo3 ? $ads->photo3 : 'images/Overview.png') }}" /><br></p>
                        <button  type="button" class="bgcolor btnhover2 border_color2 px-3 py-2 mt-4 rounded-pill text-light"
                            onclick="deleteimg(2)">{{ __('eng.delete') }}</button>

                    </div>
                    <!-- end of col  -->
                    <div class="col-12 col-md-3 col-lg-2 my-3 text-center">

                        <!-- <input accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                        <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                        <img id="output" class=" adimg2" alt="img not found"> -->
                        <p><input type="file" accept="image/*" name="image4" id="image4" onchange="loadFile3(event)"
                                style="display: none;" ></p>
                        <p><label class="bgcolor px-3 py-2 mt-4 rounded-pill text-light" for="image4"
                                style="cursor: pointer;">{{ __('eng.uploadImage') }}</label></p>
                        <p><img id="output3" width="200" class=" adimg2"
                                src="{{ asset($ads->photo4 ? $ads->photo4 : 'images/Overview.png') }}" /><br></p>
                        <button  type="button" class="bgcolor btnhover2 border_color2 px-3 py-2 mt-4 rounded-pill text-light"
                            onclick="deleteimg(3)">{{ __('eng.delete') }}</button>

                    </div>
                    <!-- end of col  -->
                    <div class="col-12 col-md-3 col-lg-2 my-3 text-center">

                        <!-- <input accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                        <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                        <img id="output" class=" adimg2" alt="img not found"> -->
                        <p><input type="file" accept="image/*" name="image5" id="image5" onchange="loadFile4(event)"
                                style="display: none;" ></p>
                        <p><label class="bgcolor px-3 py-2 mt-4 rounded-pill text-light" for="image5"
                                style="cursor: pointer;">{{ __('eng.uploadImage') }}</label></p>
                        <p><img id="output4" width="200" class=" adimg2"
                                src="{{ asset($ads->photo5 ? $ads->photo5 : 'images/Overview.png') }}" /><br></p>
                                <button  type="button" class="bgcolor btnhover2 border_color2 px-3 py-2 mt-4 rounded-pill text-light"
                                onclick="deleteimg(4)">{{ __('eng.delete') }}</button>

                    </div>
                    <!-- end of col  -->
                    <div class="col-12 col-md-3  col-lg-2 my-3 text-center colhover py-3">

                        <input type='file' name="video" id='videoUpload' style="display:none;" />
                        <p><label class="bgcolor px-3 py-2 mt-4 rounded-pill text-light" for="videoUpload"
                            style="cursor: pointer;">{{ __('eng.uploadVideo') }}</label></p>
                        <video width="320" height="240" controls style="margin-right:20px">
                            <source src="{{ asset($ads->video ? $ads->video : null) }}" type="video/mp4">
                            {{ __('eng.videoTag') }}
                        </video>
                        <p><a id="video1" href="#" target="_blank">{{ __('eng.videoTag2') }}</a></p>
                        <p><a>{{ __('eng.videoTag3') }}</a></p>
                    </div>
                    <!-- end of col  -->

                </div>
                <!-- end of row  -->

                <div class="row justify-content-around mt-5" id="filld-ads">



                    <div class="col-12 col-md-6 p-lg-4">

                        <div class="row px-lg-5">

                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text"
                                        id="basic-addon1">{{ __('eng.displayAnimalType') }}</span>

                                    <select name="animal_type" class="form-control py-2" aria-describedby="basic-addon1"
                                        type="text" >
                                        <option disable>{{ __('eng.animalType') }}</option>
                                        <option value="0" {{ $ads->animal_type == 0 ? 'selected' : null }}>
                                            {{ __('eng.bull') }}</option>
                                        <option value="1" {{ $ads->animal_type == 1 ? 'selected' : null }}>
                                            {{ __('eng.buffalo') }}</option>
                                        <option value="2" {{ $ads->animal_type == 2 ? 'selected' : null }}>
                                            {{ __('eng.cow') }}</option>
                                        <option value="3" {{ $ads->animal_type == 3 ? 'selected' : null }}>
                                            {{ __('eng.sheep') }}</option>
                                        <option value="4" {{ $ads->animal_type == 4 ? 'selected' : null }}>
                                            {{ __('eng.goat') }}</option>
                                    </select>
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon2">{{ __('eng.weight') }}</span>
                                    <input type="text" name="weight" value="{{ $ads->weight }}" class="form-control py-2"
                                        aria-describedby="basic-addon2" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">{{ __('eng.noAnimal') }} </span>
                                    <input type="text" name="no_animals" value="{{ $ads->no_animals }}"
                                        class="form-control py-2" aria-describedby="basic-addon3" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon4">{{ __('eng.breedType') }} </span>
                                    <!-- <input type="text" name="breed_type" class="form-control py-2" aria-describedby="basic-addon4"> -->
                                    <select name="breed_type" class="form-control py-2" aria-describedby="basic-addon4"
                                        >
                                        <option>{{ __('eng.selectBreedType') }} </option>
                                        <option value="0"
                                            {{ $ads->breed_type == 0 || $ads->breed_type === 'cross' ? 'selected' : null }}>
                                            {{ __('eng.mixed') }} </option>
                                        <option value="1"
                                            {{ $ads->breed_type == 1 || $ads->breed_type === 'pure' ? 'selected' : null }}>
                                            {{ __('eng.pure') }} </option>
                                    </select>
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon5">{{ __('eng.dueMonth') }} </span>
                                    <input type="date" name="month_pregnancy" value="{{ $ads->due_month_pregnancy }}"
                                        class="form-control py-2" aria-describedby="basic-addon5" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            {{-- <div class="col-12">

                            <!-- <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon5">Due Month  </span>
                                <input type="text" class="form-control py-2" aria-describedby="basic-addon5">
                              </div> -->

                        </div> --}}
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon7">{{ __('eng.vacinated') }} </span>
                                    <!-- <input type="text" name="vaccinated" class="form-control py-2" aria-describedby="basic-addon7"> -->
                                    <select name="vaccinated" class="form-control py-2" aria-describedby="basic-addon4"
                                        >
                                        <option value="0" {{ $ads->vaccinated == 0 ? 'selected' : null }}>
                                            {{ __('eng.no') }} </option>
                                        <option value="1" {{ $ads->vaccinated == 1 ? 'selected' : null }}>
                                            {{ __('eng.yes') }} </option>
                                    </select>
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon8">{{ __('eng.certifyRegisNum') }}
                                    </span>
                                    <input type="text" name="certified_reg_no" value="{{ $ads->certified_reg_no }}"
                                        class="form-control py-2" aria-describedby="basic-addon8" >
                                </div>

                            </div>
                            <!-- end of col  -->

                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon9">{{ __('eng.address1') }} </span>
                                    <input type="text" class="form-control py-2" aria-describedby="basic-addon9"
                                        value="{{ $ads->addressline1 }}" name="address_line1" id="address_line11"
                                       required >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon10">{{ __('eng.state') }} </span>
                                    <input type="text" class="form-control py-2" aria-describedby="basic-addon10"
                                        value="{{ $ads->state }}" name="state" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon11">{{ __('eng.pinCode') }} </span>
                                    <input type="text" class="form-control py-2" aria-describedby="basic-addon11"
                                        value="{{ $ads->zipcode }}" name="zipcode" >
                                </div>

                            </div>
                            <!-- end of col  -->

                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon11">{{ __('eng.tagNum') }} </span>
                                    <input type="text" class="form-control py-2" aria-describedby="taluka"
                                        value="{{ $ads->tag_num }}" name="tag_num" >
                                </div>

                            </div>


                        </div>
                        <!-- end of row  -->

                    </div>
                    <!-- end of col  -->

                    <div class="col-12 col-md-6 mt-4">

                        <div class="row px-lg-5">

                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon12">{{ __('eng.price') }} </span>
                                    <input type="text" class="form-control py-2" value="{{ $ads->price }}"
                                        aria-describedby="basic-addon12" name="price" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon13">{{ __('eng.age') }}</span>
                                    <input type="number" class="form-control py-2" value="{{ $ads->age }}"
                                        aria-describedby="basic-addon13" name="age" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon14">{{ __('eng.breed') }} </span>
                                    <input type="text" class="form-control py-2" value="{{ $ads->breed }}"
                                        aria-describedby="basic-addon14" name="breed" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon15">{{ __('eng.pregnant') }} </span>
                                    <!-- <input type="text" class="form-control py-2" aria-describedby="basic-addon15" name="pregnant"> -->
                                    <select name="pregnant" type="text" class="form-control py-2"
                                        aria-describedby="basic-addon15" >
                                        <option value="0" {{ $ads->pregnant == 0 ? 'selected' : null }}>
                                            {{ __('eng.no') }}</option>
                                        <option value="1" {{ $ads->pregnant == 1 ? 'selected' : null }}>
                                            {{ __('eng.yes') }}</option>
                                    </select>
                                </div>

                            </div>
                            <!-- end of col  -->

                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon16">{{ __('eng.area') }}</span>
                                    <input type="text" class="form-control py-2" aria-describedby="basic-addon16"
                                        value="{{ $ads->area }}" name="area" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon17">{{ __('eng.milkCap') }} </span>
                                    <input type="number" class="form-control py-2" aria-describedby="basic-addon17"
                                        value="{{ $ads->milk_capacity }}" name="milk_capacity" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon18">{{ __('eng.certified') }} </span>
                                    <select name="certified" type="text" class="form-control py-2"
                                        aria-describedby="basic-addon15" >
                                        <option value="0" {{ $ads->certified == 0 ? 'selected' : null }}>
                                            {{ __('eng.no') }}</option>
                                        <option value="1" {{ $ads->certified == 1 ? 'selected' : null }}>
                                            {{ __('eng.yes') }}</option>
                                    </select>
                                </div>

                            </div>
                            <!-- end of col  -->

                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon19">{{ __('eng.address1') }} </span>
                                    <input type="text" class="form-control py-2" aria-describedby="basic-addon19"
                                        value="{{ $ads->addressline2 }}" name="address_line2" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon10">{{ __('eng.district') }} </span>
                                    <input type="text" class="form-control py-2" aria-describedby="basic-addon10"
                                        value="{{ $ads->district }}" name="district" >
                                </div>

                            </div>
                            <!-- end of col  -->
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon11">{{ __('eng.taluka') }} </span>
                                    <input type="text" class="form-control py-2" aria-describedby="taluka"
                                        value="{{ $ads->takula }}" name="taluka" >
                                </div>

                            </div>
                            <!-- end of col  -->

                        </div>
                        <!-- end of row  -->
                    </div>
                    <!-- end of col  -->



                    <div class="col-12 text-center mx-auto col-md-3 mb-5 mt-4">
                        <button type="submit"
                            class="px-3 px-md-5 text-light py-2 border bgcolor hoverbtna border_color2 border-secondary">Save</button>
                    </div>


                </div>
                <!-- end of row  -->

            </div>
            <!-- end of col  -->
        </form>

    </div>
    <!-- end of edit profile row  -->
@endsection

@section('script')
    <script>
        var loadFile = function(event) {
            var image1 = document.getElementById('output');
            image1.src = URL.createObjectURL(event.target.files[0]);
        };

        var loadFile1 = function(event) {
            var image2 = document.getElementById('output1');
            image2.src = URL.createObjectURL(event.target.files[0]);

        };

        var loadFile2 = function(event) {
            var image3 = document.getElementById('output2');
            image3.src = URL.createObjectURL(event.target.files[0]);

        };

        var loadFile3 = function(event) {
            var image4 = document.getElementById('output3');
            image4.src = URL.createObjectURL(event.target.files[0]);

        };

        var loadFile4 = function(event) {
            var image5 = document.getElementById('output4');
            image5.src = URL.createObjectURL(event.target.files[0]);

        };
        var deleteimg = function(id) {

            if (id == 0) {
                img = document.getElementById('output');
                img.removeAttribute("src");
            } else if (id == 1) {
                img = document.getElementById('output1');
                img.removeAttribute("src");
            } else if (id == 2) {
                img = document.getElementById('output2');
                img.removeAttribute("src");
            } else if (id == 3) {
                img = document.getElementById('output3');
                img.removeAttribute("src");
            } else if (id == 4) {
                img = document.getElementById('output4');
                img.removeAttribute("src");
            } else if (id == 5) {
                img = document.getElementById('output');
                img.removeAttribute("src");
            } else if (id == 6) {
                img = document.getElementById('output1');
                img.removeAttribute("src");
            } else if (id == 7) {
                img = document.getElementById('output2');
                img.removeAttribute("src");
            } else if (id == 8) {
                img = document.getElementById('output3');
                img.removeAttribute("src");
            } else if (id == 9) {
                img = document.getElementById('output4');
                img.removeAttribute("src");
            }

        }

        document.getElementById("videoUpload")
            .onchange = function(event) {
                let file = event.target.files[0];
                let blobURL = URL.createObjectURL(file);
                document.querySelector("video").src = blobURL;
            }

        document.getElementById("videoUpload1")
            .onchange = function(event) {
                let file = event.target.files[0];
                let blobURL = URL.createObjectURL(file);
                document.querySelector("video1").src = blobURL;
            }
    </script>
@endsection
