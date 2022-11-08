<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $types = Type::all();
        return view('type.index', compact('types'));
    }
}
