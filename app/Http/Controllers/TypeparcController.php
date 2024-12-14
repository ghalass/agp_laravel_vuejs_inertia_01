<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeparcController extends Controller
{
    function index()
    {
        return inertia('Typeparcs/IndexTypeparcs');
    }
    function create()
    {
        return inertia('Typeparcs/CreateTypeparc');
    }
}