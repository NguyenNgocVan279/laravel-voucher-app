<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Str; //Use for slug

class CategoryController extends Controller
{
    // Function to Show Category
    public function CategoryView() {
        $categories = Category::with('ancestors')->get()->toFlatTree();
        return view('backend.category.category', compact('categories'));
    }

    // Function to Create and Store Category
    public function CategoryStore(CategoryRequest $request) {

        $category = Category::create([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name, '-'),
            'category_icon' => $request->category_icon,
        ]);

        if($request->parent && $request->parent !== 'none'){
            // Difine the parent for new created category
            $node = Category::find($request->parent);

            $node->appendNode($category);
        }

        $notification = array (
            //Sử dụng toastr.css và toastr.min.js được đính kèm trong file "admin_master.blade.php"
            'message' => 'Tạo danh mục thành công',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    } 

    // Function to Show Category Edit Page
    public function CategoryEdit($id) {
        $categories = Category::with('ancestors')->get();
        $category = Category::findOrFail($id);
        return view('backend.category.category_edit', compact('category','categories'));
    }
    
    // Function to Update Category
    public function CategoryUpdate(CategoryRequest $request, $id) {
        
        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name, '-'),
            'category_icon' => $request->category_icon,
        ]);

        // Have not update parent category yet
        // Will code here - 31/10/2021

        $notification = array (
            'message' => 'Cập nhật danh mục thành công',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);        
    } 
    
    // Function to Delete Category
    public function CategoryDelete($id) {
        
        $node = Category::findOrFail($id);
        $node->delete();

        $notification = array (          
            'message' => 'Xoá danh mục thành công!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
