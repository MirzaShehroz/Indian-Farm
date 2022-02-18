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

    // post ad cow one
    public function postAdCowOne() {
        return view('seller_and_buyer_wireframe.post_ad_cow_one');
    }

    // post ad cow multiple
    public function postAdCowMultiple() {
        return view('seller_and_buyer_wireframe.post_ad_cow_multiple');
    }

    // post ad buffalo one
    public function postAdBuffaloOne() {
        return view('seller_and_buyer_wireframe.post_ad_buffalo_one');
    }

    // post ad buffalo multiple
    public function postAdBuffaloMultiple() {
        return view('seller_and_buyer_wireframe.post_ad_buffalo_multiple');
    }
}
