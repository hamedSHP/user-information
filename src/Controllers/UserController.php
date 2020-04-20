<?php

namespace Parax\User\Information\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('information::index');
    }
}
