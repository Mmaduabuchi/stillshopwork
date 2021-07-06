<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class siteControllers extends Controller
{
   public function index() {
       return view('index');
   }
   public function log() {
       return view('log');
   }

   public function sign() {
       return view('sign');
   }

   public function admin() {
       return view('admin');
   }
    public function about() {
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
    public function advert() {
        return view('advert');
    }
    public function terms() {
        return view('terms');
    }

}
