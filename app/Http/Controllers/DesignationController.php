<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'designation_type' => 'required|max:255',
            'status' => 'required|not_in:0',
        ],
        [
            'designation_type.required' => 'Designation is required !!',
            'designation_type.max' => 'Designation should not be greater than 255 characters.',
            'status.required' => 'Status is required !!'
        ]);

        DB::table('designation')->insert($validatedData);
        return redirect('/designation');
    }
}
