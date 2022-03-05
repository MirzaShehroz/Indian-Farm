@extends('layouts.app')

@section('content')



<div class="row pad-50 mt-5 pt-5 pt-lg-0 justify-content-around ">

    <h4 class="mt-5 mt-md-0">{{__('eng.searchTrans')}}</h4>

    <form action="{{route('searchResult')}}" class=" d-md-flex gap-3 justify-content-around" method="POST">
        @csrf

        <div class="col-12 col-md-2 my-2 my-md-0">

            <div class="Districdropdown">
                <select id="inputcity" name="city" class="form-select overflow-scroll  ">
                    <option value="">{{__('eng.city')}}</option>
                    <option value="Pune">Pune</option>
                </select>
            </div>


        </div>
        <!-- end of col  -->

        <div class="col-12 col-md-2 my-2 my-md-0">

            <div class="startdropdown">

                <select id="inputState" name="state" class="form-select overflow-scroll ">
                    <option selected disabled>{{__('eng.selectState')}}</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>

                </select>
            </div>


        </div>
        <!-- end of col  -->
        <div class="col-12 col-md-2 my-2 my-md-0">

            <div class="Districdropdown">
                <select id="inputDistrict" name="district" class="form-select overflow-scroll  ">
                    <option value="">{{__('eng.selectDist')}}</option>
                    <option value="Pune">Pune</option>
                    <option value="Ranchi">Ranchi</option>
                    <option value="South Goa">South Goa</option>
                </select>
            </div>

        </div>
        <!-- end of col  -->

        <div class="col-12 col-md-2 my-2 my-md-0">

            <div class="Districdropdown">
                <select id="inputTaluka" name="taluka" class="form-select overflow-scroll  ">
                    <option value="">{{__('eng.selectTaluka')}}</option>
                    <option value="Pune">Pune</option>
                </select>
            </div>
        </div>
        <!-- end of col  -->

        <div class="col-12 col-md-2 my-3 my-md-0">

            <button class="form-control bgcolor text-light btnhover3 border_color2" type="submit">{{__('eng.search')}}</button>

        </div>
        <!-- end of col  -->


    </form>
    <!-- end of form  -->



</div>
<!-- end of row  -->


<div class="row pad-50 mt-5" id="table_detail">

    <div class="col-12 overflow-scroll">

        <table class="table table-bordered overflow-hidden">
            <thead>
                <tr class="" style="background-color: rgb(228, 228, 228);">
                    <th scope="col">{{__('eng.fullName')}}</th>
                    <th scope="col">{{__("eng.address")}}</th>
                    <th scope="col">{{__('eng.district')}}</th>
                    <th scope="col">{{__('eng.taluka')}}</th>
                    <th scope="col">{{__('eng.contactNum')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$item->first_name}}</th>
                    <td>{{$item->address_line1}}</td>
                    <td>{{$item->district}}</td>
                    <td>{{$item->taluka}}</td>
                    <td>{{$item->contact_no}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


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
@endsection