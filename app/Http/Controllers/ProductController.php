<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function addProduct(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5120'],
        ]);

        $requestData = $request->except(['_token', '_method']);
        $requestData['user_id'] = Auth::user()->id;

        if ($request->hasFile('image')) {
            $imageName = 'lv_' . rand() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/'), $imageName);
            $requestData['image'] = $imageName;
        }

        Product::create($requestData);
        return redirect()->route('dashboard')->with('success', 'Product added successfully');
    }
}
