<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParcController extends Controller
{
    function index()
    {
        return inertia('Parcs/IndexParcs');
    }
    function create()
    {
        return inertia('Parcs/CreateParc');
    }
}