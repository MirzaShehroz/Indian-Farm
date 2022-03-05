<div class="row pad-50 justify-content-md-around mt-5 pt-5 mt-lg-0" id="post_ad">


    <h4 class="mb-5 text-center">{{__('eng.selectAnimalType')}}</h4>

    <div class="col-5 shadow1 pb-4 pt-5 col-md-6 mb-5 " style="border-radius: 15px;">

        <div class="btn-group dropend d-block mb-3">
            <button type="button" class="btn bg-transparent  btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-5 "> <img src="{{asset('images/cow.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found"> {{__('eng.cow')}}</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdCowOnePage')}}">{{__('eng.oneAnimal')}}</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdCowMultiplePage')}}">{{__('eng.moreThenOne')}}</a></li>
            </ul>
        </div>
        <div class="btn-group dropend d-block mb-3">
            <button type="button" class="btn bg-transparent  btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-4"><img src="{{asset('images/buffalo.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found">{{__('eng.buffalo')}}</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdBuffaloOnePage')}}">{{__('eng.oneAnimal')}}</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdBuffaloMultiplePage')}}">{{__('eng.moreThenOne')}}</a></li>
            </ul>
        </div>
        <div class="btn-group dropend d-block mb-3">
            <button type="button" class="btn bg-transparent  btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-5"><img src="{{asset('images/bull.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found">{{__('eng.bull')}}</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdBullOnePage')}}">{{__('eng.oneAnimal')}}</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdBullMultiplePage')}}">{{__('eng.moreThenOne')}}</a></li>
            </ul>
        </div>
        <div class="btn-group dropend d-block mb-3">
            <button type="button" class="btn bg-transparent  btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-4"><img src="{{asset('images/sheep.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found"> {{__('eng.sheep')}}</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdSheepOnePage')}}">{{__('eng.oneAnimal')}}</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdSheepMultiplePage')}}">{{__('eng.moreThenOne')}}</a></li>
            </ul>
        </div>
        <div class="btn-group dropend d-block  mb-3">
            <button type="button" class="btn bg-transparent btnhover border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-md-5"><img src="{{asset('images/goat.png')}}" class=" me-1 me-md-3" style="width: 30%;" alt="img not found"> {{__('eng.goat')}}</span>
            </button>
            <ul class="dropdown-menu ms-md-3">
                <li><a class="dropdown-item border-bottom" href="{{route('B&SPostAdGoatOnePage')}}">{{__('eng.oneAnimal')}}</a></li>
                <li><a class="dropdown-item" href="{{route('B&SPostAdGoatMultiplePage')}}">{{__('eng.moreThenOne')}}</a></li>
            </ul>
        </div>




    </div>
    <!-- end of col  -->



</div>