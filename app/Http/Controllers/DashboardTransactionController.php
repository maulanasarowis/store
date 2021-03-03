<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    //dashboard-product-transaction
    public function index()
    {
        return view('pages.dashboard-transactions');
    }
    public function details()
    {
        return view('pages.dashboard-transactions-details');
    }
}
