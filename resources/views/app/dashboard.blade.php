<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index follow" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{asset('images/India-Farm-Logo.png')}}" />
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/calander.css')}}">

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- fontawsome cdn  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- remix cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- toaster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('js/calander.css')}}"></script>

    <title>@yield('title')</title>
    <style>
      
.loader-bg {
  width: 100vw;
  height: 100vh;
  
  position: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
}
.loader-bg h3 {
  position: fixed;
  color: #007ce2;
  font-size: 24px;
}
.loader {
  width: 8em;
  height: 8em;
  font-size: 22px;
  box-sizing: border-box;
  border-top: 0.3em solid #fe5f75;
  border-radius: 50%;
  position: relative;
  animation: rotating 2s ease-in-out infinite;
  --direction: 1;
}
.loader span {
  position: absolute;
  color: #fe5f75;
  width: inherit;
  height: inherit;
  text-align: center;
  line-height: 10em;
  font-family: sans-serif;
  animation: rotating 2s linear infinite;
}
.loader::before,
.loader::after {
  content: '';
  position: absolute;
  width: inherit;
  height: inherit;
  border-radius: 50%;
  box-sizing: border-box;
  top: -0.2em;
}
.loader:::before {
  border-top: 0.3em solid dodgerblue;
  transform: rotate(120deg);
}
.loader::after {
  border-top: 0.3em solid #fe5f75;
  transform: rotate(240deg);
}
@keyframes rotating {
  50% {
    transform: rotate(calc(180deg));
  }
  100% {
    transform: rotate(calc(360deg));
  }
}
    </style>
  </head>
  <body>
<div class="loader-bg" id="loading" style="display:none" style="background:transparent">
        <h3>Sending...</h3>
      <div class="loader">
          <span></span>
      </div>
</div>
    <div class="container-fluid">

        <div class="row fixed-top" id="dashboard-header">

            <div class="col-12 px-0">

                <nav class="navbar navbar-expand-lg navbar-light ps-0 pe-lg-5" style="box-shadow: 1px 1px 10px lightgray">
                    <div class="container-fluid ps-0">
                      <a class="navbar-brand col-6 col-md-3 col-lg-2 ps-lg-4 col-xl-auto me-auto pe-lg-1" href="dashboard.html"><img src="{{asset('images/India-Farm-Logo.png')}}" class="brand-logo" alt="img not found"></a>

                  
                   
                  
                      <button class="navbar-toggler bg_danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                        
                        <div class="collapse navbar-collapse  align-items-center" id="navbarSupportedContent">
                            
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center mt-5 mt-lg-auto">
                            
                         
                          @if(Auth::check()=='true')
                          <li class="nav-item">
                            @if(Auth::user()->image!=null)
                            <a class="nav-link border border-light rounded-circle" href="#"><img src="{{asset(Auth::user()->image)}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a>
                            @else
                            <a class="nav-link border border-light rounded-circle" href="#"><img src="{{asset('images/admin.jpg')}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a>
                            @endif
                          </li>
                          <li class="nav-item dropdown dropstart">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          
                            </a>
                            <ul class="dropdown-menu secondary" aria-labelledby="navbarDropdown">
                              @if(Auth::user()->image!=null)
                              <li><img src="{{asset(Auth::user()->image)}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a> <span>{{Auth::user()->first_name}}  {{Auth::user()->last_name}} </span></a></li>
                              @else
                              <li><img src="{{asset('images/admin.jpg')}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a> <span>{{Auth::user()->first_name}}  {{Auth::user()->last_name}} </span></a></li>
                              @endif
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item secondary" type="button" data-bs-toggle="modal" data-bs-target="#passwordchange">Change Password</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item secondary" href="{{url('logout')}}">Logout</a></li>
                            </ul>
                          </li>
                          @else
                          <li class="nav-item">
                            <a class="nav-link border border-light rounded-circle" href="#"><img src="{{asset('images/user-img.png')}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a>
                          </li>
                          <li class="nav-item dropdown dropstart">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          
                            </a>
                            <ul class="dropdown-menu secondary" aria-labelledby="navbarDropdown">
                              @if(Auth::check()=='true')
                                @if(Auth::user()->image!=null)
                               <li><img src="{{asset(Auth::user()->image)}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a> <span>{{Auth::user()->first_name}}  {{Auth::user()->last_name}} </span></a></li>
                                @else
                                <li><img src="{{asset('images/admin.jpg')}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a> <span>{{Auth::user()->first_name}}  {{Auth::user()->last_name}} </span></a></li>

                                @endif
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item secondary" type="button" data-bs-toggle="modal" data-bs-target="#passwordchange">Change Password</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item secondary" href="{{url('logout')}}">Logout</a></li>
                              @else
                              <li><img src="{{asset('images/admin.jpg')}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a> <span>First  Last </span></a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item secondary" type="button" data-bs-toggle="modal" data-bs-target="#passwordchange">Change Password</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item secondary" href="{{url('logout')}}">Logout</a></li>
                              @endif
                             
                            </ul>
                          </li>
                          @endif
                     
                         

                          
                         
                        </ul>
                      
                       
                      </div>
                    </div>
                </nav>


            </div>
            <!-- end of col  -->


        </div>
        <!-- end of row  -->


        <div class="row pt-5 mt-5 position-relative" id="dashboard-pills">

            <div class="col-12 px-0 position-relative" id="dashboard-fix">

                <div class="d-md-flex align-items-start bg-light position-relative" id="tab_pill_main">
                    
                   @include('app.sidebar')
                    <!-- end nav -->


                    <div class="col-12 col-md-12 mt-md-5 mt-lg-0 col-lg-10 col-xl-10 tab-content" id="v-pills-tabContent">


                      @yield('pill')

                    </div>
                    <!-- end of main pan  -->


                  </div>
                  <!-- end of pills container  -->

            </div>
            <!-- end of col  -->


        </div> 
        
        

 <!-- offcanvas start  -->

                          <!-- offcanvas mobile screen  -->
                          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header py-0">

                    <ul class="list-unstyled d-flex">

                        <li class="nav-item">
                          <a class="nav-link" href="#"><img src="{{asset('images/user-img.png')}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                          </a>
                          <ul class="dropdown-menu secondary" aria-labelledby="navbarDropdown">
                            @if(Auth::check()=='true')
                                @if(Auth::user()->image!=null)
                               <li><img src="{{asset(Auth::user()->image)}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a> <span>{{Auth::user()->first_name}}  {{Auth::user()->last_name}}</span></a></li>
                                @else
                                <li><img src="{{asset('images/admin.jpg')}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a> <span>{{Auth::user()->first_name}}  {{Auth::user()->last_name}} </span></a></li>
                                @endif
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item secondary" href="#">Change Password</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item secondary" href="{{url('logout')}}">Logout</a></li>
                            @else
                                <li><img src="{{asset('images/admin.jpg')}}" class="rounded-pill" style="width: 30px; height: 30px;" alt="img not found"></a> <span>First  Last </span></a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item secondary" href="#">Change Password</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item secondary" href="{{url('logout')}}">Logout</a></li>
                            @endif
                          </ul>
                        </li>
                       
                      </ul>

                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body p-0" id="dashboard-pills">
                     
                        @include('app.mobilesidebar')
                    </div>
                  </div>
                  <!-- end of canvas  -->


                  <!-- user edit canvas  -->


                 
                  <!-- end offcanvas  -->

    </div> 

<div class="modal fade" id="passwordchange" data-bs-toggle="modal" data-bs-target="#passwordchange">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="passwordchange"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-4">
      

        <div>
            @if(Auth::check()=='true')
            <!-- <form action="{{url('changepassword')}}" method="post">
                <input type="hidden" value="{{Auth::user()->id}}" name="id">
                <input type="text" placeholder="Enter Password" class="py-3 mt-5 form-control" name="" id="">
                <input type="text" placeholder="Re-Enter Password" class="py-3 mt-2 form-control" name="" id="">

                <button type="" class="py-3 form-control mt-5 bg_danger text-light">Submit</button>
            </form> -->
            @else
            <form >
                <input type="hidden"  name="id">
                <input type="text" placeholder="Enter Password" class="py-3 mt-5 form-control" name="" id="">
                <input type="text" placeholder="Re-Enter Password" class="py-3 mt-2 form-control" name="" id="">

                <button type="" class="py-3 form-control mt-5 bg_danger text-light">Submit</button>
            </form>
            @endif
        </div>
      </div>
     
    </div>
  </div>
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}

<script>
        window.addEventListener("scroll", function () {
          if (pageYOffset >= 100) {
            document.getElementById("dashboard-header").style.backgroundColor = "#f8f8f8";
          } else {
            document.getElementById("dashboard-header").style.backgroundColor = "#f8f8f8";
    
          }
        });
      </script>
<script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
    </script>
  
@if (session()->has('errorMsg'))
    <script>
        toastr.error('{{session()->get('errorMsg')}}')
        {{session()->forget('errorMsg')}}
    </script>
@endif
@if (session()->has('successMsg'))
    <script>
        toastr.success('{{session()->get('successMsg')}}')
        {{session()->forget('successMsg')}}
    </script>
@endif
@if (session()->has('warningMsg'))
    <script>
        toastr.warning('{{session()->get('warningMsg')}}')
        {{session()->forget('warningMsg')}}
    </script>
@endif
@if (session()->has('infoMsg'))
    <script>
        toastr.info('{{session()->get('infoMsg')}}')
        {{session()->forget('infoMsg')}}
    </script>
@endif
    <script>
        function downloadCSV(csv, filename) {
            let csvFile;
            let downloadLink;

            // CSV file
            csvFile = new Blob([csv], {type: "text/csv"});

            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Hide download link
            downloadLink.style.display = "none";

            // Add the link to DOM
            document.body.appendChild(downloadLink);

            // Click download link
            downloadLink.click();
        }
    </script>
    <script>
        function exportTableToCSV(filename) {
            let csv = [];
            let rows = document.querySelectorAll("table tr");

            for (let i = 0; i < rows.length; i++) {
                let row = [], cols = rows[i].querySelectorAll("td, th");

                for (let j = 0; j < cols.length; j++)
                    row.push(cols[j].innerText);
                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCSV(csv.join("\n"), filename);
        }
    </script>
@yield('script')    
  </body>  
</html> 
