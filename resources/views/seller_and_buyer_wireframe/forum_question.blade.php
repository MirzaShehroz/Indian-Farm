@extends('layouts.app')
@section('content')
<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around align-items-center">

        <div class="col-12 col-md-4 pt-5 pt-md-0 my-3 my-md-0">

            <form class="d-flex position-relative">
                <input class="form-control rounded-pill py-2 ps-5" type="search" placeholder="Search A Topic " aria-label="Search">
                <button class="btn position-absolute end-0 me-3" type="submit"><i class="fas fa-search"></i></button>
              </form>


        </div>
         <!-- end of col  -->

        <div class="col-12 col-md-4 text-center my-3 my-md-0">

            <a href="{{url('post/question')}}" class=" rounded-pill btnhover2 border_color2 px-5 py-2 bgcolor text-light text-decoration-none">Post A Question</a>

        </div>
         <!-- end of col  -->
        

        <div class="col-12 col-md-4 text-center my-3 my-md-0">

            <a href="{{url('my/post')}}" class="px-5 rounded-pill btnhover2 border_color2  py-2 bgcolor text-light text-decoration-none">View Your Post</a>

        </div>
         <!-- end of col  -->
        


        <!-- end of row  -->

        

      
        <!-- end of col  -->

        <div class="row justify-content-around mt-3 text-center">
        <form action="{{url('user/add/question')}}" method="post">
            @csrf
            <div class="col-12 col-md-10 text-start pb-5">
                <label for="price" class="form-label tcolor fw-bold fs-5 mt-5 mb-4"> Write Your Query </label>
                <br>
                <textarea name="question" placeholder="Enter Your Query..." class="comment form-control " id="" rows="8" required></textarea>

            </div>
            <!-- end of col  -->

            <div class="col-12">

                <button id="submitbtn" type="submit" class="btn btnsubmit bgcolor px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Submit
                </button>


            </div>
            <!-- end of col  -->
        </form>
        </div>


    </div>

@endsection