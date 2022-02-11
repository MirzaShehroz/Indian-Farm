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
                       
                                   
                                        <input class="form-control rounded-pill py-2 ps-5" type="date" placeholder="Search A Topic " aria-label="Search">
                                  
                        
                        
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
                    
                                            <p>Query Listed as lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                    
                                                <a href="#" class="px-3 btnhover2 border_color2  py-1 bg_danger text-light text-decoration-none position-absolute bottom-0 start-0">User Name</a>
                                            
                                                <a href="#" class="px-3 btnhover2 border_color2  py-1 bg_danger text-light text-decoration-none position-absolute bottom-0 end-0">Date Posted</a>
                                            
                    
                                        </div>
                                        <!-- end of col  -->

                                        <div class="col-12 col-lg-1 d-flex d-lg-block justify-content-around py-3 border-start border-dark my-auto">
                    
                                         <div class="text-center mt-3">
                                            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#edit-forms" aria-controls="edit-forms"  class="bg-transparent border-0" ><i class="fas fa-edit"></i></button>
                                                                            
                                          
                                         </div>
                 
                                         <div class="text-center mt-3">
                                         <button type="button" data-bs-toggle="offcanvas" data-bs-target="#view-forms" aria-controls="view-forms" class="bg-transparent border-0" ><i class="fas fa-eye"></i></button>
                                         </div>

                                         <div class="text-center mt-3">
                                         <button class="bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#exampleModal7"><i class="fas fa-trash-alt"></i></button>
                                         </div>

                                        </div>
                 
                 
                                     </div>
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
                    
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quos aperiam cupiditate delectus adipisci labore sequi dicta inventore quis quisquam voluptatibus, odio veniam repudiandae sit praesentium fugiat velit natus? Debitis eos tempore quasi molestiae praesentium similique expedita illo minus. Iste debitis non a explicabo corrupti voluptatibus officiis, recusandae ipsum ipsa deserunt eos dolores odit quasi. Assumenda illum quos cupiditate ipsa quo. Magnam voluptate illum quos minima adipisci culpa exercitationem cumque sit accusantium, et, veritatis aliquam excepturi possimus impedit. Rem ex soluta minima asperiores vel vero numquam sit voluptatum porro consequatur nulla ipsum rerum consequuntur suscipit error iure harum quae enim nesciunt eum totam reprehenderit, eaque voluptates! In totam fugit ipsam beatae eos blanditiis reiciendis alias animi voluptate sint! Est ducimus sint amet, eaque quos veniam, impedit dolorem sequi vero dolores quasi perspiciatis corrupti aliquid, fuga modi? Itaque corporis voluptas nisi maiores facere accusantium, magni quasi asperiores. Vero asperiores, tenetur reiciendis commodi odit omnis maxime modi nemo hic eos eaque sequi, maiores sunt iusto at debitis! Consequuntur ipsum voluptate unde minima doloremque reiciendis maiores ipsa commodi incidunt velit eveniet itaque nesciunt ea exercitationem culpa provident cum tenetur placeat, totam est cumque ipsam. Tempore ea quis voluptatibus consectetur optio. Omnis, culpa quam?</p>
                    
                    
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







                    <div class="offcanvas offcanvas-end" tabindex="-1" id="view-forms" aria-labelledby="offcanvasExampleLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">View Response</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                      
                          <div class="row justify-content-around">

                              <div class="col-12 col-md-10 p-3 " style="box-shadow: 1px 1px 20px rgb(255, 255, 255);">
                    
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quos aperiam cupiditate delectus adipisci labore sequi dicta inventore quis quisquam voluptatibus, odio veniam repudiandae sit praesentium fugiat velit natus? Debitis eos tempore quasi molestiae praesentium similique expedita illo minus. Iste debitis non a explicabo corrupti voluptatibus officiis, recusandae ipsum ipsa deserunt eos dolores odit quasi. Assumenda illum quos cupiditate ipsa quo. Magnam voluptate illum quos minima adipisci culpa exercitationem cumque sit accusantium, et, veritatis aliquam excepturi possimus impedit. Rem ex soluta minima asperiores vel vero numquam sit voluptatum porro consequatur nulla ipsum rerum consequuntur suscipit error iure harum quae enim nesciunt eum totam reprehenderit, eaque voluptates! In totam fugit ipsam beatae eos blanditiis reiciendis alias animi voluptate sint! Est ducimus sint amet, eaque quos veniam, impedit dolorem sequi vero dolores quasi perspiciatis corrupti aliquid, fuga modi? Itaque corporis voluptas nisi maiores facere accusantium, magni quasi asperiores. Vero asperiores, tenetur reiciendis commodi odit omnis maxime modi nemo hic eos eaque sequi, maiores sunt iusto at debitis! Consequuntur ipsum voluptate unde minima doloremque reiciendis maiores ipsa commodi incidunt velit eveniet itaque nesciunt ea exercitationem culpa provident cum tenetur placeat, totam est cumque ipsam. Tempore ea quis voluptatibus consectetur optio. Omnis, culpa quam?</p>
                    
                    
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
                                <div class="modal-body text-center p-4">
                                  <p class="fw-bold text-secondary">Are You sure to Delete this Response </p>
                                </div>
                                <div class="modal-foote d-flex">
                                 <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover" data-bs-dismiss="modal">No</button></a> 
                                 <a href="#" class="text-decoration-none col-6"><button type="button" class="btn border form-control btnhover">Yes</button></a> 
                                
                                </div>
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

                                <input type="text" class="form-control py-3" placeholder="Search By Topic">

                              </div>
                              <!-- end of col  -->

                              <div class="col-12 col-md-3 my-2">

                                <input type="date" class="form-control py-3" placeholder="Search By Date">

                              </div>
                              <!-- end of col  -->

                              <div class="col-12 col-md-3 my-2">

                            <button class="bg_danger btnhover2 px-5 rounded-pill py-3 text-light" type="button">Search</button>

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

                          <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">
                            
                      
              
                              <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/zgM0F6UmC70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
                              <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">Lorem, ipsum dolor.</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0"><i class="fas fa-trash-alt"></i></button></p>
                         
              
              
                          </div>
                          <!-- end of col  -->
                      
                          <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">
                            
                      
              
                            <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/zgM0F6UmC70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
                            <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">Lorem, ipsum dolor.</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0"><i class="fas fa-trash-alt"></i></button></p>
                       
            
            
                        </div>
                        <!-- end of col  -->
                      
                        <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">
                            
                      
              
                          <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/zgM0F6UmC70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
                          <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">Lorem, ipsum dolor.</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0"><i class="fas fa-trash-alt"></i></button></p>
                     
          
          
                      </div>
                      <!-- end of col  -->
                      
                      <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">
                            
                      
              
                        <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/zgM0F6UmC70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
                        <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">Lorem, ipsum dolor.</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0"><i class="fas fa-trash-alt"></i></button></p>
                   
        
        
                    </div>
                    <!-- end of col  -->
                      
                    <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">
                            
                      
              
                      <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/zgM0F6UmC70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
                      <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">Lorem, ipsum dolor.</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0"><i class="fas fa-trash-alt"></i></button></p>
                 
      
      
                  </div>
                  <!-- end of col  -->
                      
                  <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">
                            
                      
              
                    <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/zgM0F6UmC70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
                    <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">Lorem, ipsum dolor.</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0"><i class="fas fa-trash-alt"></i></button></p>
               
    
    
                </div>
                <!-- end of col  -->
                <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">
                            
                      
              
                  <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/zgM0F6UmC70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
                  <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">Lorem, ipsum dolor.</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0"><i class="fas fa-trash-alt"></i></button></p>
             
  
  
              </div>
              <!-- end of col  -->
              <div class="col-12 col-md-4 col-lg-3 mt-5 mb-3 my-md-4" style="height: 350px;">
                            
                      
              
                <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/zgM0F6UmC70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p class="bg-light py-2 ps-2 danger"> <span class="fw-bold me-auto">Lorem, ipsum dolor.</span> <button class="px-4 py-2 text-danger ms-auto fs-5 bg-transparent border-0"><i class="fas fa-trash-alt"></i></button></p>
           


            </div>
            <!-- end of col  -->
                      
              
                      </div>
                      <!-- end of row  -->
              
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
                                        <form action="{{url('hello')}}" method="post">
                                             @csrf
                                        <div class="col-12 col-md-8 col-lg-6 mx-auto mt-5 mb-4">

                                          <input type="text" class="ps-md-4 form-control border border-dark border py-3" placeholder="Youtube URL
                                          " name="video" id="" style="border-radius: 15px;">

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
                            
                                                <div class="col-12 col-md-6 my-3 bignews1" >
                            
                                                    <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                            
                                       
                                                   <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3">Lorem ipsum dolor sit.</p>
                            
                                                   <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>
                            
                                                   <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 35%;">VIEW MORE</a>
                            
                                                 

                                                   <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 10%;"><i class="fas fa-edit text-light"></i></a>

                                                   <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 30%;"><i class="fas fa-eye text-light"></i></a>
                                                  

                                                   <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 50%;"><i class="fas fa-trash-alt text-light"></i></a>
                            
                                                </div>
                                                <!-- overlay div  -->
                            
                                                </div>
                                                <!-- end of col card -->
                                          
                                                <div class="col-12 col-md-6 my-3 bignews1" >
                            
                                                  <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                          
                                     
                                                 <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3">Lorem ipsum dolor sit.</p>
                          
                                                 <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>
                          
                                                 <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 35%;">VIEW MORE</a>
                          
                                               

                                                 <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 10%;"><i class="fas fa-edit text-light"></i></a>

                                                 <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 30%;"><i class="fas fa-eye text-light"></i></a>
                                                

                                                 <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="right: 3%; top: 50%;"><i class="fas fa-trash-alt text-light"></i></a>
                          
                                              </div>
                                              <!-- overlay div  -->
                          
                                              </div>
                                              <!-- end of col card -->
                                          
                                               
                            
                                                <div class="col-12 col-md-4 my-3" >
                            
                                                    <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                            
                                                    <small class="position-absolute bgcolor text-light p-2 border-light border end-0" style="border-bottom-left-radius: 50%;">Latest</small>
                                                   <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>
                            
                                                   <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>
                          

                                                   <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 30%;">VIEW MORE</a>
                          
                                               

                                                   <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-2 py-1 rounded-pill" style="right: 3%; top: 30%;"><i class="fas fa-edit text-light"></i></a>
  
                                                   <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 50%;"><i class="fas fa-eye text-light"></i></a>
                                                  
  
                                                   <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 70%;"><i class="fas fa-trash-alt text-light"></i></a>
                            
                            
                                                </div>
                                                <!-- overlay div  -->
                            
                                                </div>
                                                <!-- end of col card -->
                                          
                                                <div class="col-12 col-md-4 my-3" >
                            
                                                  <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                          
                                                  <small class="position-absolute bgcolor text-light p-2 border-light border end-0" style="border-bottom-left-radius: 50%;">Latest</small>
                                                 <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>
                          
                                                 <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>
                        

                                                 <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 30%;">VIEW MORE</a>
                        
                                             

                                                 <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-2 py-1 rounded-pill" style="right: 3%; top: 30%;"><i class="fas fa-edit text-light"></i></a>

                                                 <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 50%;"><i class="fas fa-eye text-light"></i></a>
                                                

                                                 <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 70%;"><i class="fas fa-trash-alt text-light"></i></a>
                          
                          
                                              </div>
                                              <!-- overlay div  -->
                          
                                              </div>
                                              <!-- end of col card -->
                                          
                                              <div class="col-12 col-md-4 my-3" >
                            
                                                <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                        
                                                <small class="position-absolute bgcolor text-light p-2 border-light border end-0" style="border-bottom-left-radius: 50%;">Latest</small>
                                               <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>
                        
                                               <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>
                      

                                               <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 30%;">VIEW MORE</a>
                      
                                           

                                               <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-2 py-1 rounded-pill" style="right: 3%; top: 30%;"><i class="fas fa-edit text-light"></i></a>

                                               <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 50%;"><i class="fas fa-eye text-light"></i></a>
                                              

                                               <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 70%;"><i class="fas fa-trash-alt text-light"></i></a>
                        
                        
                                            </div>
                                            <!-- overlay div  -->
                        
                                            </div>
                                            <!-- end of col card -->
                                          
                                            <div class="col-12 col-md-4 my-3" >
                            
                                              <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                      
                                              <small class="position-absolute bgcolor text-light p-2 border-light border end-0" style="border-bottom-left-radius: 50%;">Latest</small>
                                             <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>
                      
                                             <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>
                    

                                             <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 30%;">VIEW MORE</a>
                    
                                         

                                             <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-2 py-1 rounded-pill" style="right: 3%; top: 30%;"><i class="fas fa-edit text-light"></i></a>

                                             <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 50%;"><i class="fas fa-eye text-light"></i></a>
                                            

                                             <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 70%;"><i class="fas fa-trash-alt text-light"></i></a>
                      
                      
                                          </div>
                                          <!-- overlay div  -->
                      
                                          </div>
                                          <!-- end of col card -->
                                          
                                          <div class="col-12 col-md-4 my-3" >
                            
                                            <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                    
                                            <small class="position-absolute bgcolor text-light p-2 border-light border end-0" style="border-bottom-left-radius: 50%;">Latest</small>
                                           <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>
                    
                                           <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>
                  

                                           <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 30%;">VIEW MORE</a>
                  
                                       

                                           <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-2 py-1 rounded-pill" style="right: 3%; top: 30%;"><i class="fas fa-edit text-light"></i></a>

                                           <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 50%;"><i class="fas fa-eye text-light"></i></a>
                                          

                                           <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 70%;"><i class="fas fa-trash-alt text-light"></i></a>
                    
                    
                                        </div>
                                        <!-- overlay div  -->
                    
                                        </div>
                                        <!-- end of col card -->
                                          
                                        <div class="col-12 col-md-4 my-3" >
                            
                                          <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                  
                                          <small class="position-absolute bgcolor text-light p-2 border-light border end-0" style="border-bottom-left-radius: 50%;">Latest</small>
                                         <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start ps-2 border-3">Lorem ipsum dolor sit.</p>
                  
                                         <small class="position-absolute text-light mt-3 fw-bold">Date: <span>20/01/2022</span> </small>
                

                                         <a data-bs-toggle="offcanvas" href="#readmore" role="button" aria-controls="readmore" class="position-absolute text-decoration-none text-light viewbtn border border-light px-3 py-2 rounded-pill" style="top: 40%; left: 30%;">VIEW MORE</a>
                
                                     

                                         <a data-bs-toggle="modal" data-bs-target="#editnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light px-2 py-1 rounded-pill" style="right: 3%; top: 30%;"><i class="fas fa-edit text-light"></i></a>

                                         <a data-bs-toggle="modal" data-bs-target="#viewnews" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 50%;"><i class="fas fa-eye text-light"></i></a>
                                        

                                         <a data-bs-toggle="modal" data-bs-target="#exampleModal9" type="button" class="position-absolute text-decoration-none text-light viewbtn border border-light  px-2 py-1 rounded-pill" style="right: 3%; top: 70%;"><i class="fas fa-trash-alt text-light"></i></a>
                  
                  
                                      </div>
                                      <!-- overlay div  -->
                  
                                      </div>
                                      <!-- end of col card -->
                                            
                                          
                            
                            
                                            </div>
                                            <!-- end of row second  -->
                            
                            
                            
                            
                                        </div>
                                        <!-- end of col-8 main  -->
                            
                                        <div class="col-12 col-xl-3 my-3 my-lg-0  border-start border_color border-2">
                            
                            
                                            <h4 class="mb-4 border-start border-5 border_color ps-3">Latest News</h4>
                            
                                            <div class="row p-lg-2">
                            
                            
                                                
                            
                                                <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                            
                                                    <a href="#" class="text-decoration-none">
                                                    <div class="d-flex cardobject">
                                                        <div class="flex-shrink-0">
                                                          <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                        <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                            
                                                        
                                                        <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                        </div>
                                                      </div>
                                                    </a>
                            
                            
                                                </div>
                                                <!-- end of inner col  -->
                            
                                                
                                          
                            
                                                <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                            
                                                  <a href="#" class="text-decoration-none">
                                                        <div class="d-flex cardobject">
                                                            <div class="flex-shrink-0">
                                                              <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                            <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                
                                                            
                                                            <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                            </div>
                                                          </div>
                                                        </a>
                            
                            
                                                </div>
                                                <!-- end of inner col  -->
                            
                            
                                                   
                            
                                                <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                            
                                                  <a href="#" class="text-decoration-none">
                                                        <div class="d-flex cardobject">
                                                            <div class="flex-shrink-0">
                                                              <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                            <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                
                                                            
                                                            <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                            </div>
                                                          </div>
                                                        </a>
                            
                            
                                                </div>
                                                <!-- end of inner col  -->
                            
                                                   
                            
                                                <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                            
                                                  <a href="#" class="text-decoration-none">
                                                        <div class="d-flex cardobject">
                                                            <div class="flex-shrink-0">
                                                              <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                            <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                
                                                            
                                                            <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                            </div>
                                                          </div>
                                                        </a>
                            
                            
                                                </div>
                                                <!-- end of inner col  -->
                            
                                                   
                            
                                                <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                            
                                                  <a href="#" class="text-decoration-none">
                                                        <div class="d-flex cardobject">
                                                            <div class="flex-shrink-0">
                                                              <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                            <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                
                                                            
                                                            <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                            </div>
                                                          </div>
                                                        </a>
                            
                            
                                                </div>
                                                <!-- end of inner col  -->
                            
                                                
                            
                            
                                            </div>
                                            <!-- inner row end  -->
                            
                            
                                        </div>
                                        <!-- end of col-3 main -->
                            
                            
                            
                                    </div>
                                    <!-- end of row main  -->
                            
                              
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
                                          
                                                                  <div class="cardnews position-relative overlay align-items-end overflow-hidden ps-2" style="background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover; border-radius: 10px;">
                                          
                                                     
                                                                 <p class=" mt-auto fw-bold text-light position-absolute bottom-0 border-start fs-4 ps-2 border-3">Lorem ipsum dolor sit.</p>
                                          
                                                                 <small class="position-absolute text-light mt-3 end-0 me-3 fw-bold">Date: <span>20/01/2022</span> </small>
                                          
                                                            
                                          
                                                              </div>
                                                              <!-- overlay div  -->
                                          
                                                              <h4 class="tcolor mt-4 fw-bold">Heading 1</h4>
                                                              
                                                              <p class="text-secondary mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit <br> repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores <br> debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur doloresLorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nemo qui repellendus facere quasi architecto, cum ab neque. Asperiores debitis ad sint fugit repellat quae nulla aperiam deleniti tenetur dolores</p>
                                          
                                                              </div>
                                                              <!-- end of col card -->
                                                        
                                                            
                                                          
                                                        
                                          
                                          
                                                          </div>
                                                          <!-- end of row second  -->
                                          
                                          
                                          
                                          
                                                      </div>
                                                      <!-- end of col-8 main  -->
                                          
                                                      <div class="col-12 col-lg-3 my-3 my-lg-0  border-start border_color border-2">
                                          
                                          
                                                          <h4 class="mb-4 border-start border-5 border_color ps-3">Latest News</h4>
                                          
                                                          <div class="row p-lg-2">
                                          
                                            
                                          
                                                              <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                                          
                                                                <a href="#" class="text-decoration-none">
                                                                  <div class="d-flex cardobject">
                                                                      <div class="flex-shrink-0">
                                                                        <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                                      </div>
                                                                      <div class="flex-grow-1 ms-2">
                                                                      <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                          
                                                                      
                                                                      <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                                      </div>
                                                                    </div>
                                                                  </a>
                                          
                                          
                                                              </div>
                                                              <!-- end of inner col  -->
                                          
                                                              
                                                        
                                          
                                                              <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                                          
                                                                <a href="#" class="text-decoration-none">
                                                                      <div class="d-flex cardobject">
                                                                          <div class="flex-shrink-0">
                                                                            <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                                          </div>
                                                                          <div class="flex-grow-1 ms-2">
                                                                          <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                              
                                                                          
                                                                          <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                                          </div>
                                                                        </div>
                                                                      </a>
                                          
                                          
                                                              </div>
                                                              <!-- end of inner col  -->
                                          
                                          
                                                                 
                                          
                                                              <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                                          
                                                                  <a href="#" class="text-decoration-none">
                                                                      <div class="d-flex cardobject">
                                                                          <div class="flex-shrink-0">
                                                                            <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                                          </div>
                                                                          <div class="flex-grow-1 ms-2">
                                                                          <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                              
                                                                          
                                                                          <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                                          </div>
                                                                        </div>
                                                                      </a>
                                          
                                          
                                                              </div>
                                                              <!-- end of inner col  -->
                                          
                                                                 
                                          
                                                              <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                                          
                                                                <a href="#" class="text-decoration-none">
                                                                      <div class="d-flex cardobject">
                                                                          <div class="flex-shrink-0">
                                                                            <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                                          </div>
                                                                          <div class="flex-grow-1 ms-2">
                                                                          <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                              
                                                                          
                                                                          <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                                          </div>
                                                                        </div>
                                                                      </a>
                                          
                                          
                                                              </div>
                                                              <!-- end of inner col  -->
                                          
                                                                 
                                          
                                                              <div class="col-12 border-bottom border-2 border_color pb-3 my-3">
                                          
                                                                <a href="#" class="text-decoration-none">
                                                                      <div class="d-flex cardobject">
                                                                          <div class="flex-shrink-0">
                                                                            <img src="https://images.unsplash.com/photo-1636538191394-7c360a55fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="image not found" class="objectnews_img">
                                                                          </div>
                                                                          <div class="flex-grow-1 ms-2">
                                                                          <small class="text-secondary objecttext d-block"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia!</small>
                                              
                                                                          
                                                                          <small style="font-size: 12px;" class="tcolor fw-bold d-block float-end">Date : 23/05/2022</small>
                                                                          </div>
                                                                        </div>
                                                                      </a>
                                          
                                          
                                                              </div>
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
                                                  
                                                  



                                                  <div class="modal fade" id="addnew" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editnews" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editnews">View News</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center p-md-4">
                                 
                              <div class="row my-4">

                                <div class="col-12 col-md-8 mx-auto">

                                  <label for="textareas" class="fs-5 text-dark fw-bold">Topic</label>
                                  <input type="text" name="" placeholder="Enter Topic Name" class="py-3 form-control border border-secondary"  id="textareas">

                                </div>
                                <!-- end of col  -->

                                <div class="col-12 mx-auto col-md-10 mt-4 col-lg-7 p-md-4 position-relative" style="height: 250px; border-radius: 20px; background: url(https://images.unsplash.com/photo-1638162448566-f0fdef80f392?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center no-repeat; background-size: cover;">
                                    

                                    
                                  <button class="px-5 border border-light py-2 btnhover2 fw-bold bg_danger text-light btnhover position-absolute bottom-0 end-0" style="border-top-left-radius:20px;">Change</button>

                                
  
                                </div>
                                <!-- end of col  -->

                                <div class="col-12 col-md-10 mt-4 mx-auto">


                                  <textarea name="" placeholder="Enter Text" class="form-control border border-dark" style="border-radius: 15px;" id="" rows="6"></textarea>

                                </div>
                                <!-- end of col  -->

                                
                                <div class="col-12 mx-auto col-md-6 col-lg-3 mt-3">


                                  <button class="form-control bg_danger rounded-pill text-light btnhover2">Save & Update</button>

                                </div>
                                <!-- end of col  -->

                              </div>
                             <!-- end of row  -->
  
  
                                </div>
                              </div>
                            </div>
                          </div>
                                    
       @endsection
