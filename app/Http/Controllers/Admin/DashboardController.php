<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    private $adminFolder = 'admin.';
    public function index()
    {
        return view("{$this->adminFolder}index");
    }
}
