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

    // Function to get Voucher by Category
    public function GetCatVoucher(Request $request, $cat_id,$slug){
        
        $breadcat = Category::where('id',$cat_id)->get();
        $categories = Category::orderBy('id','ASC')->get();
        $vouchers = Category::findOrFail($cat_id)->filteredPosts()->paginate(6);

        return view('frontend.voucher.list_cat_voucher', compact('vouchers','breadcat','categories'));
    }

}
