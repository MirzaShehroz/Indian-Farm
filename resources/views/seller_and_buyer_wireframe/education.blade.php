@extends('layouts.app')
@section('content')
<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around ">

@forelse($education as $edu)
                        <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">



                            <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/{{$edu->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                                <p class="bg-light py-2 ps-2 danger"><a href="{{url('https://www.youtube.com/embed/'.$edu->url)}}"> <span class="fw-bold me-auto">{{$edu->title}}</span></a> </p>

                        

                        </div>
@empty
{{__('guest.noVideo')}}                        
@endforelse


</div>
<!-- end of row  -->

<div class="row mt-5 justify-content-around ext-centert">

<div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">

{{ $education->render("pagination::bootstrap-4") }}


</div>
<!-- end of col  -->


</div>
@endsection