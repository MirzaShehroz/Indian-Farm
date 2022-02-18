<div class="row pad-50 justify-content-md-around mt-5 pt-5 mt-lg-0" id="post_ad">


    <h4 class="mb-5 text-center">Select Your Animal Type</h4>

    <div class="col-5 shadow1 pb-4 pt-5 col-md-6 mb-5 " style="border-radius: 15px;">

        <div class="btn-group dropend d-block mb-3">
            <button type="button" class="btn bg-transparent  btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-5 "> <img src="{{asset('images/cow.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found"> Cow</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdCowOnePage')}}">One Animal</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdCowMultiplePage')}}">More Than One Animal</a></li>
            </ul>
        </div>
        <div class="btn-group dropend d-block mb-3">
            <button type="button" class="btn bg-transparent  btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-4"><img src="{{asset('images/buffalo.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found">Buffalo</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdBuffaloOnePage')}}">One Animal</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdBuffaloMultiplePage')}}">More Than One Animal</a></li>
            </ul>
        </div>
        <div class="btn-group dropend d-block mb-3">
            <button type="button" class="btn bg-transparent  btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-5"><img src="{{asset('images/bull.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found">Bull</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdBullOnePage')}}">One Animal</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdBullMultiplePage')}}">More Than One Animal</a></li>
            </ul>
        </div>
        <div class="btn-group dropend d-block mb-3">
            <button type="button" class="btn bg-transparent  btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-4"><img src="{{asset('images/sheep.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found"> Sheep</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdSheepOnePage')}}">One Animal</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdSheepMultiplePage')}}">More Than One Animal</a></li>
            </ul>
        </div>
        <div class="btn-group dropend d-block  mb-3">
            <button type="button" class="btn bg-transparent btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-5"><img src="{{asset('images/goat.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found"> Goat</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdGoatOnePage')}}">One Animal</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdGoatMultiplePage')}}">More Than One Animal</a></li>
            </ul>
        </div>




    </div>
    <!-- end of col  -->



</div>