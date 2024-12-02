<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Companies;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employee = Employees::with('company')->paginate(5);  // Get all posts
        $data['menu'] = 'menu-open';
        $data['employeemenu'] = 'active';
        $data['employee'] =  $employee;
        $data['datatable'] =  1;
        return view('employee', compact('data'));  // Pass posts to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['menu'] = 'menu-open';
        $data['employeemenu'] = 'active';
        $data['function'] = 'create';
        $data['company'] = Companies::all();
        
        return view('employeeedit', compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company_id' => 'required',
        ]);

       $employee = Employees::create([
              'first_name' => $request->first_name,
              'last_name' => $request->last_name,
              'company_id' => $request->company_id,
              'email' => $request->email, 
              'phone' => $request->phone
        ]);

        return redirect()->route('employeelist'); 
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
        $employee = Employees::find($id); 
        $data['menu'] = 'menu-open';
        $data['employeemenu'] = 'active';
        $data['function'] = 'edit';
        $data['employee'] =  $employee;
        $data['company'] = Companies::all();
        return view('employeeedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company_id' => 'required',
        ]);

        $employee = Employees::find($request->id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name; 
        $employee->company_id =  $request->company_id; 
        $employee->email = $request->email; 
        $employee->phone = $request->phone; 
        $employee->save();
        return redirect()->route('employeelist'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employees::where('id',$id)->delete();
        return redirect()->back(); 
    }
}
