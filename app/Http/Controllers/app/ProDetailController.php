<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\app\ProDetail;
use Illuminate\Http\Request;

class ProDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $psale = 0;
        $padd = 0;
        $add = ProDetail::select('add')->get();
        $sale = ProDetail::select('sale')->get();

        foreach ($sale as $s)
            $psale += $s->get();

        foreach ($add as $a)
            $padd += $a->get();

        $pqty = $padd - $psale;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}