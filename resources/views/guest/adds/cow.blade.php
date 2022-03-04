@extends('layouts.app')

@section('content')

@foreach ($data as $item)
<div class="row pad-50 justify-content-around mt-5 pt-5 mt-lg-0" id="single_ad">


    <div class="col-12 col-md-7 col-xxl-6 mt-5">


        <div class="row">

            <div class="col-12 col-md-2 order-last order-md-first my-auto text-center">

                <ul class="list-unstyled d-flex d-md-block justify-content-around">
                    <li class="mt-2 me-1">
                        <img src="{{$item->photo1}}" class="tham-slideimag" alt="img not found">
                    </li>
                    <li class="mt-2 me-1">
                        <img src="{{$item->photo2}}" class="tham-slideimag" alt="img not found">
                    </li>
                    <li class="mt-2 me-1">
                        <img src="{{$item->photo3}}" class="tham-slideimag" alt="img not found">
                    </li>
                    <li class="mt-2 me-1">
                        <img src="{{$item->photo4}}" class="tham-slideimag" alt="img not found">
                    </li>
                    <li class="mt-2 me-1">
                        <img src="{{$item->photo5}}" class="tham-slideimag" alt="img not found">
                    </li>
                    <li class="mt-2 me-1">
                        <img src="{{$item->photo6}}" class="tham-slideimag" alt="img not found">
                    </li>
                </ul>



            </div>
            <!-- end of col3  -->

            <div class="col-12 col-md-10 my-auto">



                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" title="Product Images">
                        <div class="carousel-item active">

                            <img src="{{$item->photo1}}" class="item-main-img" alt="image not found">
                        </div>

                        <div class="carousel-item">

                            <img src="{{$item->photo2}}" class="item-main-img" alt="image not found">
                        </div>

                        <div class="carousel-item">

                            <img src="{{$item->photo3}}" class="item-main-img" alt="image not found">
                        </div>

                        <div class="carousel-item">

                            <img src="{{$item->photo4}}" class="item-main-img" alt="image not found">
                        </div>
                        <div class="carousel-item">

                            <img src="{{$item->photo5}}" class="item-main-img" alt="image not found">
                        </div>
                        <div class="carousel-item">

                            <img src="{{$item->photo6}}" class="item-main-img" alt="image not found">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>
            <!-- end of col 9 -->

        </div>
        <!-- end of row inner -->

        <div class="row mt-5">

            <h5>{{__('guest.desc')}}</h5>

            <div class="col-12">

                <p>{{$item->description}}</p>


            </div>
            <!-- end of col  -->

        </div>
        <!-- end of row  -->


    </div>
    <!-- end of col 7 -->

    <div class="col-12 col-md-5 col-xxl-6 border border-dark px-2 py-4 p-lg-5 mt-5 position-relative">

        <table class="table table-bordered border-dark">

            <tbody>
            <tr class="mb-1">
                <td class="bggary border-bottom border-light text-light">{{__('guest.price')}}</td>
                <td class="">INR {{$item->price}}</td>

            </tr>
            <tr class="mt-1">
                <td class="bggary border-bottom border-light text-light">{{__('guest.breed')}}</td>
                <td>{{$item->breed}}</td>

            </tr>
            <tr class="mt-1">
                <td class="bggary border-bottom border-light text-light">{{__('guest.breedType')}}</td>
                <td>{{$item->breed_type}}</td>

            </tr>
          @if ($item->pregnant)
            <tr class="mt-1">
                <td class="bggary border-bottom border-light text-light">{{__('guest.pregnant')}}</td>
                <td>
                    @if ($item->pregnant==1)
                        Yes
                    @else
                        No                    
                    @endif
                </td>
            </tr>
           @endif  
           @if ($item->due_month_pregnancy)
                <tr class="mt-1">
                    <td class="bggary border-bottom border-light text-light">{{__('guest.dueMonth')}}</td>
                    <td>{{$item->due_month_pregnancy}}</td>
                </tr>
            @endif
            
            @if ($item->milk_capacity)
            <tr class="mt-1">
                <td class="bggary border-bottom border-light text-light">{{__('guest.milkCap')}}</td>
                <td>{{$item->milk_capacity}} ltrs</td>
            </tr>
            @endif
            <tr class="mt-1">
                <td class="bggary border-bottom border-light text-light" >{{__('guest.vacinated')}}</td>
                @if ($item->vaccinated==1)
                <td>Yes</td>
                @else
                <td>No</td>
                @endif
            </tr>
            <tr class="mt-1">
                <td class="bggary border-bottom border-light text-light" >{{__('guest.certified')}}</td>
                @if ($item->certified==1)
                    <td>Yes</td>
                @else
                    <td>No</td>
                @endif
            </tr>
            <tr class="mt-1">
                <td class="bggary border-bottom border-light text-light" >{{__('certifyBy')}}</td>
                <td> Vet Name</td>

            </tr>
            <tr class="mt-15">
                <td class="bggary border-bottom border-light text-light" >{{__('guest.certifyRegisNum')}}</td>
                <td>00866</td>

            </tr>

            </tbody>
        </table>


        <div class="text-center mt-5 mb-5 mb-md-0">
            <button class="px-4 py-2  border_color2 bg-transparent btn btnhover4"><a href="chat.html" class="text-decoration-none tcolor fw-bold">{{__('guest.contactSeller')}}</a></button>
        </div>


        <span class="position-absolute bottom-0 border border-secondary bg-light start-0 px-lg-4 py-2">{{$item->area}}, {{$item->city}}, {{$item->taluka}}</span>
        <span class="position-absolute bottom-0 border border-secondary bg-light end-0 px-lg-4 py-2">{{$item->created_at->diffForHumans()}}</span>



    </div>
    <!-- end of col -5 -->

</div>
<!-- end of row  -->
@endforeach
@endsection