<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function viewListQuestion()
    {
        return view('admin.pages.question.list');
    }
}