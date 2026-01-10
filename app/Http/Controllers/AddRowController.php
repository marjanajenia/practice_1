<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddRowController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'c_name.*' => 'required|string',
            'p_name.*.*' => 'required|string',
            'p_type.*.*' => 'required|string',
        ]);
        dd($request);
    }
}
