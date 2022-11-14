<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $types = Type::all();
        return view('product.create', compact('types'));
    }
}
