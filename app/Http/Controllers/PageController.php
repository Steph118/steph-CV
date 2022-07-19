<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dmprPage()
    {
        return view("dmprPageWeb");
    }

    public function intogoPage()
    {
        return view("inTOGO");
    }

    public function messageSuccess()
    {
        return view("messageSuccess");
    }
}
