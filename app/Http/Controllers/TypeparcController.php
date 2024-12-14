<?php

namespace App\Http\Controllers;

use App\Models\Typeparc;
use Illuminate\Http\Request;

class TypeparcController extends Controller
{
    function index()
    {
        $typeparcs = Typeparc::latest()->paginate(5);
        return inertia('Typeparcs/IndexTypeparcs', ['typeparcs' => $typeparcs]);
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:App\Models\Typeparc,name'
        ]);
        Typeparc::create(['name' => $request->name]);
        return redirect()->back();
    }
}