<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\app\Product;
use App\Models\app\Category;
use App\Models\app\ProDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pro = Product::leftJoin('categories', 'products.category', '=', 'categories.id')->select('products.*', 'categories.name as cate')->get();

        // $pro=Product::query()->select('products.*', 'categories.name as cate','pro_details.add as add', 'pro_details.sale as sale')->

        $cate = Category::all();



        return view('page/product/index', [
            'pro' => $pro,
            'cate' => $cate,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('page/product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upload the image
        $imgPath = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imgPath = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/product'), $imgPath);
        }

        //create a new product
        Product::create([
            'name' => $request->name,
            'photo' => $imgPath,
            'category' => $request->category,
            'price' => $request->price,
        ]);

        return redirect()->route('pro.index')->with('success', 'Product created successfully');
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
    public function edit(string $id)
    {
        //
        $pro = Product::find($id);
        return view('page/product/edit')->with('pro', $pro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pro = Product::findOrFail($id);

        if ($pro->photo)
            Storage::delete($pro->photo);

        $imgPath = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imgPath = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/product'), $imgPath);
        }

        $pro->update([
            'name' => $request->name,
            'photo' => $imgPath,
            'category' => $request->category,
            'price' => $request->price
        ]);

        return redirect()->route('pro.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pro = Product::find($id);
        $pro->delete();
        return redirect()->route('pro.index')->with('success', 'Product deleted successfully');
    }
}