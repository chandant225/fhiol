<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\ProductInquiry;
use Illuminate\Http\Request;

class ProductInquiryController extends Controller
{
    public function index()
    {
        $productInquiries = ProductInquiry::with('product')->latest()->paginate();

        return view('product-inquiry.index', compact('productInquiries'));
    }

    public function markRead(Request $request)
    {
        ProductInquiry::whereId($request->post('id'))->whereNull('read_at')->update(['read_at' => now()]);
        return response()->json([], 200);
    }
}
