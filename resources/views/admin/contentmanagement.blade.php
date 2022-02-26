@extends('app.dashboard')
@section('title','Content Management')
@section('pill')
    <div class="px-4 pt-4 position-relative" id="v-pills-settings6" role="tabpanel" aria-labelledby="v-pills-settings6-tab">



        <div class="row py-5 gap-1 mx-auto justify-content-around">

            <a  class="col-12 col-md-3 text-center my-3 bg_danger text-light p-4 text-decoration-none" style="border-radius: 10px; box-shadow: 1px 1px 10px lightgray;" data-bs-toggle="offcanvas" href="#forms" role="button" aria-controls="forms">


                <h4>Forums & Discussion</h4>



            </a>

            <a  class="col-12 col-md-3 text-center my-3 bg_danger text-light p-4 text-decoration-none" style="border-radius: 10px; box-shadow: 1px 1px 10px lightgray;" data-bs-toggle="offcanvas" href="#education" role="button" aria-controls="education">

                <h4>Education</h4>



            </a>

            <a  class="col-12 col-md-3 text-center my-3 bg_danger text-light p-4 text-decoration-none" style="border-radius: 10px; box-shadow: 1px 1px 10px lightgray;" data-bs-toggle="offcanvas" href="#newsupdate" role="button" aria-controls="newsupdate">

                <h4>News & Updates</h4>



            </a>


        </div>
        <!-- end of row  -->


    </div>




    <div class="offcanvas offcanvas-end" tabindex="-1" id="forms" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">

            </h5>
            <button type="button" class="btn-close text-reset me-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around align-items-center">

            
                <div class="col-12 col-md-4 pt-5 pt-md-0 my-3 my-md-0">


                    <input class="form-control rounded-pill py-2 ps-5" type="text" placeholder="Search By User " >




                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-4 pt-5 pt-md-0 my-3 my-md-0">


                    <input class="form-control rounded-pill py-2 ps-5" type="date" aria-label="Search">



                </div>
                <!-- end of col  -->



                <div class="col-12 col-md-4 text-center my-3 my-md-0">

                    <a href="#" class="btn px-5 rounded-pill btnhover2 border_color2  py-2  bg_danger text-light text-decoration-none">Search</a>

                </div>
                <!-- end of col  -->


            </div>
            <!-- end of row  -->


            <div class="row  mt-3 p-md-3 px-lg-5">

                <div class="col-12">


                        @forelse($question as $question)
                        <div class="row my-5" style="border-radius: 10px; box-shadow: 1px 1px 10px  rgb(255, 255, 255); border-top: 5px solid #00aeff;">

                        <div class="col-2 col-lg-1 py-3 border-end border-dark my-auto">

                            <div class="text-center">
                                <h5>2</h5>
                                <p class="tcolor">Views</p>
                            </div>

                            <div class="text-center">
                                <h5>5</h5>
                                <p class="tcolor">Answer</p>
                            </div>


                        </div>
                        <!-- end of col inner -->

                        <div class="col-10 col-lg-10 py-5 position-relative">

                            <p>{{$question->question}}</p>

                            <a href="#" class="px-3 btnhover2 border_color2  py-1 bg_danger text-light text-decoration-none position-absolute bottom-0 start-0">{{getname($question->user_id)}}</a>

                            <a href="#" class="px-3 btnhover2 border_color2  py-1 bg_danger text-light text-decoration-none position-absolute bottom-0 end-0">{{$question->created_at->format('Y-m-D')}}</a>


                        </div>
                        <!-- end of col  -->

                        <div class="col-12 col-lg-1 d-flex d-lg-block justify-content-around py-3 border-start border-dark my-auto">

                            <div class="text-center mt-3">
                                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#edit-forms" aria-controls="edit-forms"  class="bg-transparent border-0" onclick="editforum({{$question->id}})" ><i class="fas fa-edit"></i></button>


                            </div>

                            <div class="text-center mt-3">
                                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#view-forms" aria-controls="view-forms" class="bg-transparent border-0" onclick="viewforum({{$question->id}})"><i class="fas fa-eye"></i></button>
                            </div>

                            <div class="text-center mt-3">
                                <button class="bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#exampleModal7" onclick="deleteforum({{$question->id}})"><i class="fas fa-trash-alt"></i></button>
                            </div>

                        </div>
                        </div>
                        @empty
                        No data
                        @endforelse

                    
                    <!-- end of col inner -->

                </div>
                <!-- end of row inner -->




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
                <!-- end of row paggi  -->




            </div>


        </div>
    </div>




    <!-- edit response            -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="edit-forms" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Edit-Response</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="row justify-content-around">

                <div class="col-12 col-md-10 p-3 " style="box-shadow: 1px 1px 20px rgb(255, 255, 255);">

                    <p id="equestion"></p>
                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-10 p-3 mt-4 position-relative" style="box-shadow: 1px 1px 20px rgb(255, 255, 255);">
                    <span class="position-absolute py-2 px-3 end-0 top-0"><i class="fas fa-trash-alt fs-5 text-danger"></i></span>

                    <h4 class="text-center mb-4">Response 1
                    </h4>

                    <span class="position-absolute bg_danger text-light py-1 px-3 start-0 bottom-0" id="euser_name">User Name</span>
                    <span class="position-absolute bg_danger text-light py-1 px-3 end-0 bottom-0" id="edate">Date</span>

                </div>

                <div class="col-12 col-md-6 mt-5 p-3" style="box-shadow: 1px 1px 20px rgb(255, 255, 255);">

                    <textarea name="" placeholder="Write Your Response" class="form-control" id=""  rows="5"></textarea>

                </div>
                <!-- end of col  -->

                <div class="col-12 text-center mt-3">

                    <button type="submit" class="btn bg_danger px-5 py-2 text-light">Submit</button>


                </div>
                <!-- end of col  -->

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
                <!-- end of row paggi  -->


            </div>
            <!-- end of row -->


        </div>

    </div>







    <div class="offcanvas offcanvas-end" tabindex="-1" id="view-forms" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">View Response</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="row justify-content-around">

                <div class="col-12 col-md-10 p-3 " style="box-shadow: 1px 1px 20px rgb(255, 255, 255);">

                    <p id="vquestion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quos aperiam cupiditate delectus adipisci labore sequi dicta inventore quis quisquam voluptatibus, odio veniam repudiandae sit praesentium fugiat velit natus? Debitis eos tempore quasi molestiae praesentium similique expedita illo minus. Iste debitis non a explicabo corrupti voluptatibus officiis, recusandae ipsum ipsa deserunt eos dolores odit quasi. Assumenda illum quos cupiditate ipsa quo. Magnam voluptate illum quos minima adipisci culpa exercitationem cumque sit accusantium, et, veritatis aliquam excepturi possimus impedit. Rem ex soluta minima asperiores vel vero numquam sit voluptatum porro consequatur nulla ipsum rerum consequuntur suscipit error iure harum quae enim nesciunt eum totam reprehenderit, eaque voluptates! In totam fugit ipsam beatae eos blanditiis reiciendis alias animi voluptate sint! Est ducimus sint amet, eaque quos veniam, impedit dolorem sequi vero dolores quasi perspiciatis corrupti aliquid, fuga modi? Itaque corporis voluptas nisi maiores facere accusantium, magni quasi asperiores. Vero asperiores, tenetur reiciendis commodi odit omnis maxime modi nemo hic eos eaque sequi, maiores sunt iusto at debitis! Consequuntur ipsum voluptate unde minima doloremque reiciendis maiores ipsa commodi incidunt velit eveniet itaque nesciunt ea exercitationem culpa provident cum tenetur placeat, totam est cumque ipsam. Tempore ea quis voluptatibus consectetur optio. Omnis, culpa quam?</p>


                </div>
                <!-- end of col  -->

                <div class="col-12 col-md-10 p-3 mt-4 position-relative" style="box-shadow: 1px 1px 20px rgb(255, 255, 255);">
                    <span class="position-absolute py-2 px-3 end-0 top-0"><i class="fas fa-trash-alt fs-5 text-danger"></i></span>

                    <h4 class="text-center mb-4">Response 1
                    </h4>

                    <span class="position-absolute bg_danger text-light py-1 px-3 start-0 bottom-0">User Name</span>
                    <span class="position-absolute bg_danger text-light py-1 px-3 end-0 bottom-0">Date</span>

                </div>

                <div class="col-12 col-md-6 mt-5 p-3" style="box-shadow: 1px 1px 20px rgb(255, 255, 255);">

                    <textarea name="" placeholder="Write Your Response" class="form-control" id=""  rows="5"></textarea>

                </div>
                <!-- end of col  -->

                <div class="col-12 text-center mt-3">

                    <button type="submit" class="btn bg_danger px-5 py-2 text-light">Submit</button>


                </div>
                <!-- end of col  -->

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
                <!-- end of row paggi  -->


            </div>
            <!-- end of row -->


        </div>
    </div>



    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('delete/forum')}}" method="post">
                    @csrf
                <div class="modal-body text-center p-4">
                    <p class="fw-bold text-secondary">Are You sure to Delete this Response </p>
                </div>
               
                   
                    <input id="forum_id" name="id" type="hidden">
                <div class="modal-foote d-flex">
                    <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">No</button></a>
                    <a href="#" class="text-decoration-none col-6"><button type="submit" class="btn border form-control btnhover">Yes</button></a>

                </div>
                </form>
            </div>
        </div>
    </div>




    <!-- education  canvas  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="education" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Education</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-2 p-md-4 px-lg-5">

            <div class="row mb-5 justify-content-around ">

                <div class="col-12 mb-5">

                    <div class="row">

                        <div class="col-12 col-md-3 my-2">

                            <form action="{{url('searcheducation')}}" method="post">

                                <input type="text" name="topic" class="form-control py-3" placeholder="Search By Topic">

                        </div>
                        <!-- end of col  -->

                        <div class="col-12 col-md-3 my-2">

                            <input type="date" name="date" class="form-control py-3" placeholder="Search By Date">

                        </div>
                        <!-- end of col  -->

                        <div class="col-12 col-md-3 my-2">

                            <button class="bg_danger btnhover2 px-5 rounded-pill py-3 text-light" type="submit">Search</button>
                            </form>
                        </div>
                        <!-- end of col  -->

                        <div class="col-12 text-center col-md-3 my-2">

                            <button class="bg-transparent btnhover px-5 border border-light px-md-1 px-lg-3 px-xl-5 danger py-3" style="border-radius: 10px; border: 1px solid #0572B2;" type="button" data-bs-toggle="offcanvas" data-bs-target="#upload" aria-controls="upload"><i class="fas fa-cloud-upload-alt me-2 me-md-1 me-xl-3"></i> Upload Video</button>

                        </div>
                        <!-- end of col  -->

                    </div>
                    <!-- end of row  -->


                </div>
                <!-- end of col  -->
                @if($education!=null)


                    @foreach($education as $edu)
                        <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">



                            <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/{{$edu->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            <form action="{{url('delete/education/video')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$edu->id}}" name="videoid">
                                <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">{{$edu->title}}</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0" type="submit"><i class="fas fa-trash-alt" ></i></button></p>

                            </form>

                        </div>
                    @endforeach
                <!-- end of col  -->
                @else
                    No video
            @endif

            <!-- end of col  -->

                <!-- end of col  -->


            </div>
            <!-- end of row  -->

            <div class="row mt-5 justify-content-around ext-centert">

                <div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">

{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                    <span aria-hidden="true">&laquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Next">--}}
{{--                                    <span aria-hidden="true">&raquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
                    {{ $education->render("pagination::bootstrap-4") }}


                </div>
                <!-- end of col  -->


            </div>
            <!-- end of row paggi  -->




        </div>
    </div>
    <!-- end of canvas   -->



    <!-- upload youtube canvas  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="upload" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Upload Video</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-2 p-md-4 px-lg-5">


            <div class="row">

                <div class="col-12 col-md-6 col-lg-3 mx-auto mb-3">

                    <img src="{{asset('images/folder.png')}}" class="imgupload" alt="img not found">

                </div>
                <!-- end of col  -->


            </div>
            <!-- end of row  -->

            <div class="row">
                <form action="{{url('upload/video')}}" method="post">
                    @csrf
                    <div class="col-12 col-md-8 col-lg-6 mx-auto mt-5 mb-4">

                        <input type="text" class="ps-md-4 form-control border border-dark border py-3" placeholder="Youtube URL
                                          " id="" name="url" style="border-radius: 15px;"> <br>
                        <input type="text" name="title" class="ps-md-4 form-control border border-dark border py-3" placeholder="Youtube Video Title" style="border-radius: 15px;">
                        <button type="submit" class="mt-5 rounded-pill form-control bg_danger text-light py-3">Upload Video</button>

                </form>
            </div>
            <!-- end of col   -->

        </div>
        <!-- end of row  -->






    </div>
    </div>
    <!-- end of canvas   -->



    <!-- news & update btn of canvas  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="newsupdate" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">News & Update</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-2 p-md-4 px-lg-5">


            <div class="row mb-3">

                <div class="col-12 text-end mb-5">

                    <button class="btn px-5 py-2 bg_danger text-light btnhover rounded-pill" data-bs-toggle="modal" data-bs-target="#addnew" type="button" >Add New <i class="fas fa-plus ms-2"></i></button>

                </div>
                <!-- end of col  -->

            </div>
            <!-- end of row   -->

            <div class="row pad-50 justify-content-around" id="news-row">


                <div class="col-12 col-xl-8">


                    <div class="row justify-content-around">
                        @if($news!=null)
                            @foreach($news as $new)
                                <div class="col-12 col-md-6 my-3 bignews1" >

                                    <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url({{asset($new->photo)}}) center center no-repeat; background-size: cover; border-radius: 10px;">


                                        <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3">{{trimstring($new->topic)}}...</p>

                                        <small class="position-absolute text-light mt-3 fw-bold">Date: <span>{{$new->created_at->format('Y-m-d')}}</span> </small>

                                        <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 35%;" onclick="newsdetail({{$new->id}})">VIEW MORE</a>



                                        <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 10%;" onclick="editnewdetail({{$new->id}})"><i class="fas fa-edit text-light"></i></a>

                                        <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 30%;" onclick="viewsnewdetail({{$new->id}})"><i class="fas fa-eye text-light"></i></a>


                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 50%;" onclick="deletenewdetail({{$new->id}})"><i class="fas fa-trash-alt text-light"></i></a>

                                    </div>

                                </div>
                            @endforeach
                        @else
                            No Content
                        @endif


                        @if($latestnews!=null)
                            @foreach($latestnews as $new)
                                <div class="col-12 col-md-4 my-3 " >

                                    <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url({{asset($new->photo)}}) center center no-repeat; background-size: cover; border-radius: 10px;">


                                        <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3">{{trimstring($new->topic)}}...</p>

                                        <small class="position-absolute text-light mt-3 fw-bold">Date: <span>{{$new->created_at->format('Y-m-d')}}</span> </small>

                                        <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 35%;" onclick="newsdetail({{$new->id}})">VIEW MORE</a>



                                        <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 10%;" onclick="editnewdetail({{$new->id}})"><i class="fas fa-edit text-light"></i></a>
                                        <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 30%;" onclick="viewsnewdetail({{$new->id}})"><i class="fas fa-eye text-light"></i></a>


                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 50%;" onclick="deletenewdetail({{$new->id}})"><i class="fas fa-trash-alt text-light"></i></a>

                                    </div>

                                </div>
                            @endforeach
                        @else
                            No Content
                        @endif
                    <!-- end of col card -->




                        <!-- overlay div  -->


                        <!-- end of col card -->


                        <!-- overlay div  -->


                        <!-- end of col card -->


                        <!-- end of col card -->


                        <!-- end of col card -->


                        <!-- end of col card -->


                        <!-- end of col card -->




                    </div>
                    <!-- end of row second  -->




                </div>
                <!-- end of col-8 main  -->

                <div class="col-12 col-xl-3 my-3 my-lg-0  border-start border_color border-2">


                    <h4 class="mb-4 border-start border-5 border_color ps-3">Latest News</h4>

                    <div class="row p-lg-2">

                        @if($latestnews!=null)
                            @foreach($latestnews as $news1)

                                <div class="col-12 border-bottom border-2 border_color pb-3 my-3">

                                    <a data-bs-toggle="modal" data-bs-target="#viewnews" href="#" class="text-decoration-none" onclick="viewsnewdetail({{$news1->id}})">
                                        <div class="d-flex cardobject">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset($news1->photo)}}" alt="image not found" class="objectnews_img">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <small class="text-secondary objecttext d-block"> {{trimstring($news1->topic)}}...</small>


                                                <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : {{$news1->created_at->format('Y-m-d')}}</small>
                                            </div>
                                        </div>
                                    </a>


                                </div>

                            @endforeach
                        <!-- end of inner col  -->
                        @else
                            No Content
                        @endif



                    </div>
                    <!-- inner row end  -->


                </div>
                <!-- end of col-3 main -->



            </div>
            <!-- end of row main  -->


            <div class="row mt-5 justify-content-around ext-centert">

                <div class="col-7 col-md-4 col-lg-3 col-xl-2 text-center">

{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                    <span aria-hidden="true">&laquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Next">--}}
{{--                                    <span aria-hidden="true">&raquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
                    {{ $latestnews->render("pagination::bootstrap-4") }}


                </div>
                <!-- end of col  -->


            </div>
            <!-- end of row paggi  -->


        </div>
    </div>
    <!-- end of canvas   -->


    <!-- news and update readmore canvas  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="readmore" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="readmore">Read More News & Updates</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="row pad-50 justify-content-around" id="news-row1">


                <div class="col-12 col-lg-8">


                    <div class="row justify-content-around">

                        <div class="col-12 my-3 bignews2" >

                            <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;" id="vphoto">


                                <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3" id="vcaption">Lorem ipsum dolor sit.</p>

                                <small class="position-absolute text-light mt-3 end-0 me-3 fw-bold">Date: <span id="vdate">20/01/2022</span> </small>



                            </div>
                            <!-- overlay div  -->

                            <h4 class="tcolor mt-4 fw-bold" id="vtopic">Heading 1</h4>

                            <p class="text-secondary mt-4" id="vdetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit <br> repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores <br> debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur dolores</p>

                        </div>
                        <!-- end of col card -->






                    </div>
                    <!-- end of row second  -->




                </div>
                <!-- end of col-8 main  -->

                <div class="col-12 col-lg-3 my-3 my-lg-0  border-start border_color border-2">


                    <h4 class="mb-4 border-start border-5 border_color ps-3">Latest News</h4>

                    <div class="row p-lg-2">



                        @foreach($latestnews as $news1)

                            <div class="col-12 border-bottom border-2 border_color pb-3 my-3">

                                <a data-bs-toggle="modal" data-bs-target="#viewnews" href="#" class="text-decoration-none" onclick="viewsnewdetail({{$news1->id}})">
                                    <div class="d-flex cardobject">
                                        <div class="flex-shrink-0">
                                            <img src="{{asset($news1->photo)}}" alt="image not found" class="objectnews_img">
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <small class="text-secondary objecttext d-block"> {{trimstring($news1->topic)}}...</small>


                                            <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : {{$news1->created_at->format('Y-m-d')}}</small>
                                        </div>
                                    </div>
                                </a>


                            </div>

                    @endforeach

                    <!-- end of inner col  -->









                        <!-- end of inner col  -->




                    </div>
                    <!-- inner row end  -->


                </div>
                <!-- end of col-3 main -->



            </div>
            <!-- end of row main  -->


        </div>
    </div>
    <!-- end ofcanvas  -->





    <div class="modal fade" id="addnew" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addnews" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editnews">Add News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="text-danger">{{$error}}<br></div>
                    @endforeach
                @endif
                <div class="modal-body text-center p-md-4">

                    <div class="row my-4">
                        <form action="{{url('add/news')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-8 mx-auto">

                                <label for="textareas" class="fs-5 text-dark fw-bold">Topic</label>
                                <input type="text" name="topic" placeholder="Enter Topic Name" class="py-3 form-control border border-secondary"  id="textareas">

                            </div>
                            <!-- end of col  -->

                            <div class="col-12 mx-auto col-md-10 mt-4 col-lg-7 p-md-4 position-relative" style=" border-radius: 20px;   center center no-repeat;">



                                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                <p><label class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" for="file" style="cursor: pointer;">Upload Image</label></p>
                                <p><img id="output" width="200" class=" adimg2" src="https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" /><br></p>
                                <label class="bg_danger px-3 py-2 mt-4 rounded-pill text-light" onclick="deleteimg(0)">Delete</label>



                            </div>
                            <!-- end of col  -->

                            <div class="col-12 col-md-10 mt-4 mx-auto">


                                <textarea name="detail" placeholder="Enter Text" class="form-control border border-dark" style="border-radius: 15px;" id="" rows="6"></textarea>

                            </div>
                            <!-- end of col  -->


                            <div class="col-12 mx-auto col-md-6 col-lg-3 mt-3">


                                <!-- <button class="form-control bg_danger rounded-pill text-light btnhover2" type="submit">Save</button> -->
                                <input type="submit" class="form-control bg_danger rounded-pill text-light btnhover2">
                            </div>
                            <!-- end of col  -->
                        </form>
                    </div>
                    <!-- end of row  -->


                </div>
            </div>
        </div>
    </div>

@endsection



<div class="modal fade" id="editnews" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editnews" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editnews">Edit News</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-md-4">

                <div class="row">

                    <div class="col-12 col-md-10 mx-auto">
                        <form action="{{url('update/url')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h4 >Topic Name</h4>
                            <input type="hidden" name="editid" id="editnewid">
                            <input type="text" id="etopic" name="topic" class="py-3 form-control border border-secondary">
                    </div>
                    <!-- end of col  -->

                </div>
                <!-- end of row  -->

                <div class="row my-4">

                    <div class="col-12 mx-auto col-md-10 col-lg-7 p-md-4 position-relative" style="height: 250px; border-radius: 20px; background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover;" id="ephoto">

                        <!-- <button data-toggle="modal" data-target="#photoupload" type="button" class="px-5 border border-light py-2 btnhover2 fw-bold bg_danger text-light btnhover position-absolute bottom-0 end-0" style="border-top-left-radius:20px;">Change</button> -->

                    </div>
                    <!-- end of col  -->
                    <div class="col-12 col-md-10 mt-4 mx-auto">


                        <input type="file" name="image" class="py-3 form-control border border-secondary">
                        <span class="text-danger">When you upload new photo old will delete</span>
                    </div>
                    <div class="col-12 col-md-10 mt-4 mx-auto">


                        <textarea name="detail" placeholder="Enter Text" class="form-control border border-dark" style="border-radius: 15px;" id="edetail" rows="6"></textarea>

                    </div>
                    <!-- end of col  -->

                </div>
                <!-- end of row  -->

                <div class="row">

                    <div class="col-12 mx-auto col-md-6 col-lg-3 mt-2">


                        <button class="form-control bg_danger rounded-pill text-light btnhover2">Update</button>

                    </div>
                    <!-- end of col  -->
                    </form>
                </div>
                <!-- end of row  -->


            </div>
        </div>
    </div>
</div>






<div class="modal fade" id="viewnews" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewnews" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewnews">View News</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-md-4">

                <div class="row">

                    <div class="col-12 col-md-10 mx-auto">

                        <h4 >Topic Name</h4>

                        <p id="vnewstopic"> </p>

                    </div>
                    <!-- end of col  -->

                </div>
                <!-- end of row  -->

                <div class="row my-4">

                    <div class="col-12 mx-auto col-md-10 col-lg-7 p-md-4 position-relative" style="height: 250px; border-radius: 20px; background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover;" id="newsphoto">

                        <!-- <button class="px-5 border border-light py-2 btnhover2 fw-bold bg_danger text-light btnhover position-absolute bottom-0 end-0" style="border-top-left-radius:20px;">Change</button> -->

                    </div>
                    <!-- end of col  -->

                    <div class="col-12 col-md-10 mt-4 mx-auto">


                        <textarea name="" placeholder="Enter Text" class="form-control border border-dark" style="border-radius: 15px;" id="vnewsdetail" rows="6"></textarea>

                    </div>
                    <!-- end of col  -->

                </div>
                <!-- end of row  -->

                <div class="row">

                    <div class="col-12 mx-auto col-md-6 col-lg-3 mt-2">


                        <!-- <button class="form-control bg_danger rounded-pill text-light btnhover2">Save & Update</button> -->

                    </div>
                    <!-- end of col  -->

                </div>
                <!-- end of row  -->


            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('delete/news')}}" method="post">
                @csrf
                <input type="hidden" method="post" id="newsid" name="newsupdate_id">
                <div class="modal-body text-center p-4">
                    <p class="fw-bold text-secondary">Are You sure to Delete this Post </p>
                </div>
                <div class="modal-foote d-flex">
                    <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">No</button></a>
                    <a href="#" class="text-decoration-none col-6"><button type="submit" class="btn border form-control btnhover">Yes</button></a>
            </form>
        </div>
    </div>
</div>
</div>
@section('script')
    <script>
        function deletevideo(id){
            $.ajax({
                type:'GET',
                url:"{{url('/delete/education/video')}}"+ '/'+id,
                data:{_token: "{{ csrf_token() }}"},
                success:function(data) {
                    console.log(data.msg);
                }
            });
        }
    </script>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        var deleteimg=function(id){



            if(id==0){
                img=document.getElementById('output');
                // img.removeAttribute("src");
                img.src="https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
            }
        }

        function newsdetail(id){

            $.ajax({
                type:'POST',
                url:"{{url('/getnewsdetail/')}}"+ '/'+id,
                data:{_token: "{{ csrf_token() }}"},
                success:function(data) {
                    console.log(data.newsupdate);
                    //  let topic=datadata.newsupdate.topic;
                    //  let topiclength=datadata.newsupdate.topic;

                    //   var caption=topic.slice('20',topiclength);
                    document.getElementById('vcaption').innerHTML=data.newsupdate.topic;
                    document.getElementById('vtopic').innerHTML=data.newsupdate.topic;
                    var photo=data.newsupdate.photo;
                    var http1="{{asset("  ")}}";
                    var photourl="url("+http1.concat(photo)+")";
                    let date= new Date(data.newsupdate.created_at);

                    document.getElementById('vphoto').style.backgroundImage=photourl.replaceAll(' ','');
                    document.getElementById('vdate').innerHTML=date.getFullYear()+"-"+date.getMonth()+"-"+date.getDay();
                    document.getElementById('vdetail').innerHTML=data.newsupdate.detail;
                }
            });

        }

        function viewsnewdetail(id){

            $.ajax({
                type:'POST',
                url:"{{url('/viewnewsdetail/')}}"+ '/'+id,
                data:{_token: "{{ csrf_token() }}"},
                success:function(data) {
                    console.log(data.newsupdate.topic);

                    document.getElementById('vnewstopic').innerHTML=data.newsupdate.topic;
                    document.getElementById('vnewsdetail').innerHTML=data.newsupdate.detail;
                    var photo=data.newsupdate.photo;
                    var http1="{{asset("  ")}}";
                    var photourl="url("+http1.concat(photo)+")";

                    document.getElementById('newsphoto').style.backgroundImage=photourl.replaceAll(' ','');

                }
            });

        }
        function deletenewdetail(id){
            document.getElementById('newsid').value=id;
        }

        function editnewdetail(id){
            $.ajax({
                type:'POST',
                url:"{{url('/viewnewsdetail/')}}"+ '/'+id,
                data:{_token: "{{ csrf_token() }}"},
                success:function(data) {
                    console.log(data.newsupdate.topic);

                    document.getElementById('etopic').value=data.newsupdate.topic;
                    document.getElementById('edetail').innerHTML=data.newsupdate.detail;
                    document.getElementById('editnewid').value=data.newsupdate.id;
                    var photo=data.newsupdate.photo;
                    var http1="{{asset("  ")}}";
                    var photourl="url("+http1.concat(photo)+")";

                    document.getElementById('ephoto').style.backgroundImage=photourl.replaceAll(' ','');

                }
            });
        }


  function editforum(id){
    $.ajax({
                type:'POST',
                url:"{{url('/edit/forum/')}}"+ '/'+id,
                data:{_token: "{{ csrf_token() }}"},
                success:function(data) {
                    console.log(data);
                    document.getElementById('equestion').innerHTML=data.quest.question;
                    
                }
    });
  }      


  function viewforum(id){
    $.ajax({
                type:'POST',
                url:"{{url('/edit/forum/')}}"+ '/'+id,
                data:{_token: "{{ csrf_token() }}"},
                success:function(data) {
                    console.log(data);
                    document.getElementById('vquestion').innerHTML=data.quest.question;
                    
                }
    });
  }

  function deleteforum(id){
    document.getElementById('forum_id').value=id;
  }
    </script>
@endsection
