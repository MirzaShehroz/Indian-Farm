<div class="row pad-50 justify-content-between mt-5 pt-5 mt-lg-0" id="my_ads">


    <div class="col-12 mt-5 mt-md-0">

        {{-- {{dd($data)}} --}}
        <div class="row ">

            <div class="col-12 col-md-4">

                <div class="input-group mb-3 position-relative">
                    <input type="text" class="form-control rounded-pill ps-4 btn-outline-light border py-2"
                        placeholder="{{ __('eng.searchPost') }}" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <span class="input-group-text btn position-absolute end-0" style="z-index: 1100;"
                        id="basic-addon2"><i class="fas fa-search"></i></span>
                </div>

            </div>
            <!-- end of col-12  inner  -->

        </div>
        <!-- end of inner row  -->

        @foreach ($data as $item)
            <div class="row mt-5 py-4 px-md-3 pt-md-3 border queryrow1" id="user_ad"
                style="border-radius: 10px; box-shadow: 1px 1px 20px lightgrey;">

                <div class="col-12 col-md-2 border-end border-dark">

                    <h6 class="mb-3 text-center tcolor fw-bold">{{ __('eng.addPostedDate') }}</h6>

                    <div class=" px-4 border_color2 px-md-0 px-xl-4 mb-3 mb-md-0 d-flex justify-content-between py-2">

                        <span>{{ $item->created_at }}</span>
                        <span><img src="{{ asset('images/calendar.png') }}" class="d-md-none d-lg-flex"
                                alt="img not found"></span>

                    </div>




                </div>
                <!-- end of inner col  -->


                <div class="col-12 col-md-10">

                    <div class="row justify-content-around">

                        <div class="col-6 col-md-2 text-center ">

                            <img src="{{ asset($item->photo1) }}" class="your_ad_img" alt="img not found">


                        </div>
                        <!-- end of col  -->

                        <div class="col-6 col-md-2  border-start border-dark">
                            <h6 class="mb-3 tcolor fw-bold">{{ __('eng.price') }}</h6>

                            <strong><span><i class="fas fa-rupee-sign me-2"></i></span> <span>{{ $item->price }}</span>
                            </strong>

                        </div>
                        <!-- end of col  -->

                        <div class="col-6 mt-4 mt-md-0 col-md-2  border-start border-dark">
                            <h6 class="mb-3 tcolor fw-bold">{{ __('eng.quality') }} =<span
                                    class="ms-2 text-dark">{{ $item->no_animals }}</span> </h6>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    {{ __('eng.premium') }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2"
                                    {{ $item->certified ? 'checked' : null }}>
                                <label class="form-check-label" for="flexCheckChecked2">
                                    {{ __('eng.certified') }}
                                </label>
                            </div>

                        </div>
                        <!-- end of col  -->

                        <div class="col-6 mt-4 mt-md-0 col-md-2  border-start border-dark">
                            <h6 class="mb-3 tcolor fw-bold">{{ __('eng.adStatus') }}</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ __('eng.active') }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{ __('eng.inActive') }}
                                </label>
                            </div>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12 col-md-2 mt-4 mt-md-0 border-start border-dark ">
                            <h6 class="mb-4 tcolor fw-bold text-center">{{ __('eng.adOption') }}</h6>

                            <div class="d-flex d-md-block d-lg-flex justify-content-around">

                                <form action="{{ route('B&SEditAds')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="photo_id" value="{{ $item->ads_photo_id }}">
                                    <button type="submit"  class="btnhover px-4 px-md-3 px-lg-2 px-xl-3 border border-secondary bg-transparent rounded-pill mb-md-3 me-2 mb-lg-0">{{ __('eng.edit') }}</button>
                                </form>

                                <form action="{{ route('B&S.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $item->ads_photo_id }}" name="photo_id">
                                    <button type="submit"
                                        class="btnhover px-3 px-md-2 px-lg-2 px-xl-3 border border-secondary bg-transparent rounded-pill">{{ __('eng.remove') }}</button>
                                </form>

                            </div>

                        </div>
                        <!-- end of col inner -->

                    </div>
                    <!-- end of row innner -->

                    <div class="row mt-3 pb-0 justify-content-between border-top border-dark align-items-center">

                        <div class="col-12 mt-3 col-md-6 col-lg-5 col-xxl-6 align-items-center">

                            <p><i class="fas fa-eye me-2 tcolor"></i> <strong> {{ __('eng.noView') }} = <span>10</span>
                                </strong> </p>


                        </div>
                        <!-- end of col inner  -->
                        @if ($item->certified == 0)
                            <div class="col-6 col-md-3">
                                <a href="{{ route('certifyAnimal') }}">
                                    <button
                                        class="btnhover3 btnfast yellow border border-dark px-4 py-1">{{ __('eng.certifyAnimal') }}</button>
                                </a>

                            </div>
                        @endif

                        <!-- end of col inner  -->

                        <div class="col-6 col-md-3 col-lg-4 col-xxl-3 mt-md-0">

                            <button
                                class="btnhover3 btnfast greencolor text-light border border-dark px-4 py-1">{{ __('eng.sellFast') }}</button>


                        </div>
                        <!-- end of col inner  -->


                    </div>
                    <!-- end of row inner -->


                </div>
                <!-- end of col-10 -->





            </div>
            <!-- end of row inner -->
        @endforeach


        <div class="row mt-5 justify-content-around ext-centert">

            <div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>


            </div>
            <!-- end of col  -->


        </div>
        <!-- end of row paggi  -->


    </div>
    <!-- end of col-12  -->





</div>
