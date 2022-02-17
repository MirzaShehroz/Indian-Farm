@extends('layouts.app')

@section('content')
    
    <!-- header section end -->

    <div class="row pad-50 mt-5 pt-5 mt-lg-0" id="banner-section">

        <div class="col-12 mt-4 mt-md-0">


            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.pexels.com/photos/880877/pexels-photo-880877.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="d-block h-100 w-100" alt="image not found">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#" class="text-decoration-none"> <button
                                    class="border-light px-5 py-2 text-dark bg-white rounded-pill">VIEW</button></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/533848/pexels-photo-533848.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            class="d-block h-100 w-100" alt="image not found">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#" class="text-decoration-none"> <button
                                    class="border-light px-5 py-2 text-dark bg-white rounded-pill">VIEW</button></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/1276235/pexels-photo-1276235.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            class="d-block h-100 w-100" alt="image not found">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="#" class="text-decoration-none"> <button
                                    class="border-light px-5 py-2 text-dark bg-white rounded-pill">VIEW</button></a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>




        </div>
        <!-- end of col  -->

    </div>
    <!-- end of row  -->




    <div class="row pad-50  my-5 bg-light justify-content-around" id="product-list">


        <div class="col-12">

            <div class="row justify-content-around ps-md-4 index_ad_card">

                <h3 class="border-start border-5 my-5 tcolor" style="border-color: #0572B2 !important;">Fresh
                    recommendations</h3>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4">

                    <a href="goat.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">

                            <span class="position-absolute text-light bg-warning px-2 py-1 start-0">Certified</span>
                            <span class="position-absolute text-light bg-success px-2 py-1 end-0">Premium</span>
                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Goat</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Pure</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

                <div class="col-12 text-success col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="cows.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/5468588/pexels-photo-5468588.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">

                            <span class="position-absolute text-light bg-warning px-2 py-1 start-0">Certified</span>
                            <span class="position-absolute text-light bg-success px-2 py-1 end-0">Premium</span>
                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="buffalo.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/10759381/pexels-photo-10759381.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">

                            <span class="position-absolute text-light bg-warning px-2 py-1 start-0">Certified</span>
                            <span class="position-absolute text-light bg-success px-2 py-1 end-0">Premium</span>
                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="sheeps.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">

                            <span class="position-absolute text-light bg-warning px-2 py-1 start-0">Certified</span>
                            <span class="position-absolute text-light bg-success px-2 py-1 end-0">Premium</span>
                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th>Animal Type </th>
                                            <td>-</td>
                                            <td>Goat</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4">

                    <a href="bull.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">

                            <span class="position-absolute text-light bg-warning px-2 py-1 start-0">Certified</span>
                            <span class="position-absolute text-light bg-success px-2 py-1 end-0">Premium</span>
                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Goat</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Pure</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="cows.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/5468588/pexels-photo-5468588.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">

                            <span class="position-absolute text-light bg-warning px-2 py-1 start-0">Certified</span>
                            <span class="position-absolute text-light bg-success px-2 py-1 end-0">Premium</span>
                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="buffalo.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/10759381/pexels-photo-10759381.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">

                            <span class="position-absolute text-light bg-warning px-2 py-1 start-0">Certified</span>
                            <span class="position-absolute text-light bg-success px-2 py-1 end-0">Premium</span>
                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="goat.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">

                            <span class="position-absolute text-light bg-warning px-2 py-1 start-0">Certified</span>
                            <span class="position-absolute text-light bg-success px-2 py-1 end-0">Premium</span>
                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->







            </div>
            <!-- end of row inner -->



            <div class="row justify-content-around ps-md-4 my-5 index_ad_card">

                <h3 class="border-start border-5 my-5 tcolor" style="border-color: #0572B2 !important;">Regular Ads
                </h3>


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4">

                    <a href="sheeps.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">


                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Goat</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Pure</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="cows.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/5468588/pexels-photo-5468588.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">


                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="buffalo.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/10759381/pexels-photo-10759381.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">


                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="sheeps.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">


                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th>Animal Type </th>
                                            <td>-</td>
                                            <td>Goat</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4">

                    <a href="goat.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">


                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Goat</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Pure</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="cows.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/5468588/pexels-photo-5468588.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">


                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="buffalo.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/10759381/pexels-photo-10759381.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">


                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->


                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-4 ">

                    <a href="bull.html" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="card-img-top" alt="img not found">


                            <div class="card-body border-start border-3 border-warning px-0">

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Price </th>
                                            <td>-</td>
                                            <td><span><i class="fas fa-rupee-sign me-1"></i></span> <span
                                                    class="price">887.00</span> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Animal Type </th>
                                            <td>-</td>
                                            <td>Cow</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Breed </th>
                                            <td>-</td>
                                            <td>Cross</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Quantity </th>
                                            <td>-</td>
                                            <td>3</td>

                                        </tr>
                                    </tbody>
                                </table>


                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 start-0 border-bottom-0">
                                    <span>Area,</span>
                                    <span>City</span>
                                </span>
                                <span style="font-size: 13px;"
                                    class="fw-bold text-secondary position-absolute px-2 py-1 end-0 border-bottom-0">20
                                    Jan</span>

                            </div>
                        </div>
                    </a>

                </div>
                <!-- end of col  -->

            </div>
            <!-- end of row inner -->


        </div>
        <!-- end of main col-8 main  -->

    </div>
    <!-- end of main row main  -->


    <div class="row pad-50 align-items-center" id="app-row"
        style="background: url({{ asset('images/bg-app.jpg') }});">

        <div class="col-12 col-md-8 border-end border-2 py-md-5" style="border-color: #0572B2 !important;">

            <h2 class="tcolor text-center">GET THE INDIA FARM ANIMAL ANDROID APP</h2>


        </div>
        <!-- end of col  -->

        <div class="col-12 col-md-4 text-center">

            <h6>GET YOUR APP TODAY</h6>

            <a href="#" class="text-decoration-none">
                <img src="{{ asset('images/googleplay.png') }}" class="w-50 googleplay"
                    alt="img not found">
            </a>


        </div>
        <!-- end of col  -->

    </div>
    <!-- end of row app download  -->

    {{-- @include('layouts.footer') --}}

    <div class="filter-dropdown d-none">

        <div class="startdropdown">

            <select id="inputState" class="form-select overflow-scroll border-2 border_color tcolor ">
                <option selected disabled>State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>

            </select>
        </div>
        <!-- end of state  -->

        <div class="Districdropdown mt-4">

            <select id="inputDistrict" class="form-select overflow-scroll border-2 border_color tcolor ">
                <option value="">District</option>


            </select>
        </div>
        <!-- end of district  -->


        <div class="Districdropdown mt-4">

            <select id="inputTaluka" class="form-select overflow-scroll border-2 border_color tcolor ">
                <option value="" selected disabled>Taluka</option>


            </select>
        </div>
        <!-- end of district  -->


    </div>
    <!-- end of div filter  -->
    <!-- sell button mobile mode  -->
    <!-- <a href="sell.html" class="text-decoration-none position-fixed bottom-0 end-0 mb-5 border ms-lg-5 d-lg-none me-2 px-2 py-2 bg-white rounded-pill">
            <button class="bg-transparent border-0"><i class="fas fa-plus me-2"></i>Sell </button>
        </a> -->
    <!-- end of button  -->
    @endsection


