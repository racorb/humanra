<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Bank;

class DashboardController extends Controller
{
    public function index(){
        $banksPayment=Bank::where('status', 0)->get();
        return view('portal.dashboard', compact('banksPayment'));
    }
}
