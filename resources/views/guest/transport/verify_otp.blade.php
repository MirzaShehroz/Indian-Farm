@extends('layouts.app')
@section('content')
    <div class="row justify-content-around align-items-center mt-5" id="login-page">


        <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 py-5">


            <div class="card border-0 p-2 p-md-3" style="border-radius: 10px; box-shadow: 1px 1px 10px lightgray;">
                <h6 class="text-secondary text-center">{{__('eng.sendVerificationMsg')}}</h6>
                <div class="card-body mt-4">

                    <form action="{{ route('transport-verifyotp') }}" method="post">
                        @csrf
                        <?php
                        $id = request()->segment(2);
                        ?>
                        <input type="hidden" value="{{ $id }}" name="id">
                        <input type="text" class="mobileno_input border_color form-control py-3 " name=""
                            placeholder="{{__('eng.enterMobileOtp')}}">

                        <input type="text" class="mobileno_input border_color form-control py-3 my-4" name="otp"
                            placeholder="{{__('eng.enterEmailOtp')}}" required>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                {{__('eng.agree')}}
                            </label>
                        </div>

                        <p class="text-secondary mb-4" style="font-size: 14px;">
                          {{__('eng.informationProvided')}}
                        </p>

                        <div class="text-center mt-3">
                            <button class="px-5 py-2 btnhover3 bgcolor fw-bold border_color" type="submit"><a href="#"
                                    class="text-decoration-none text-light">{{ __('eng.submit')}}</a></button>

                        </div>



                    </form>
                    <!-- end of form  -->



                </div>
            </div>
            <!-- end of card  -->


        </div>
        <!-- end of col  -->

    </div>
    <!-- end of row  -->
@endsection

@section('script')
@endsection
