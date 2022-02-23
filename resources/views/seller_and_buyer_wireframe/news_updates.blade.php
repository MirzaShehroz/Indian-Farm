@extends('layouts.app')
@section('content')
<div class="row pad-50 justify-content-around" id="news-row">


<div class="col-12 col-lg-8">


    <div class="row justify-content-around">

    @if($news!=null)
                            @foreach($news as $new)
                                <div class="col-12 col-md-6 my-3 bignews1" >

                                    <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url({{asset($new->photo)}}) center center no-repeat; background-size: cover; border-radius: 10px;">


                                        <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3">{{trimstring($new->topic)}}...</p>

                                        <small class="position-absolute text-light mt-3 fw-bold">Date: <span>{{$new->created_at->format('Y-m-d')}}</span> </small>

                                        <a href="{{url('news_detail/'.$new->id)}}" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 35%;" onclick="newsdetail({{$new->id}})">VIEW MORE</a>

                                    </div>

                                </div>
                            @endforeach
                        @else
                            No Content
                        @endif


        <!-- end of col card -->
  
       
        <!-- end of col card -->
  
       

        
        @if($latestnews!=null)
                            @foreach($latestnews as $new)
                                <div class="col-12 col-md-4 my-3 " >

                                    <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url({{asset($new->photo)}}) center center no-repeat; background-size: cover; border-radius: 10px;">

                                    <small class="position-absolute bgcolor text-light p-2 border-light border end-0" style="border-bottom-left-radius: 50%;">Latest</small>

                                        <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3">{{trimstring($new->topic)}}...</p>

                                        <small class="position-absolute text-light mt-3 fw-bold">Date: <span>{{$new->created_at->format('Y-m-d')}}</span> </small>

                                        <a  href="{{url('news_detail/'.$new->id)}}" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 35%;">VIfEW MORE</a>

                                    </div>

                                </div>
                            @endforeach
                        @else
                            No Content
                        @endif
        <!-- end of col card -->
  
    
  


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

<div class="row mt-5 justify-content-around ext-centert">

<div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">

{{ $latestnews->render("pagination::bootstrap-4") }}


</div>
<!-- end of col  -->


</div>
<!-- end of row paggi  -->



<div class="row pad-50 mt-5">

<h4 class="fw-bold my-4 border-start border-5 border_color">Blogs</h4>

<div class="col-12" id="blog-news">


    <div class="owl-carousel owl-theme">

        <div class="item">

            <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">

               <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>

               <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>

               <a href="news1.html" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 40%;">VIEW MORE</a>

            </div>
            <!-- overlay div  -->


        </div>
        <!-- end of item  -->
        <div class="item">

            <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">

              
               <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>

               <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>

               <a href="news1.html" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 40%;">VIEW MORE</a>

            </div>
            <!-- overlay div  -->


        </div>
        <!-- end of item  -->
        <div class="item">

            <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">

         
               <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>

               <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>

               <a href="news1.html" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 40%;">VIEW MORE</a>

            </div>
            <!-- overlay div  -->


        </div>
        <!-- end of item  -->
        <div class="item">

            <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">

   
               <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>

               <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>

               <a href="news1.html" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 40%;">VIEW MORE</a>

            </div>
            <!-- overlay div  -->


        </div>
        <!-- end of item  -->
       
    </div>

    

</div>
<!-- end of col  -->


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- jquery link  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- jquery link  -->
    <script src="{{asset('js/owl.carousel.js')}}"></script>

    <script src="{{asset('script.js')}}"></script>


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

    <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})
    </script>

<!-- end of row  -->
@endsection