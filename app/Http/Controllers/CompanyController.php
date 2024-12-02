<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $company = Companies::paginate(5);  // Get all posts
        $data['menu'] = 'menu-open';
        $data['companymenu'] = 'active';
        $data['company'] =  $company;
        $data['datatable'] =  1;
        return view('company', compact('data'));  // Pass posts to the view

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $data['menu'] = 'menu-open';
        $data['companymenu'] = 'active';
        $data['function'] = 'create';
        
        return view('companyedit', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'logo' => 'dimensions:min_width=100,min_height=100',
          
        ]);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = Str::uuid() . '.'. $file->getClientOriginalExtension();
            $path = $file->storeAs('public/uploads', $filename);
           
         }
     
         $filename =  @$filename ? @$filename : '';
        
       $Compane = Companies::create([
              'name' => $request->name,
              'email' => $request->email,
              'logo' => $filename,
              'website' => $request->website
        ]);

      
        $details = [
            'email' => $request->email,
            'subject' => 'Registration mail',
            'text' => 'You are registered with us.',
        ];
       
        Mail::send([], [], function ($message) use ($details) {
            $message->to($details['email'])
                    ->subject($details['subject'])
                    ->text($details['subject']);
        });

        return redirect()->route('companylist'); 

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
        
        $company = Companies::find($id); 
        $data['menu'] = 'menu-open';
        $data['companymenu'] = 'active';
        $data['function'] = 'edit';
        $data['company'] =  $company;
        return view('companyedit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) : RedirectResponse
    {
        
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'logo' => 'dimensions:min_width=100,min_height=100',
          
        ]);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = Str::uuid() . '.'. $file->getClientOriginalExtension();
            $path = $file->storeAs('public/uploads', $filename);
           
         }
     
         $filename =  @$filename ? @$filename : '';
       
        $Compane = Companies::find($request->id);
        $Compane->name = $request->name;
        $Compane->email = $request->email; 
        $Compane->logo =  $filename; 
        $Compane->website = $request->website; 
        $Compane->save();
        return redirect()->route('companylist'); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $Compane = Companies::where('id',$id)->delete();
        return redirect()->back(); 
    }
}
