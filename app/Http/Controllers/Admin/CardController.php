<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    private $layout = 'admin.card.';

    public function cardSelection()
    {
        return view("{$this->layout}cardSelection");
    }
}
