<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../public/images/India-Farm-Logo.png" sizes="16x16" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- fontawsome link  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <x-embed-styles />
        {{-- toaster --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
        

    <title>IFA</title>
</head>
@yield('style')

<body>

    <div class="container-fluid">
        <div class="row pad-50 fixed-top" id="header">
            @include('layouts.header')
        </div>
       @yield('content')
       @include('layouts.footer')
    </div>
    <!-- end of container fluid  -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- jquery link  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>



    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <!-- <script src="{{ asset('js/bootstarp.js') }}"></script> -->

    <script>
        window.addEventListener("scroll", function () {
            if (pageYOffset >= 100) {
                // document.getElementById("header").style.position = "fixed";
                document.getElementById("header").style.background =
                    "url(../../public/images/footer_bg.png) center center no-repeat";
                // document.getElementById("header").style.zIndex = "1300";
            } else {
                // document.getElementById("header").style.position = "static";
                document.getElementById("header").style.background = "white";


            }
        });
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
    @yield('script')
</body>

</html>