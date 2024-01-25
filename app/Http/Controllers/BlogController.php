<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(3);
        return view('Backend.admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'link' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/blog', $image->hashName());

        //save to DB
        $blog = Blog::create([
            'title' => $request->title,
            'image' => $image->hashName(),
            'link' => $request->link,
        ]);

        if ($blog) {
            return redirect()->route('blog.index')->with('success', 'Data Berhasil Disimpan!');
        } else {
            return redirect()->route('blog.index')->with('error', 'Data Gagal Disimpan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        Storage::disk('local')->delete('public/blog/' . basename($blog->image));
        $blog->delete();

        if ($blog) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}