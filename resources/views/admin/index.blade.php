@extends('app.dashboard')
@section('title','Dashboard')
       @section('pill')
       <div class="tab-pane fade show active px-4 pt-4 position-relative" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">


<div class="row ms-md-5 ms-lg-0 justify-content-around" id="notic">

    <div class="col-12">

    


        <div class="row justify-content-around gap-2" id="notic">

            <div class="col-12 col-md-3 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                <h5>{{__('eng.totalUser')}}</h5>

                <h1>0</h1>


            </div>
            <!-- end of col  -->
            <div class="col-12 col-md-3 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                <h5>{{__('eng.totalVet')}} </h5>

                <h1>0</h1>


            </div>
            <!-- end of col  -->
            <div class="col-12 col-md-3 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                <h5>{{__('eng.totalTrans')}}</h5>

                <h1>0</h1>


            </div>
            <!-- end of col  -->

        </div>
        <!-- end of row  -->

  

        <div class="row justify-content-around gap-2">

            <div class="col-12 col-md-3 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                <h5>{{__('eng.totalAppoint')}} </h5>

                <h1>0</h1>


            </div>
            <!-- end of col  -->
            <div class="col-12 col-md-3 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                <h5>{{__('eng.totalAppointToday')}}</h5>
                <h1>0</h1>


            </div>
            <!-- end of col  -->
            <div class="col-12 col-md-3 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                <h5>{{__('eng.totalTransSche')}} </h5>

                <h1>0</h1>


            </div>
            <!-- end of col  -->

        </div>
        <!-- end of row  -->
        <div class="row justify-content-around gap-2">

            <div class="col-12 col-md-4 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                <h5>{{__('eng.totalTransScheToday')}}</h5>
                <h1>0</h1>

            </div>
            <!-- end of col  -->
            <div class="col-12 col-md-4 noticecol text-center bg_danger p-3 text-light my-3" style="box-shadow: 1px 1px1px 10px lightgray; border-radius: 10px;">


                <h5>{{__('eng.totalPremUser')}}</h5>

                <h1>0</h1>


            </div>
            <!-- end of col  -->
        

        </div>
        <!-- end of row  -->

  

    </div>
    <!-- end of col  -->


</div>
<!-- end of row  -->



</div>
       @endsection
