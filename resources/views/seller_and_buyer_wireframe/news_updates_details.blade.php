@extends('layouts.app')
@section('content')
<div class="row pad-50 justify-content-around" id="news-row1">


<div class="col-12 col-lg-8">


    <div class="row justify-content-around">

                      


        <div class="col-12 my-3 bignews2" >

                        <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url({{asset($news->photo)}}) center center no-repeat">

           
                       <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3">{{$news->topic}}</p>

                       <small class="position-absolute text-light mt-3 end-0 me-3 fw-bold">Date: <span>{{$news->created_at->format('Y-m-d')}}</span> </small>

                  

                    </div>
                    <!-- overlay div  -->

                    <h4 class="tcolor mt-4 fw-bold">{{$news->topic}}</h4>
                    
                    <p class="text-secondary mt-4">
                    {{$news->detail}}
                    </p>

                    </div>
  
  
    
  


    </div>
    <!-- end of row second  -->




</div>
<!-- end of col-8 main  -->

<div class="col-12 col-lg-3 my-3 my-lg-0  border-start border_color border-2">


    <h4 class="mb-4 border-start border-5 border_color ps-3">Latest News</h4>

    <div class="row p-lg-2">


    @forelse($latestnews as $news1)


        <div class="col-12 border-bottom border-2 border_color pb-3 my-3">

            <a href="{{url('news_detail/'.$news1->id)}}" class="text-decoration-none">
            <div class="d-flex cardobject">
                <div class="flex-shrink-0">
                  <img src="{{asset($news1->photo)}}" alt="image not found" class="objectnews_img" width="50px">
                </div>
                <div class="flex-grow-1 ms-2">
                <small class="text-secondary objecttext d-block">  {{trimstring($news1->topic)}}...</small>

                
                <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : {{$news1->created_at->format('Y-m-d')}}</small>
                </div>
              </div>
            </a>


        </div>
    @empty
    No content 
    @endforelse    
        <!-- end of inner col  -->

        
  


           

        


    </div>
    <!-- inner row end  -->


</div>
<!-- end of col-3 main -->



</div>
<!-- end of row main  -->

@endsection