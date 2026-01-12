<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class AddRowController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'c_name.*' => 'required|string',
            'p_name.*.*' => 'required|string',
            'p_type.*.*' => 'required|string',
        ]);
        foreach ($request->c_name as $index => $companyName) {
            $company = Company::create(['name' => $companyName]);
            foreach ($request->p_name[$index] as $projectIndex => $projectName) {
                Product::create([
                    'company_id' => $company->id,
                    'name' => $projectName,
                    'type' => $request->p_type[$index][$projectIndex]
                ]);
            }
        }
        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}
