<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use str;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::latest()->get();

        $title = 'Hapus Data!';
        $text = "Apakah anda yakin?";
        confirmDelete($title, $text);

        return view('backend.category.index', compact('category'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        //validasi
        $validate = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        toast('Data berhasil disimpan', 'success');
        return redirect()->route('category.index');

    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        //validasi
        $validate = $request->validate([
            'name' => 'required',
        ]);

        $category =  Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        toast('Data berhasil diedit', 'success');
        return redirect()->route('category.index');
    }
     
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect()->route('category.index');
    }
}
