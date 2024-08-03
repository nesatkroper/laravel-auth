<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\app\Product;
use App\Models\app\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $pro = DB::select('SELECT p.id, p.name, p.photo, p.category, p.price, c.name AS cate, (SUM(pd.add) - SUM(pd.sale)) AS qty FROM products p LEFT JOIN categories c ON p.category = c.id LEFT JOIN pro_details pd ON p.id = pd.pro_id WHERE p.isDelete < 1 GROUP BY p.id, p.name, p.photo, p.category, p.price, c.name');

        return view('page/product/index', [
            'pro' => $pro,
        ]);
    }

    public function create()
    {
        $cate = Category::all();
        return view('page/product/create', [
            'cate' => $cate,
        ]);
    }

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

        return redirect()->route('pro.index');
        // return view('page/product/index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
        $pro = Product::find($id);

        return view('page/product/edit');
    }

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

        return redirect()->route('pro.index');
    }

    public function softDelete(Request $request, string $id)
    {
        $pro = Product::find($id);
        $pro = DB::update(
            'UPDATE products p SET p.isDelete = ? WHERE p.id = ?',
            [
                1,
                $id
            ]
        );

        return redirect()->route('pro.index');
    }

    public function addProduct(Request $req, string $id)
    {
        $pro = Product::find($id);
        $pro = DB::insert('INSERT INTO pro_details p (p.pro_id, p.add, p.add_price) VALUES (?, ?, ?)', [
            $id,
            $req->add,
            $req->aprice,
        ]);

        return redirect()->route('pro.index');
    }

    public function destroy(string $id)
    {
        //
        $pro = Product::find($id);
        $pro->delete();
        return redirect()->route('pro.index');
    }
}
