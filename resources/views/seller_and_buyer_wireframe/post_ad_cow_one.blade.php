@extends('layouts.app')

@section('content')
    @include('seller_and_buyer_wireframe.post_ad_cow_one.post_ad_cow_one_page')
@endsection

@section('script')
<script type="text/javascript">
    $(function () {
        $("#Submit").click(function () {
            //Set the Valid Flag to True if one RadioButton from the Group of RadioButtons is checked.
            var isValid = $("input[name=gender]").is(":checked");
            console.log(isValid);
            //Display error message if no RadioButton is checked.
            $("#genderError")[0].style.display = isValid ? "none" : "block";
        });
    });
</script>
@endsection