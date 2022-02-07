<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    private $frontPage = 'frontend.';
    public function index(){
        return view("{$this->frontPage}index");
    }
}
