<header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand me-lg-5" href="index.html"><img
                    src="{{ asset('images/India-Farm-Logo.png') }}"
                    alt="img not found" class="brand-logo w-100"></a>

            <div class="col-12 py-0 d-none d-md-block d-lg-none col-md-6 mx-auto">
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control border-dark rounded-pill"
                            placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
                        <span
                            class="input-group-text btn bg-transparent rounded-pill position-absolute end-0 me-2"
                            id="basic-addon2"><i class="fas fa-search"></i></span>
                    </div>
                </form>

            </div>
            <!-- end of col -->

            <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> <span
                    class="navbar-toggler-icon"></span></button>

            <div class="offcanvas offcanvas-end  d-lg-none" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">

                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <select class="form-select border-0" aria-label="Default select example">
                                <option selected disabled class="text-secondary">Language</option>
                                <option value="Marathi">मराठी</option>
                                <option value="Hindi">हिन्दी</option>
                                <option value="English">English</option>
                            </select>
                        </li>

                    </ul>

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body py-0">
                    <ul class="list-unstyled mb-lg-0 align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                All Categories
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item border-bottom" href="cows.html">Cows</a>
                                </li>
                                <li><a class="dropdown-item  border-bottom"
                                        href="sheeps.html">Sheeps</a></li>
                                <li><a class="dropdown-item  border-bottom" href="goat.html">Goat</a>
                                </li>
                                <li><a class="dropdown-item  border-bottom"
                                        href="buffalo.html">Buffalo</a></li>
                                <li><a class="dropdown-item" href="bull.html">Bull</a></li>

                            </ul>
                        </li>

                        <hr class="bg-dark py-0" style="opacity: 1;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="{{route('searchVet')}}" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vet Services
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">


                                <li><a class="dropdown-item border-bottom" href="{{route('searchVet')}}">Search
                                        A Vet</a></li>
                                <li><a class="dropdown-item border-bottom"
                                        href="{{route('bookAppointment')}}">Book An Appointment</a></li>
                                <li><a class="dropdown-item border-bottom"
                                        href="{{route('certifyAnimal')}}">Certify My Animal</a></li>
                                <li><a class="dropdown-item" href="{{route('registerVet')}}">Register as a
                                        Vet</a></li>


                            </ul>
                        </li>

                        <hr class="bg-dark" style="opacity: 0.4;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Transport
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item border-bottom"
                                        href="{{route('transport-search')}}">Search Transport</a></li>
                                <li><a class="dropdown-item border-bottom" href="{{route('transport-book')}}">
                                        Book Transport</a></li>
                                <li><a class="dropdown-item" href="{{route('vendor-register')}}">Register As
                                        Vendor</a></li>


                            </ul>
                        </li>

                        <hr class="bg-dark  py-0" style="opacity: 1;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Education
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="online_courses.html">Online
                                        Courses</a></li>


                            </ul>
                        </li>

                        <hr class="bg-dark py-0" style="opacity: 1;">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="forum_disscussion.html">
                                Community & Forum
                            </a>

                        </li>
                        <hr class="bg-dark py-0" style="opacity: 1;">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="news_updates.html">
                                News & Updates
                            </a>

                        </li>
                        <hr class="bg-dark" style="opacity: 0.4;">
                    </ul>


                    <div class="col-12  ">

                        <a href="login.html"
                            class="text-decoration-none btn border border-dark w-100 ms-lg-5"
                            style="border-radius: 10px;">
                            <button class="bg-transparent border-0 fw-bold">Login/Register</button>
                        </a>
                    </div>


                </div>
            </div>
            <!-- end of canvas  -->

            <div class="collapse navbar-collapse pe-lg-4" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <select class="form-select border-0" aria-label="Default select example">
                            <option selected disabled class="text-secondary">Language</option>
                            <option value="Marathi">मराठी</option>
                            <option value="Hindi">हिन्दी</option>
                            <option value="English">English</option>
                        </select>
                    </li>
                </ul>


                <div class="col-12 col-md-5 col-xl-6 mx-auto">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-pill py-3 px-5"
                                placeholder="Search..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text btn bg-transparent rounded-pill "
                                style="z-index: 1200;" id="basic-addon2"><i
                                    class="fas fa-search"></i></span>
                        </div>
                    </form>

                </div>
                <!-- end of col -->
                {{-- {{dd(Auth::ux`xxxxser()->id)}} --}}

                
                @if (Auth::check())
                    
                
                <div class="btn1 d-flex align-items-center justify-content-around mt-4 mt-lg-0 ms-xl-5">

                    <div class="me-5">

                        <a href="{{route('B&SChat')}}" class="text-decoration-none">
                            <img src="{{asset('images/chat.png')}}" alt="img not found">
                        </a>

                    </div>
                    <!-- chat div  -->


                    <div class="dropdown dropstart">
                        <button class="btn bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset(Auth::user()->image)}}" style="width: 30px; height: 30px;" alt="img not found">
                        </button>
                        <ul class="dropdown-menu p-1 mt-5" style=" border-top: 3px solid #0572B2; border-bottom: 3px solid #0572B2;" aria-labelledby="dropdownMenuButton1">

                            <li>
                                <a class="dropdown-item" href="#">

                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="{{asset(Auth::user()->image)}}" style="width: 40px; height: 40px;" alt="img not found">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5>Hello !</h5>
                                            <h6 class="text-decoration-underline">User Full Name</h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="my-3"><a class="dropdown-item border-bottom" href="{{route('B&SEditProfilePage')}}"><i class="fas fa-user-edit me-3"></i>Edit Your Profile</a></li>
                            <li class="my-3"><a class="dropdown-item border-bottom" href="{{route('B&SEditYourAddPage')}}"><i class="fas fa-ad me-3"></i>Your Ads</a></li>
                            <li class="my-3"><a class="dropdown-item border-bottom" href="{{route('B&SPostAnAddPage')}}"><i class="fas fa-address-card me-3"></i>Post an Ad</a></li>
                            <li class="my-3"><a class="dropdown-item border-bottom" href="{{route('B&SYourSubscriptionPage')}}"><i class="fas fa-vote-yea me-3"></i>Your Subscription </a></li>
                            <li class="my-3"><a class="dropdown-item" href="{{url('logout')}}"><i class="fas fa-sign-out-alt me-3"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <!-- user dropdown  -->

                </div>
                <!-- end of btn1  -->

                @else

                <div class="btn1 d-flex align-items-center justify-content-around mt-4 mt-lg-0 ms-xl-5">

                    <a href="{{route('addView')}}"
                        class="text-decoration-none ms-xl-5 me-3 d-none d-lg-flex rounded-pill px-4 px-lg-2 py-2 bg-white">
                        <button class="bg-transparent border-0 btnsell tcolor fw-bold"> <span>Post Ad
                            </span></button>
                    </a>

                    <a href="{{route('B&SLoginPage')}}" class="text-decoration-none  ms-xl-1">
                        <button
                            class="bg-transparent border-0 btnlogin fw-bold border-bottom border-2 tcolor">Login/Register
                        </button>
                    </a>

                </div>
                <!-- end of btn1  -->
                @endif


            </div>
        </div>
    </nav>
    
</div>
<!-- end of col  -->

<div class="col-12 py-lg-2 px-0">

    <!-- header section start  -->

    <div class="col-12 py-0 d-md-none col-md-6 mx-auto">
        <form class="d-flex">
            <div class="input-group">
                <input type="text" class="form-control border-dark rounded-pill" placeholder="Search..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <span class="input-group-text btn bg-transparent rounded-pill position-absolute end-0 me-2"
                    id="basic-addon2"><i class="fas fa-search"></i></span>
            </div>
        </form>

    </div>
    <!-- end of col -->


</div>
<!-- end of row header -->



<div class="row d-none d-lg-flex text-center pad-50 justify-content-around" id="top-menu-bar">
    <hr class="" style="opacity: 1; background-color: #0572B2;">

    <div class="col-lg-11 mb-2 col-xl-9 col-xxl-8 text-center">

        <ul class="list-unstyled d-flex  mb-2 mb-lg-0 align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    All Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="cows.html">Cows</a></li>
                    <li><a class="dropdown-item" href="sheeps.html">Sheeps</a></li>
                    <li><a class="dropdown-item" href="goat.html">Goat</a></li>
                    <li><a class="dropdown-item" href="buffalo.html">Buffalo</a></li>
                    <li><a class="dropdown-item" href="bull.html">Bull</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Vet Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="{{route('searchVet')}}">Search A Vet</a></li>
                    <li><a class="dropdown-item" href="{{route('bookAppointment')}}">Book An Appointment</a></li>
                    <li><a class="dropdown-item" href="{{route('certifyAnimal')}}">Certify My Animal</a></li>
                    <li><a class="dropdown-item" href="{{route('registerVet')}}"> Register as a Vet</a></li>


                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Transport
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('transport-search')}}">Search Transport</a></li>
                    <li><a class="dropdown-item" href="{{route('transport-book')}}"> Book Transport</a></li>
                    <li><a class="dropdown-item" href="{{route('vendor-register')}}">Register As Vendor</a></li>


                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="online_courses.html" id="navbarDropdown">
                    Education
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="forum_disscussion.html">
                    Community & Forum
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="news_updates.html">
                    News & Updates
                </a>

            </li>
        </ul>





    </div>
    <!-- end of col  -->


    <hr class="" style="opacity: 1; background-color: #0572B2;">

</div>
<!-- end of row  -->

</header>