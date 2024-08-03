<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\app\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function addCart(string $id)
    {
        $add = Product::find($id);
        $pname = $add->name;
        $pphoto = $add->photo;

        return view('page/sale/index', [
            'pname' => $pname,
            'pphoto' => $pphoto
        ]);
    }

    public function increase(string $id)
    {
        $sale = Product::find($id);
        return view(
            'page/sale/index',
            ['sale' => $sale]
        );
    }

    public function index()
    {
        $sale = DB::select('SELECT p.id, p.name, p.photo, p.price, (SUM(pd.add) - SUM(pd.sale)) AS qty FROM products p LEFT JOIN pro_details pd ON p.id = pd.pro_id WHERE p.isDelete < 1 GROUP BY p.id, p.name, p.photo, p.price');
        return view(
            'page/sale/index',
            ['sale' => $sale]
        );
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
