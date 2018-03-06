<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function contact() {
        return "Questions? Email us at " . config::get('app.supportemail');
    }
}
