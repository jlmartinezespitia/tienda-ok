<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'nombre' => 'required|unique:categories|max:255',
            'color' => 'required',
        ]);
        $category = Category::create([
            'nombre' => $request -> get('nombre'),
            'slug' => str_slug($request->get('nombre')),
            'descripcion' => $request->get('descripcion'),
            'color' => $request -> get('color')
        ]);
        $message = $category ? 'Categoría agregada correctamente!' : "la categoría no pudo agregarse";
        return redirect()->route('category.index')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->fill($request->all());
        $category->slug = str_slug($request->get('nombre'));
        $updated = $category->save();
        $message = $updated ? 'Categoría actualizada correctamente!' : 'La categoría NO pudo actualizarse!';
        return redirect()->route('category.index')->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $deleted = $category->delete();
        $message = $deleted ? 'Categoría eliminada correctamente' : 'La categoría NO pudo eliminarse';
        return redirect()->route('category.index')->with('message', $message);
    }
}
