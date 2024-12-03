<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $record = new Order();
        $record->fill($request->all());
        $record->save();
    }
}
