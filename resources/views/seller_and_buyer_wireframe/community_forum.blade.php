@extends('layouts.app')
@section('content')
 <div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around align-items-center">

       
         <div class="col-12 col-md-4 pt-5 pt-md-0 my-3 my-md-0">

            <form class="d-flex position-relative">
                <input class="form-control rounded-pill py-2 ps-5" type="search" placeholder="{{__('guest.searchTopic')}} " aria-label="Search">
                <button class="btn position-absolute end-0 me-3" type="submit"><i class="fas fa-search"></i></button>
              </form>


         </div>
         <!-- end of col  -->

         <div class="col-12 col-md-4 text-center my-3 my-md-0">

            <a href="{{url('post/question')}}" class=" rounded-pill btnhover2 border_color2 px-5 py-2 bgcolor text-light text-decoration-none">{{__('guest.postQuestion')}}</a>

         </div>
         <!-- end of col  -->
        

         <div class="col-12 col-md-4 text-center my-3 my-md-0">

            <a href="{{url('my/post')}}" class="px-5 rounded-pill btnhover2 border_color2  py-2 bgcolor text-light text-decoration-none">{{__('guest.viewPost')}}</a>

         </div>
         <!-- end of col  -->
        

        </div>
        <!-- end of row  -->

        <div class="row pad-50 mt-3">


            <div class="col-12">

                @forelse($question as $question)
                <div class="row queryrow my-5" style="border-radius: 10px; box-shadow: 1px 1px 10px  lightgray; border-top: 5px solid #0572B2;">

                    <div class="col-3 col-lg-1 py-3 border-end border-dark my-auto">

                        <div class="text-center">
                            <h5>2</h5>
                            <p class="tcolor">{{__('guest.view')}}</p>
                        </div>

                        <div class="text-center">
                            <h5>5</h5>
                            <p class="tcolor">{{__('guest.ans')}}</p>
                        </div>


                    </div>
                    <!-- end of col inner -->

                    <div class="col-9 col-lg-11 py-5 position-relative">

                        <p>{{$question->question}}</p>

                            <a href="#" class="px-3 btnhover2 border_color2  py-1 bgcolor text-light text-decoration-none position-absolute bottom-0 start-0">{{__('guest.readMore')}}</a>
                        
                            <a href="#" class="px-3 btnhover2 border_color2  py-1 bgcolor text-light text-decoration-none position-absolute bottom-0 end-0">{{__('guest.datePosted')}}</a>
                      
                    </div>
                    <!-- end of col  -->

                </div>
                @empty
                {{__('guest.noData')}} 
                @endforelse
                <!-- end of row inner -->

                
                <!-- end of row inner -->

            </div>
            <!-- end of col  -->


        </div>
        <!-- end of row -->


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

@endsection