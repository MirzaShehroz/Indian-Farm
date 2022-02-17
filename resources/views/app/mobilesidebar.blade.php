<div class="d-md-flex align-items-start bg-light" id="tab_pill_main">
                    
                        <div class="nav flex-column nav-pills me-lg-3 me-md-2 bg_primary col-12 col-md-12 text-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        @if(Auth::check()=='true')
                             @if(Auth::user()->user_role=='admin')

                            <a href="{{url('admin/index')}}" class="nav-link active px-5 px-md-1 border-bottom ps-xl-3 btn-p text-light py-3 text-start" id="v-pills-home-tab"    role="tab" ><i class="fas fa-desktop me-3 me-lg-1 me-xl-3"></i> Dashboard</a>

                            <a href="{{url('admin/users')}}" class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-profile-tab"    role="tab" ><i class="fas fa-users me-3 me-lg-1 me-xl-3"></i> Users  </a>

                            <a href="{{url('admin/ads')}}" class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-messages-tab"   role="tab" > <i class="fas fa-ad me-3 me-lg-1 me-xl-3"></i> Ads</a>

                            <a  href="{{url('admin/vets')}}"class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings-tab"  role="tab" > <i class="fas fa-user-md me-3"></i>Vets</a>

                            <a  href="{{url('admin/transportdriver')}}"class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings-tab"  role="tab" > <i class="fas fa-shuttle-van me-3 me-lg-1 me-xl-3"></i>Transport Drivers</a>
                            <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings2" type="button" role="tab" aria-controls="v-pills-settings2" aria-selected="false"> <i class="fas fa-calendar me-3 me-lg-1 me-xl-3"></i> Appointments Booked </button> -->
                            <a  href="{{url('admin/appointmentbooked')}}"class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings2-tab"  role="tab" > <i class="fas fa-calendar me-3 me-lg-1 me-xl-3"></i>Appointments Booked </a>
                            <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings3" type="button" role="tab" aria-controls="v-pills-settings3" aria-selected="false"> <i class="fas fa-certificate me-3 me-lg-1 me-xl-3"></i>  Certify Animal </button> -->
                            <a  href="{{url('admin/certifyanimal')}}"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings3-tab"  role="tab" > <i class="fas fa-certificate me-3 me-lg-1 me-xl-3"></i>Certify Animal</a>

                            <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings4" type="button" role="tab" aria-controls="v-pills-settings4" aria-selected="false"> <i class="fas fa-calendar-check me-3 me-lg-1 me-xl-3"></i>  Transport Booked
                            </button> -->
                            <a  href="{{url('admin/transportbooked')}}"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings4-tab"  role="tab" > <i class="fas fa-calendar-check me-3 me-lg-1 me-xl-3"></i>Transport Booked</a>

                            <!-- <button class="nav-link btn-p px-5 border-bottom  px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings5" type="button" role="tab" aria-controls="v-pills-settings5" aria-selected="false"> <i class="fas fa-id-card me-3 me-lg-1 me-xl-3"></i> My Profile </button> -->
                            <a  href="{{url('admin/profile')}}"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings5-tab"  role="tab" > <i class="fas fa-id-card me-3 me-lg-1 me-xl-3"></i>Profile</a>

                            <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings6" type="button" role="tab" aria-controls="v-pills-settings6" aria-selected="false"> <i class="fas fas fa-tasks me-3 me-lg-1 me-xl-3"></i>  Content Management </button> -->
                            <a  href="{{url('admin/contentmanagement')}}"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings6-tab"  role="tab" > <i class="fas fas fa-tasks me-3 me-lg-1 me-xl-3"></i>Content Management</a>

                            </div>
                             @elseif(Auth::user()->user_role=='transport')
                             <a  href="{{url('admin/profile')}}"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings5-tab"  role="tab" > <i class="fas fa-id-card me-3 me-lg-1 me-xl-3"></i>Dashboard</a>

                                <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings6" type="button" role="tab" aria-controls="v-pills-settings6" aria-selected="false"> <i class="fas fas fa-tasks me-3 me-lg-1 me-xl-3"></i>  Content Management </button> -->
                              <a  href="{{url('admin/contentmanagement')}}"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings6-tab"  role="tab" > <i class="fas fas fa-tasks me-3 me-lg-1 me-xl-3"></i>Appointment</a>
                            <a  href="{{url('admin/contentmanagement')}}"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings6-tab"  role="tab" > <i class="fas fas fa-tasks me-3 me-lg-1 me-xl-3"></i>Appointment</a>
                            @endif
                @else
                    
                <a href="#" class="nav-link active px-5 px-md-1 border-bottom ps-xl-3 btn-p text-light py-3 text-start" id="v-pills-home-tab"    role="tab" ><i class="fas fa-desktop me-3 me-lg-1 me-xl-3"></i> Dashboard</a>

                      <a href="#" class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-profile-tab"    role="tab" ><i class="fas fa-users me-3 me-lg-1 me-xl-3"></i> Users  </a>

                      <a href="#" class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-messages-tab"   role="tab" > <i class="fas fa-ad me-3 me-lg-1 me-xl-3"></i> Ads</a>

                      <a  href="#"class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings-tab"  role="tab" > <i class="fas fa-user-md me-3"></i>Vets</a>
                      
                      <a  href="#"class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings-tab"  role="tab" > <i class="fas fa-shuttle-van me-3 me-lg-1 me-xl-3"></i>Transport Drivers</a>
                      <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings2" type="button" role="tab" aria-controls="v-pills-settings2" aria-selected="false"> <i class="fas fa-calendar me-3 me-lg-1 me-xl-3"></i> Appointments Booked </button> -->
                      <a  href="#"class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings2-tab"  role="tab" > <i class="fas fa-calendar me-3 me-lg-1 me-xl-3"></i>Appointments Booked </a>
                      <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings3" type="button" role="tab" aria-controls="v-pills-settings3" aria-selected="false"> <i class="fas fa-certificate me-3 me-lg-1 me-xl-3"></i>  Certify Animal </button> -->
                      <a  href="#"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings3-tab"  role="tab" > <i class="fas fa-certificate me-3 me-lg-1 me-xl-3"></i>Certify Animal</a>

                      <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings4" type="button" role="tab" aria-controls="v-pills-settings4" aria-selected="false"> <i class="fas fa-calendar-check me-3 me-lg-1 me-xl-3"></i>  Transport Booked
                      </button> -->
                      <a  href="#"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings4-tab"  role="tab" > <i class="fas fa-calendar-check me-3 me-lg-1 me-xl-3"></i>Transport Booked</a>

                      <!-- <button class="nav-link btn-p px-5 border-bottom  px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings5" type="button" role="tab" aria-controls="v-pills-settings5" aria-selected="false"> <i class="fas fa-id-card me-3 me-lg-1 me-xl-3"></i> My Profile </button> -->
                      <a  href="#"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings5-tab"  role="tab" > <i class="fas fa-id-card me-3 me-lg-1 me-xl-3"></i>Profile</a>

                      <!-- <button class="nav-link btn-p px-5 border-bottom px-md-1  ps-xl-3 text-light py-3 text-start" id="v-pills-settings6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings6" type="button" role="tab" aria-controls="v-pills-settings6" aria-selected="false"> <i class="fas fas fa-tasks me-3 me-lg-1 me-xl-3"></i>  Content Management </button> -->
                      <a  href="#"class="nav-link btn-p px-5 border-bottom px-md-1 ps-xl-3 text-light py-3 text-start" id="v-pills-settings6-tab"  role="tab" > <i class="fas fas fa-tasks me-3 me-lg-1 me-xl-3"></i>Content Management</a>


                @endif
                            <!-- end nav -->

                        </div>