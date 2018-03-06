<?php

namespace App\Http\Controllers;

class BillSplitterController extends Controller
{
    public function index()
    {
        return 'You are viewing the page that will have the Bill Splittter form.';
    }

    public function splitBill()
    {
        return 'This is where the processing for the bill will happen in logic code later on, split bill and redirect user';
    }
}
