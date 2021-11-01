<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;

class PostController extends Controller
{
    
    // Function to Show List of Post
    public function ListPost(){
        $posts = Post::latest()->get();
        return view('backend.post.post_list', compact('posts'));
    }

    
    // Function to Open Page for Adding New Post
    public function AddPost() {
      
        $post = Post::latest()->get();
        return view('backend.post.post_add', compact('post'));

    }

    
    // Function to Store New Post to Database
    public function PostStore(Request $request){
        $request->validate([
            'post_title' => 'required',
            'post_image' => 'required',
            'post_content' => 'required'
        ],[
            'post_title.required' => 'Vui lòng nhập tiêu đề',
            'post_image.required' => 'Vui lòng nhập hình ảnh',
            'post_content.required' => 'Nhập nội dung bài viết',
        ]);

        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(780,433)->save('upload/post/'.$name_gen);
        $save_url = 'upload/post/'.$name_gen;

        Post::insert([
            'post_title' => $request->post_title,        
            'post_slug' => Str::slug($request->post_title, '-'), 
            'post_content' => $request->post_content,
            'post_image' => $save_url,
            'voucher_enabled' => $request->voucher_enabled,
            'voucher_qty' => $request->voucher_qty,
            'created_at' => Carbon::now(),
        ]);

        $notification = array (
            //Sử dụng toastr.css và toastr.min.js được đính kèm trong file "admin_master.blade.php"
            'message' => 'Tạo bài viết thành công',
            'alert-type' => 'success'
        );

        return redirect()->route('list.post')->with($notification); 
    }


    // Function to Open Page for Editing Post
    public function PostEdit($id) {
        $post = Post::findOrFail($id);
        return view('backend.post.post_edit', compact('post'));
    }

    
    // Function to Update the Post
    public function PostUpdate(Request $request) {

        $post_id = $request->id;
        $old_img = $request->old_post_image;

        if ($request->file('post_image')) {
            unlink($old_img);
            $image = $request->file('post_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(780,433)->save('upload/post/'.$name_gen);
            $save_url = 'upload/post/'.$name_gen;

            Post::findOrFail($post_id)->update([
                'post_title' => $request->post_title,        
                'post_slug' => Str::slug($request->post_title, '-'), 
                'post_content' => $request->post_content,
                'post_image' => $save_url,
                'voucher_enabled' => $request->voucher_enabled,
                'voucher_qty' => $request->voucher_qty,
            ]);
            
            $notification = array (
                'message' => 'Cập nhật bài viết thành công',
                'alert-type' => 'info'
            );

            return redirect()->route('list.post')->with($notification);

        } else {

            Post::findOrFail($post_id)->update([
                'post_title' => $request->post_title,        
                'post_slug' => Str::slug($request->post_title, '-'), 
                'post_content' => $request->post_content,
                'voucher_enabled' => $request->voucher_enabled,
                'voucher_qty' => $request->voucher_qty,
            ]);
            
            $notification = array (
                'message' => 'Cập nhật bài viết thành công',
                'alert-type' => 'info'
            );

            return redirect()->route('list.post')->with($notification);

        } //end else

    } // End method Update

    
    // Function to Delete Post
    public function PostDelete($id) {

        $post = Post::findOrFail($id);
        $img = $post->post_image;
        unlink($img);

        Post::findOrFail($id)->delete();

        $notification = array (          
            'message' => 'Xoá bài viết thành công!',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    } 

}
