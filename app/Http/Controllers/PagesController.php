<?php

namespace LaravelExamples\Http\Controllers;

use Illuminate\Http\Request;

use LaravelExamples\Http\Requests;
use LaravelExamples\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }




}
