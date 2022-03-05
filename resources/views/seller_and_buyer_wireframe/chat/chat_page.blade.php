<div class="row pad-50 justify-content-around mt-5 pt-5 mt-lg-0" id="subscription">


    <div class="col-12 mt-5">


        <div class="d-md-flex align-items-start" id="tab-pills">



            <div class="nav flex-column nav-pills border border-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <h4 class="tcolor mb-4 text-center mt-3">{{__('eng.inbox')}}</h4>

                <button class="nav-link active border col-12" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">

                    <div class="row">

                        <div class="col-12">

                            <strong class="me-5">Full Name</strong>
                            <small>Date & Time</small>

                            <p class="text-start ms-4 mt-3">Animal Type <i class="fas fa-chevron-right float-end fs-5"></i></p>

                        </div>
                        <!-- end of col  -->


                    </div>
                    <!-- end of row  -->

                </button>

                <button class="nav-link border col-12" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                    <div class="row">

                        <div class="col-12">

                            <strong class="me-5">Full Name</strong>
                            <small>Date & Time</small>

                            <p class="text-start ms-4 mt-3">Animal Type <i class="fas fa-chevron-right float-end fs-5"></i></p>

                        </div>
                        <!-- end of col  -->


                    </div>
                    <!-- end of row  -->

                </button>

                <button class="nav-link  border col-12" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">

                    <div class="row">

                        <div class="col-12">

                            <strong class="me-5">Full Name</strong>
                            <small>Date & Time</small>

                            <p class="text-start ms-4 mt-3">Animal Type <i class="fas fa-chevron-right float-end fs-5"></i></p>

                        </div>
                        <!-- end of col  -->


                    </div>
                    <!-- end of row  -->

                </button>


                <button class="nav-link  border col-12" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">

                    <div class="row">

                        <div class="col-12">

                            <strong class="me-5">Full Name</strong>
                            <small>Date & Time</small>

                            <p class="text-start ms-4 mt-3">Animal Type <i class="fas fa-chevron-right float-end fs-5"></i></p>

                        </div>
                        <!-- end of col  -->


                    </div>
                    <!-- end of row  -->
                </button>






            </div>
            <!-- end of button div -->


            <div class="tab-content mt-4 mt-md-0 border border-dark" id="v-pills-tabContent">


                <div class="tab-pane fade show active ms-3" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <div class="row position-relative">

                        <div class="col-12 border-bottom border-dark py-3 mb-3">

                            <h5>User Full Name
                                <button type="button" class="btn-close float-end" data-bs-dismiss="v-pills-home" aria-label="Close"></button>
                            </h5>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12">

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Hello. How are you today?</p>
                                <span class="time-right">11:00</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Hey! I'm fine. Thanks for asking!</p>
                                <span class="time-left">11:01</span>
                            </div>

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12 chat_text" id="chat_text">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control py-3 ps-md-5" placeholder="Type Your Message" aria-label="Type Your Message" aria-describedby="message">
                                <button class="input-group-text bgcolor text-light px-3 fs-4 btn border" id="message"><i class="fab fa-telegram-plane"></i></button>
                            </div>

                        </div>
                        <!-- end of col  -->

                    </div>
                    <!-- end of row -->

                </div>
                <!-- end of tab pan  -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                    <div class="row">

                        <div class="col-12 border-bottom border-dark py-3 mb-3">

                            <h5>User Full Name
                                <button type="button" class="btn-close float-end" data-bs-dismiss="v-pills-home" aria-label="Close"></button>
                            </h5>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12">

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Hello. How are you today?</p>
                                <span class="time-right">11:00</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Hey! I'm fine. Thanks for asking!</p>
                                <span class="time-left">11:01</span>
                            </div>

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12 chat_text" id="chat_text">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control py-3 ps-md-5" placeholder="Type Your Message" aria-label="Type Your Message" aria-describedby="message">
                                <button class="input-group-text bgcolor text-light px-3 fs-4 btn border" id="message"><i class="fab fa-telegram-plane"></i></button>
                            </div>

                        </div>
                        <!-- end of col  -->

                    </div>
                    <!-- end of row -->


                </div>
                <!-- end of tab pan  -->

                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                    <div class="row">

                        <div class="col-12 border-bottom border-dark py-3 mb-3">

                            <h5>User Full Name
                                <button type="button" class="btn-close float-end" data-bs-dismiss="v-pills-home" aria-label="Close"></button>
                            </h5>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12">

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Hello. How are you today?</p>
                                <span class="time-right">11:00</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Hey! I'm fine. Thanks for asking!</p>
                                <span class="time-left">11:01</span>
                            </div>

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12 chat_text" id="chat_text">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control py-3 ps-md-5" placeholder="Type Your Message" aria-label="Type Your Message" aria-describedby="message">
                                <button class="input-group-text bgcolor text-light px-3 fs-4 btn border" id="message"><i class="fab fa-telegram-plane"></i></button>
                            </div>

                        </div>
                        <!-- end of col  -->

                    </div>
                    <!-- end of row -->


                </div>
                <!-- end of tab pan  -->


                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                    <div class="row">

                        <div class="col-12 border-bottom border-dark py-3 mb-3">

                            <h5>User Full Name
                                <button type="button" class="btn-close float-end" data-bs-dismiss="v-pills-home" aria-label="Close"></button>
                            </h5>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12">

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Hello. How are you today?</p>
                                <span class="time-right">11:00</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Hey! I'm fine. Thanks for asking!</p>
                                <span class="time-left">11:01</span>
                            </div>

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                            <div class="container">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" style="width:100%;">
                                <p>Sweet! So, what do you wanna do today?</p>
                                <span class="time-right">11:02</span>
                            </div>

                            <div class="container darker">
                                <img src="{{asset('images/admin.jpg')}}" alt="Avatar" class="right" style="width:100%;">
                                <p class="text-end">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                                <span class="time-left">11:05</span>
                            </div>

                        </div>
                        <!-- end of col  -->

                        <div class="col-12 chat_text" id="chat_text">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control py-3 ps-md-5" placeholder="Type Your Message" aria-label="Type Your Message" aria-describedby="message">
                                <button class="input-group-text bgcolor text-light px-3 fs-4 btn border" id="message"><i class="fab fa-telegram-plane"></i></button>
                            </div>

                        </div>
                        <!-- end of col  -->

                    </div>
                    <!-- end of row -->


                </div>
                <!-- end of tab pan  -->

            </div>
            <!-- end of tab content  -->

        </div>
        <!-- end of main tab  -->

    </div>
    <!-- end of col  -->

</div>