<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class categoryPostController extends Controller
{
    //Function to Add Category for Post
    public function attachCategory($post_id, $category_id){

        $post = Post::find($post_id);
        $category = Category::find($category_id);
        $post->categories()->attach($category_id);

        $notification = array (            
            'message' => 'Add thành công!',
            'alert-type' => 'success'
        );
        return back()->with($notification);

    }

    //Function to Remove Category from Post
    public function detachCategory($post_id, $category_id){
        
        $post = Post::find($post_id);
        $category = Category::find($category_id);
        $post->categories()->detach($category_id);
        
        $notification = array (            
            'message' => 'Remove thành công!',
            'alert-type' => 'success'
        );
        return back()->with($notification);

    }
}
