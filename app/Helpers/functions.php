<?php

use App\Models\User;
use App\Models\Ads;
use App\Models\AdsAdress;
use App\Models\AppointmentBook;

function getname($id){
    $name =User::where('id',$id)->first();
    return $name->first_name.' '.$name->last_name;
}

function getadsid($id){
    $id=Ads::where('ads_address_id',$id)->first();
  
    return $id->id;
    
}

function getadsaddress($id){
    $address=AdsAddress::where('id',$id)->first();
    return $address;

}

function getappoint($id){
    $appointment=AppointmentBook::where('appointment_address_id',$id)->first();
    return $appointment->id;
}
?>