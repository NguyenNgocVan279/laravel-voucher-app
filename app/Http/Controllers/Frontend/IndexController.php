<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    // Function to show Home Page
    public function index(){
        $categories = Category::orderBy('id','ASC')->get();
        $vouchers = Post::latest()->get();
        return view('frontend.index', compact('categories','vouchers'));
    }

    // Function to show Voucher details
    public function VoucherDetails($id,$slug) {
        
        $voucher = Post::findOrFail($id);

        return view('frontend.voucher.voucher_details', compact('voucher'));
    }
}
