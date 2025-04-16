<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function viewListUser()
    {
        return view('admin.pages.user.list');
    }
}