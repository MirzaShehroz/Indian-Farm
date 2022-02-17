<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyerAndSellerController extends Controller
{
    // edit-profile page
    public function editProfilePage() {
        return view('seller_and_buyer_wireframe.edit_profile');
    }

    // your-add page
    public function yourAddPage() {
        return view('seller_and_buyer_wireframe.your_ads');
    }

    // post an add page
    public function postAnAdd() {
        return view('seller_and_buyer_wireframe.post_an_ad');
    }

    // your subscription page
    public function yourSubscription() {
        return view('seller_and_buyer_wireframe.your_subscription');
    }
}
