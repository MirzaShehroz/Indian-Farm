@extends('layouts.app')

@section('content')
{{-- <div class="row d-none d-lg-flex text-center pad-50 justify-content-around" id="top-menu-bar">
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
                    <li><a class="dropdown-item" href="search_transport.html">Search Transport</a></li>
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

</div> --}}
<!-- end of row  -->



<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around ">

    <h4 class="mt-5 mt-md-0">Search Transport</h4>

    <form action="" class=" d-md-flex gap-3 justify-content-around" method="post">

        <div class="col-12 col-md-2 my-2 my-md-0">

            <div class="Districdropdown">
                <select id="inputcity" class="form-select overflow-scroll  ">
                    <option value="">Select City</option>


                </select>
            </div>


        </div>
        <!-- end of col  -->

        <div class="col-12 col-md-2 my-2 my-md-0">

            <div class="startdropdown">

                <select id="inputState" class="form-select overflow-scroll ">
                    <option selected disabled>Select State</option>
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


        </div>
        <!-- end of col  -->
        <div class="col-12 col-md-2 my-2 my-md-0">

            <div class="Districdropdown">
                <select id="inputDistrict" class="form-select overflow-scroll  ">
                    <option value="">Select District</option>


                </select>
            </div>

        </div>
        <!-- end of col  -->

        <div class="col-12 col-md-2 my-2 my-md-0">

            <div class="Districdropdown">
                <select id="inputTaluka" class="form-select overflow-scroll  ">
                    <option value="">Select Taluka</option>


                </select>
            </div>

        </div>
        <!-- end of col  -->

        <div class="col-12 col-md-2 my-3 my-md-0">

            <button class="form-control bgcolor text-light btnhover3 border_color2" type="button">Search</button>

        </div>
        <!-- end of col  -->


    </form>
    <!-- end of form  -->



</div>
<!-- end of row  -->


<div class="row pad-50 mt-5" id="table_detail">

    <div class="col-12 overflow-scroll">

        <table class="table table-bordered overflow-hidden">
            <thead>
                <tr class="" style="background-color: rgb(228, 228, 228);">
                    <th scope="col">Full Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">District</th>
                    <th scope="col">Taluka</th>
                    <th scope="col">Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Pune, Sangamwadi</td>
                    <td>Pune</td>
                    <td>Pune</td>
                    <td>12345789</td>
                </tr>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Pune, Sangamwadi</td>
                    <td>Pune</td>
                    <td>Pune</td>
                    <td>12345789</td>
                </tr>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Pune, Sangamwadi</td>
                    <td>Pune</td>
                    <td>Pune</td>
                    <td>12345789</td>
                </tr>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Pune, Sangamwadi</td>
                    <td>Pune</td>
                    <td>Pune</td>
                    <td>12345789</td>
                </tr>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Pune, Sangamwadi</td>
                    <td>Pune</td>
                    <td>Pune</td>
                    <td>12345789</td>
                </tr>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Pune, Sangamwadi</td>
                    <td>Pune</td>
                    <td>Pune</td>
                    <td>12345789</td>
                </tr>
                <tr>
                    <th scope="row">ABC</th>
                    <td>Pune, Sangamwadi</td>
                    <td>Pune</td>
                    <td>Pune</td>
                    <td>12345789</td>
                </tr>

            </tbody>
        </table>


    </div>
    <!-- end of col  -->

</div>
<!-- end of row  -->


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
@endsection