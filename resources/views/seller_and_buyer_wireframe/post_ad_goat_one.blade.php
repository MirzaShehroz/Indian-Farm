@extends('layouts.app')

@section('content')
    @include('seller_and_buyer_wireframe.post_ad_goat_one.post_ad_goat_one_page')
@endsection
@section('script')
    <script>
           $(function () {
        $("#btnSubmit").click(function () {
            //Set the Valid Flag to True if one RadioButton from the Group of RadioButtons is checked.
            let isValid = $("input[name=gender]").is(":checked");
            //Display error message if no RadioButton is checked.
            console.log(isValid);
            // $("#spnError").style.display = isValid ? "none" : "block";
            if(isValid==true){
                $("#spnError").removeAt
            }
        });
    });
    </script>
@endsection