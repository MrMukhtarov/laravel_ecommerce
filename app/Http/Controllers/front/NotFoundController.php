<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotFoundController extends Controller
{
   public function Index(){
    return view('front/notFound/index');
   }
}
