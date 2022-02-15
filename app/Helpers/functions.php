<?php

use App\Models\User;
use App\Models\Ads;
use App\Models\AdsAdress;
use App\Models\AppointmentBook;
use App\Models\TransportBooked;
use App\Models\TransportFrom;
use App\Models\TransportTo;
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

function from_address($id){
    $from_address=TransportFrom::where('id',$id)->first();
    return $from_address;
}
function to_address($id){
    $to_address=TransportTo::where('id',$id)->first();
    return $to_address;
}
?>