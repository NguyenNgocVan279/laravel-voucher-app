<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class GetVoucherController extends Controller
{
    // Function to show List of Voucher
    public function GetAllVoucher(){
        $categories = Category::orderBy('id','ASC')->get();
        $vouchers = Post::latest()->paginate(6);
        return view('frontend.voucher.list_view_voucher', compact('vouchers','categories'));
    }
}
