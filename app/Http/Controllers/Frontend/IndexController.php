<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;


class IndexController extends Controller
{
    // Function to show Home Page
    public function index(){
        $categories = Category::orderBy('id','ASC')->get();
        $vouchers = Post::latest()->limit('4')->get();
        return view('frontend.index', compact('categories','vouchers'));
    }

    // Function to show Voucher details
    public function VoucherDetails($id,$slug) {

        // Update read-count of post
        Post::find($id)->increment('read_count');

        $users = User::all();
        $voucher = Post::findOrFail($id);

        return view('frontend.voucher.voucher_details', compact('voucher','users'));
    }
}
