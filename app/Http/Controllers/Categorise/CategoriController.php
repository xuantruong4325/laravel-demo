<?php

namespace App\Http\Controllers\Categorise;

use App\Http\Controllers\Controller;
use App\Models\Category;
use DateTime;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function ListCategory()
    {
        $category = Category::all();
        
        return view('Categorise/Category/category-list', ['category' => $category]);
    }
    public function AddCategory()
    {
        return view('Categorise/Category/category-add');
    }

    public function AddCategorySave(Request $request){
        
        $ckeck = $request->input('categoryName');
        $existingEmail = Category::where('name_category', $ckeck)->first();

        if ($existingEmail) {
            return redirect()->back()->with('error', true);
        }
        
        $category = Category::create([
            'name_category' =>$request->categoryName,
            'created_at' =>now()->toDateTimeString()
        ]);

        return redirect()->back()->with('redirect', true);
    }

    public function EditCategory($id)
    {
        $category = Category::find($id);
        return view('Categorise/Category/category-edit',compact('category'));
    }

    public function EditCategorySave(Request $request, $id){
        $category = Category::find($id);

        $ckeck = $request->input('categoryName');
        $existingEmail = Category::where('name_category', $ckeck)->where('id', '!=', $id)->first();

        if ($existingEmail) {
            return redirect()->back()->with('error', true);
        }


        $category->name_category = $request->input('categoryName');
        $category->updated_at = now()->toDateTimeString();
        $category->save();

        return redirect()->back()->with('redirect', true);
    }

    public function DeleteCategory(Request $request, $id){
        $category = Category::find($id);

        $category->delete();

        return redirect()->route(route:'listCategory');
    }
}
