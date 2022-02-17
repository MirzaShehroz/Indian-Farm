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
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vet Services
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">


                                <li><a class="dropdown-item border-bottom" href="search_vet.html">Search
                                        A Vet</a></li>
                                <li><a class="dropdown-item border-bottom"
                                        href="book_appointment.html">Book An Appointment</a></li>
                                <li><a class="dropdown-item border-bottom"
                                        href="certify_animal.html">Certify My Animal</a></li>
                                <li><a class="dropdown-item" href="vet_ragistration.html">Register as a
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
                                <li><a class="dropdown-item border-bottom" href="book_transport.html">
                                        Book Transport</a></li>
                                <li><a class="dropdown-item" href="register_vendor.html">Register As
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

                <div class="btn1 d-flex align-items-center justify-content-around mt-4 mt-lg-0 ms-xl-5">

                    <a href="sell.html"
                        class="text-decoration-none ms-xl-5 me-3 d-none d-lg-flex rounded-pill px-4 px-lg-2 py-2 bg-white">
                        <button class="bg-transparent border-0 btnsell tcolor fw-bold"> <span>Post Ad
                            </span></button>
                    </a>

                    <a href="login.html" class="text-decoration-none  ms-xl-1">
                        <button
                            class="bg-transparent border-0 btnlogin fw-bold border-bottom border-2 tcolor">Login/Register
                        </button>
                    </a>

                </div>
                <!-- end of btn1  -->


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

                    <li><a class="dropdown-item" href="search_vet.html">Search A Vet</a></li>
                    <!-- <li><a class="dropdown-item" href="consultation.html">Consultation</a></li> -->
                    <li><a class="dropdown-item" href="book_appointment.html">Book An Appointment</a></li>
                    <li><a class="dropdown-item" href="certify_animal.html">Certify My Animal</a></li>
                    <li><a class="dropdown-item" href="vet_ragistration.html"> Register as a Vet</a></li>


                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Transport
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('transport-search')}}">Search Transport</a></li>
                    <li><a class="dropdown-item" href="book_transport.html"> Book Transport</a></li>
                    <li><a class="dropdown-item" href="register_vendor.html">Register As Vendor</a></li>


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