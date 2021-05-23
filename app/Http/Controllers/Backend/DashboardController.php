<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totals = collect(DB::select("SELECT 
        (select count('*') from products) as productsCount,
        (select count('*') from categories) as categoriesCount,
        (select count('*') from product_inquiries where read_at is null) as productInquiriesCount,
        (select count('*') from posts) as postsCount,
        (select count(*) from post_categories) as postCategoriesCount,
        (select count(*) from pages) as pagesCount,
        (select count(*) from subscribers) as subscribersCount,
        (select count(*) from stores) as storesCount
        "))->first();

        return view('dashboard', [
            'productsCount' => $totals->productsCount,
            'categoriesCount' => $totals->categoriesCount,
            'productInquiriesCount' => $totals->productInquiriesCount, 
            'postsCount' => $totals->postsCount,
            'postCategoriesCount' => $totals->postCategoriesCount,
            'pagesCount' => $totals->pagesCount,
            'subscribersCount' => $totals->subscribersCount,
            'storesCount' => $totals->storesCount,
        ]);
    }
}
