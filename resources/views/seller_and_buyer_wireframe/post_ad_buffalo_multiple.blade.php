@extends('layouts.app')

@section('content')
    @include('seller_and_buyer_wireframe.post_ad_buffalo_multiple.post_ad_buffalo_multiple_page')
@endsection
@section('script')
    {{-- upload image1 --}}
<script>
    var loadFile1 = function(event) {
    var image = document.getElementById('output1');
    image.src = URL.createObjectURL(event.target.files[0]);
    $('#upload1').css('display','none');
    $('#output1').removeAttr('hidden');
      };
  </script>
  {{-- upload image2 --}}
  <script>
      var loadFile2 = function(event) {
      var image = document.getElementById('output2');
      image.src = URL.createObjectURL(event.target.files[0]);
      $('#upload2').css('display','none');
      $('#output2').removeAttr('hidden');
        };
    
  </script>
  {{-- upload image3 --}}
  <script>
      var loadFile3 = function(event) {
      var image = document.getElementById('output3');
      image.src = URL.createObjectURL(event.target.files[0]);
      $('#upload3').css('display','none');
      $('#output3').removeAttr('hidden');
        };
    
    </script>
    {{-- upload image4 --}}
    <script>
      var loadFile4 = function(event) {
      var image = document.getElementById('output4');
      image.src = URL.createObjectURL(event.target.files[0]);
      $('#upload4').css('display','none');
      $('#output4').removeAttr('hidden');
        };
    
    </script>
    {{-- upload image5 --}}
    <script>
      var loadFile5 = function(event) {
      var image = document.getElementById('output5');
      image.src = URL.createObjectURL(event.target.files[0]);
      $('#upload5').css('display','none');
      $('#output5').removeAttr('hidden');
        };
    
    </script>
    {{-- upload image6 --}}
    <script>
      var loadFile6 = function(event) {
      var image = document.getElementById('output6');
      image.src = URL.createObjectURL(event.target.files[0]);
      $('#upload6').css('display','none');
      $('#output6').removeAttr('hidden');
        };
    
    </script>
    <script>
      document.getElementById("videoUpload")
    .onchange = function(event) {
      let file = event.target.files[0];
      let blobURL = URL.createObjectURL(file);
      document.querySelector("video").src = blobURL;
      $('#video').removeAttr('hidden');
    }
    </script>
@endsection