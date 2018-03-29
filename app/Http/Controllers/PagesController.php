<?php

namespace App\Http\Controllers;

use App\Worker;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $workers = Worker::latest()->get();

        return view('index', compact('workers'));
    }



}
