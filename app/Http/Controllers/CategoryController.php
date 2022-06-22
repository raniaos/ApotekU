<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('only-admin');
        $category = Category::all();
        return view("category.index", compact("category"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('only-admin');
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('only-admin');
        $data = new Category();
        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->save();

        return redirect('categories')->with('status','Category has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $this->authorize('only-admin');
        $res = $category;
        return view("category.edit", compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->authorize('only-admin');
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();

        return redirect('categories')->with('status', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $this->authorize('only-admin');
        try {
            $category->delete();

            return redirect('categories')->with('status', 'Successfully deleted the category');
        } catch(\PDOException $e) {
            $msg = "Failed to delete category. Please make sure to delete other data that connected with this category.";

            return redirect()->route('category.index')->with('error', $msg);
        }
    }
}