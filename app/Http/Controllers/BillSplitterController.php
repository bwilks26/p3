<?php

namespace App\Http\Controllers;

class BillSplitterController extends Controller
{
    public function index()
    {
        return view('splitter.index');
    }

    public function splitBill()
    {
        return 'This is where the processing for the bill will happen in logic code later on, split bill and redirect user';
    }
}
