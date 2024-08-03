<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\app\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{

    public function index()
    {
        $emp = Employee::all();
        return view('page.employee.index', [
            'emp' => $emp
        ]);
    }

    public function create()
    {
        return view('page.employee.create');
    }

    public function store(Request $request)
    {
        // upload the image
        $imgPath = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imgPath = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/employee'), $imgPath);
        }

        // create a new employee
        Employee::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'dob' => $request->dob,
            'pob' => $request->pob,
            'status' => $request->status,
            'photo' => $imgPath,
        ]);
        return redirect()->route('emp.index')->with('success', 'Employee added successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
        $emp = Employee::find($id);
        return view('page.employee.edit')->with('emp', $emp);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $emp = Employee::findOrFail($id);

        if ($emp->photo)
            Storage::delete($emp->photo);

        $imgPath = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imgPath = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/employee'), $imgPath);
        }

        $emp->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'dob' => $request->dob,
            'pob' => $request->pob,
            'status' => $request->status,
            'photo' => $imgPath,
        ]);
        return redirect()->route('emp.index')->with('success', 'Employee updated successfully');
    }

    public function destroy(string $id)
    {
        //
        $emp = Employee::find($id);
        $emp->delete();
        return redirect()->route('emp.index')->with('success', 'Employee deleted successfully');
    }
}
