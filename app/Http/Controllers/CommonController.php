<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    // privacy policy page
    public function privacyPolicy() {
        return view('common.private_policy');
    }

    // terms and condition page
    public function termAndCondition() {
        return view('common.term_and_condition');
    }
}
