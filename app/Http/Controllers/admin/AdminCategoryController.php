<?php namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;

class AdminCategoryController extends AdminController
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::get();

        return view('admin.category.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin.category.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCategoryRequest $request)
	{
		$category = new Category();

        $category->name = $request->name;

        $category->save();

        return redirect('admin/categories');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Category $category)
	{
        return view('admin.category.show', compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Category $category)
	{
        return view('admin.category.edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Category $category, CreateCategoryRequest $request)
	{
        $category->name = $request->name;

        $category->save();

        return redirect('admin/category/' . $category->id . '/edit');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
