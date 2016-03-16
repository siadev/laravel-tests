<?php

namespace LaravelExamples\Http\Controllers;

use Illuminate\Http\Request;

use LaravelExamples\Http\Requests;
use LaravelExamples\Http\Controllers\Controller;

class CmsDashController extends Controller
{

    /**
     * Add Authentication.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('cms_dashboard.dashboard');
    }
}
