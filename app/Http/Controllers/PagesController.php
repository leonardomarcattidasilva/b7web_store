<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(): string
    {
        return "<h1>Welcome</h1>";
    }
}
