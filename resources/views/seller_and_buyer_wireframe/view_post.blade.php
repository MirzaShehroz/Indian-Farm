@extends('layouts.app')
@section('content')
<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around align-items-center">

<div class="row pad-50 mt-5">

<div class="col-12 mt-5 mt-md-3">

    @forelse($question as $question)

    <div class="row queryrow1 my-5 my-md-0" style="border-radius: 10px; box-shadow: 1px 1px 10px  lightgray; border-top: 5px solid #0572B2;">

     
        <div class="col-12 py-3 text-center position-relative">

            <p>{{$question->question}}</p>

            
     
        </div>
        <!-- end of col  -->

    </div>
    <!-- end of row inner -->
    <div class="row my-4 queryrow1" style="border-radius: 10px; box-shadow: 1px 1px 10px  lightgray; border-top: 5px solid #0572B2;">

     
        <div class="col-12 py-4 text-center position-relative">

            <h6>Response 1</h6>

            <span class="px-3 py-2 bg-light position-absolute bottom-0 start-0 border">User Name</span>
            <span class="px-3 py-2 bg-light position-absolute bottom-0 end-0 border">Date</span>
            

        </div>
        <!-- end of col  -->

    </div>
    <!-- end of row inner -->

<!-- 
    <div class="row my-4 queryrow1" style="border-radius: 10px; box-shadow: 1px 1px 10px  lightgray; border-top: 5px solid #0572B2;">

     
        <div class="col-12 py-4 text-center position-relative">

            <h6>Response 1</h6>

            <span class="px-3 py-2 bg-light position-absolute bottom-0 start-0 border">User Name</span>
            <span class="px-3 py-2 bg-light position-absolute bottom-0 end-0 border">Date</span>
            

        </div>
        <!-- end of col  -->

    </div> 
    <!-- end of row inner -->

    
<div class="row justify-content-around mt-5 text-center">

<div class="col-12 col-md-10 text-start pb-5">
    
    <textarea name="comment" placeholder="   Write Your Response..." class="comment form-control" id="" rows="5"></textarea>

</div>
<!-- end of col  -->

<div class="col-12">

    <button id="submitbtn" type="button" class="btn btnsubmit bgcolor px-5 text-light border_color2 py-2 btnhover2"  data-bs-toggle="modal" data-bs-target="#exampleModal">
        Submit
    </button>


</div>
</div>
<!-- end of row  -->




<!-- end of col  -->
@empty
No Data 
@endforelse
<!-- end of col  -->



</div>
</div>
        
        


</div>

@endsection