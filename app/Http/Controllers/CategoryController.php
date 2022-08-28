<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //category form
    public function showcat()
    {
        return view('Category.category');
    }
    //adding a new category
    public function AddCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $c = new Category();
        $c->name = request('name');
        $c->description = request('description');


        if ($c->save()) {
            return  redirect('category/list');
        } else {
            return redirect('/category/form')->with('error', 'Category Not Added');
        }
    }

    //listing all categories
    public function listCategory()
    {
        //getting all categories from the database
        $categories = Category::all();


        //returning the view with the categories
        return view('Category.listCategory')->with('categories', $categories);
    }

    //delete a category
    public function deleteCategory($id)
    {
        $c = Category::find($id);
        $c->delete();
        return redirect('/category/list')->with('msg', 'Category Deleted Successfully');
    }
}
