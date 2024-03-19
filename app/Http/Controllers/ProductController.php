<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(3);
        return view('Backend.admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',
                'description' => 'required',
                'price' => 'required|numeric',
            ],
            [
                'name.required' => 'Entry Title Harus Diisi',
                'image.required' => 'Entry Image Harus Diisi',
                'description.required' => 'Entry Description Harus Diisi',
                'price.required' => 'Entry Price Harus Diisi',
            ]
        );

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/product', $image->hashName());

        //save to DB
        $product = Product::create([
            'name' => $request->name,
            'image' => $image->hashName(),
            'description' => $request->description,
            'price' => $request->price,
        ]);

        if ($product) {
            return redirect()->route('product.index')->with('success', 'Data Berhasil Disimpan!');
        } else {
            return redirect()->route('product.index')->with('error', 'Data Gagal Disimpan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('Backend.admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->validate(
            $request,
            [
                'name' => 'sometimes',
                'image' => 'sometimes|image|mimes:jpeg,jpg,png|max:5000',
                'description' => 'sometimes',
                'price' => 'sometimes|numeric',
            ]
        );

        //check jika image kosong
        if ($request->file('image') == '') {

            //update data tanpa image
            $product = Product::findOrFail($product->id);
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
            ]);
        } else {
            //hapus image lama
            Storage::disk('local')->delete('public/product/' . basename($product->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/product', $image->hashName());

            //update dengan image baru
            $product = Product::findOrFail($product->id);
            $product->update([
                'name' => $request->name,
                'image' => $image->hashName(),
                'description' => $request->description,
                'price' => $request->price,
            ]);
        }

        if ($product) {
            //redirect dengan pesan sukses
            return redirect()->route('product.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('product.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        Storage::disk('local')->delete('public/product/' . basename($product->image));
        $product->delete();

        if ($product) {
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
