<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $data = Feedback::all();
        return view('admin.feedback.index', compact('data'));
    }
}
