<?php

namespace App\Http\Controllers;

use App\Models\Typeparc;
use Illuminate\Http\Request;

class TypeparcController extends Controller
{
    function index()
    {
        $typeparcs = Typeparc::orderby('name', 'ASC')->paginate(2);
        return inertia('Typeparcs/IndexTypeparcs', ['typeparcs' => $typeparcs]);
    }
    function create()
    {
        return inertia('Typeparcs/CreateTypeparc');
    }
}