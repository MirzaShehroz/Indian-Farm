<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/India-Farm-Logo.png')}}" sizes="16x16" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- fontawsome link  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <title>IFA-Login</title>
</head>
<body>

<div class="container-fluid">


    <div class="row justify-content-around align-items-center mt-5" id="login-page">


        <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 py-3">


            <div class="card border-0 p-2 p-md-4 text-center" style="border-radius: 10px; box-shadow: 1px 1px 10px lightgray;">
                <img src="{{asset('images/India-Farm-Logo.png')}}" class="card-img-top mx-auto" alt="img not found">
                <div class="card-body mt-4">

                    <form action="" method="post">

                        <input type="text" class="mobileno_input border_color form-control py-3 mb-4" name="fname" placeholder="Enter Your Full Name" required>

                        <input type="text" class="mobileno_input border_color form-control py-3 mt-4" name="mobileno" placeholder="Enter Your Mobile Number" required>

                        <button class="mt-4 px-5 py-2 btnhover3 bgcolor fw-bold border_color"><a href="user-login.html" class="text-decoration-none text-light">SUBMIT</a></button>

                        <div class="form-check text-start mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label " for="flexCheckChecked">
                                I Agree
                            </label>
                        </div>

                        <span class="d-block text-dark mt-3">
              By selecting agree you are agreeing to our <a href="{{route('TermAndCondition')}}" class="tcolor btnclick text-decoration-none fw-bold"> Terms & Conditions </a> & <a href="{{route('PrivacyPolicy')}}" class="tcolor btnclick text-decoration-none fw-bold"> Privacy Policy </a>
            </span>


                    </form>
                    <!-- end of form  -->



                </div>
            </div>
            <!-- end of card  -->


        </div>
        <!-- end of col  -->

    </div>
    <!-- end of row  -->



</div>
<!-- end of container fluid  -->





<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- jquery link  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<!-- <script src="js/bootstarp.js"></script> -->

<script>
    window.addEventListener("scroll", function () {
        if (pageYOffset >= 100) {
            // document.getElementById("header").style.position = "fixed";
            document.getElementById("header").style.background = "url({{asset('images/footer_bg.png')}}) center center no-repeat";
            // document.getElementById("header").style.zIndex = "1300";
        } else {
            // document.getElementById("header").style.position = "static";
            document.getElementById("header").style.background = "white";


        }
    });
</script>


</body>
</html>