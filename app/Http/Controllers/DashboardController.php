<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user()->id;
        $products = Product::where('user_id', $user)->get();
        return view('dashboard', compact('products'));
    }
}
