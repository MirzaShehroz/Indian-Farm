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
                            placeholder="{{__('eng.search')}}..." aria-label="Search" aria-describedby="basic-addon2">
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
                               {{__('eng.all_cat')}}
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item border-bottom" href="{{route('adds.cow')}}">{{__('eng.cow')}}</a>
                                </li>
                                <li><a class="dropdown-item  border-bottom"
                                        href="{{route('adds.sheep')}}">{{__('eng.sheep')}}</a></li>
                                <li><a class="dropdown-item  border-bottom" href="{{route('adds.goat')}}">{{__('eng.goat')}}</a>
                                </li>
                                <li><a class="dropdown-item  border-bottom"
                                        href="{{route('adds.buffalo')}}">{{__('eng.buffalo')}}</a></li>
                                <li><a class="dropdown-item" href="{{route('adds.bull')}}">{{__('eng.bull')}}</a></li>

                            </ul>
                        </li>

                        <hr class="bg-dark py-0" style="opacity: 1;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="{{route('searchVet')}}" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{__('eng.vetService')}}
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">


                                <li><a class="dropdown-item border-bottom" href="{{route('searchVet')}}">{{__('eng.searchVet')}}</a></li>
                                <li><a class="dropdown-item border-bottom"
                                        href="{{route('bookAppointment')}}">{{__('eng.bookVet')}}</a></li>
                                <li><a class="dropdown-item border-bottom"
                                        href="{{route('certifyAnimal')}}">{{__('eng.certifyAnimal')}}</a></li>
                                <li><a class="dropdown-item" href="{{route('registerVet')}}">{{__('eng.vetRegister')}}</a></li>


                            </ul>
                        </li>

                        <hr class="bg-dark" style="opacity: 0.4;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{__('eng.transport')}}
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item border-bottom"
                                        href="{{route('transport-search')}}">{{__('eng.searchTrans')}}</a></li>
                                <li><a class="dropdown-item border-bottom" href="{{route('transport-book')}}">{{__('eng.bookTrans')}}</a></li>
                                <li><a class="dropdown-item" href="{{route('vendor-register')}}">{{__('eng.registerVend')}}</a></li>
                            </ul>
                        </li>

                        <hr class="bg-dark  py-0" style="opacity: 1;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="{{url('education')}}" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{__('eng.education')}}
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="online_courses.html">{{__('eng.course')}}</a></li>
                            </ul>
                        </li>

                        <hr class="bg-dark py-0" style="opacity: 1;">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="forum_disscussion.html">
                               {{__('eng.community')}}
                            </a>
                        </li>
                        <hr class="bg-dark py-0" style="opacity: 1;">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="news_updates.html">
                               {{__('eng.news')}}
                            </a>
                        </li>
                        <hr class="bg-dark" style="opacity: 0.4;">
                    </ul>


                    <div class="col-12  ">

                        <a href="{{route('login')}}"
                            class="text-decoration-none btn border border-dark w-100 ms-lg-5"
                            style="border-radius: 10px;">
                            <button class="bg-transparent border-0 fw-bold">{{__('eng.login')}}</button>
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
                            <img src="{{asset(Auth::user()->image ? Auth::user()->image : 'images/user-img.png' )}}" style="width: 30px; height: 30px;" alt="img not found">
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
                            <li class="my-3"><a class="dropdown-item border-bottom" href="{{route('B&SEditProfilePage')}}"><i class="fas fa-user-edit me-3"></i>{{__('eng.editProfile')}}</a></li>
                            <li class="my-3"><a class="dropdown-item border-bottom" href="{{route('B&SEditYourAddPage')}}"><i class="fas fa-ad me-3"></i>{{__('eng.yourAdds')}}</a></li>
                            <li class="my-3"><a class="dropdown-item border-bottom" href="{{route('B&SPostAnAddPage')}}"><i class="fas fa-address-card me-3"></i>{{__('eng.postAdd')}}</a></li>
                            <li class="my-3"><a class="dropdown-item border-bottom" href="{{route('B&SYourSubscriptionPage')}}"><i class="fas fa-vote-yea me-3"></i>{{__('eng.yourSub')}}</a></li>
                            <li class="my-3"><a class="dropdown-item" href="{{url('logout')}}"><i class="fas fa-sign-out-alt me-3"></i>{{__('eng.logout')}}</a></li>
                        </ul>
                    </div>
                    <!-- user dropdown  -->

                </div>
                <!-- end of btn1  -->

                @else

                <div class="btn1 d-flex align-items-center justify-content-around mt-4 mt-lg-0 ms-xl-5">

                    <a href="{{route('addView')}}"
                        class="text-decoration-none ms-xl-5 me-3 d-none d-lg-flex rounded-pill px-4 px-lg-2 py-2 bg-white">
                        <button class="bg-transparent border-0 btnsell tcolor fw-bold"> <span>{{__('eng.Add')}}
                            </span></button>
                    </a>

                    <a href="{{route('B&SLoginPage')}}" class="text-decoration-none  ms-xl-1">
                        <button
                            class="bg-transparent border-0 btnlogin fw-bold border-bottom border-2 tcolor">{{__('eng.login')}}
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
                <input type="text" class="form-control border-dark rounded-pill" placeholder=" {{__('eng.search')}}..."
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
                    {{__('eng.all_cat')}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('adds.cow')}}">{{__('eng.cow')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('adds.sheep')}}">{{__('eng.sheep')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('adds.goat')}}">{{__('eng.goat')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('adds.buffalo')}}">{{__('eng.buffalo')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('adds.bull')}}">{{__('eng.bull')}}</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                   {{__('eng.vetService')}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="{{route('searchVet')}}">{{__('eng.searchVet')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('bookAppointment')}}">{{__('eng.bookVet')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('certifyAnimal')}}">{{__('eng.certifyAnimal')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('registerVet')}}">{{__('eng.vetRegister')}}</a></li>


                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{__('eng.transport')}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('transport-search')}}"> {{__('eng.searchTrans')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('transport-book')}}">  {{__('eng.bookTrans')}}</a></li>
                    <li><a class="dropdown-item" href="{{route('vendor-register')}}"> {{__('eng.registerVend')}}</a></li>


                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{url('education')}}" id="navbarDropdown">
                    {{__('eng.education')}}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{url('forum_community')}}">
                    {{__('eng.community')}}
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{url('news_updates')}}">
                    {{__('eng.news')}}
                </a>

            </li>
        </ul>





    </div>
    <!-- end of col  -->


    <hr class="" style="opacity: 1; background-color: #0572B2;">

</div>
<!-- end of row  -->

</header>