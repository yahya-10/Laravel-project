<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    function show() 
    {
        $items = Item::all();
        return view('Client.menu', ['items' => $items]);
    }
}
