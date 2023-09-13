<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    public function name()
    {
        return view('me');
    }

    public function lastname(Request $request)
    {
        $lastname = $request->get('lastname', 'dos Santos');
        $age = $request->get('age');
        
        return view('lastname', compact('lastname', 'age'));
    }   
}
