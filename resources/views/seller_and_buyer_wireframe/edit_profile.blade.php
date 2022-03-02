@extends('layouts.app')

@section('content')

<style>
 

.loader-bg {
  width: 100vw;
  height: 100vh;
  
  position: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
}
.loader-bg h3 {
  position: fixed;
  color: #aecbf0;
  font-size: 24px;
}
.loader {
  width: 8em;
  height: 8em;
  font-size: 22px;
  box-sizing: border-box;
  border-top: 0.3em solid #0572b2;
  border-radius: 50%;
  position: relative;
  animation: rotating 2s ease-in-out infinite;
  --direction: 1;
}
.loader span {
  position: absolute;
  color: #0572b2;
  width: inherit;
  height: inherit;
  text-align: center;
  line-height: 10em;
  font-family: sans-serif;
  animation: rotating 2s linear infinite;
}
.loader::before,
.loader::after {
  content: '';
  position: absolute;
  width: inherit;
  height: inherit;
  border-radius: 50%;
  box-sizing: border-box;
  top: -0.2em;
}
.loader:::before {
  border-top: 0.3em solid dodgerblue;
  transform: rotate(120deg);
}
.loader::after {
  border-top: 0.3em solid #0572b2;
  transform: rotate(240deg);
}
@keyframes rotating {
  50% {
    transform: rotate(calc(180deg));
  }
  100% {
    transform: rotate(calc(360deg));
  }
}
</style>
    @include('seller_and_buyer_wireframe.edit_profile.edit_profile_page')
@endsection