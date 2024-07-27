<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\app\Employee;
use App\Models\app\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cemp = Employee::count();
        $ccus = Customer::count();

        return view('home', [
            'cemp' => $cemp,
            'ccus' => $ccus,
        ]);
    }
}
