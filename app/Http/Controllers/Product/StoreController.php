<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        var_dump($data);
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $typesIds = $data['types'];
        unset($data['types']);

        $product = Product::firstOrCreate([
            'title' => $data['title'],
        ], $data);

        foreach ($typesIds as $typesId) {
            ProductType::firstOrCreate([
                'product_id' => $product->id,
                'type_id' => $typesId
            ]);
        }

        return redirect()->route('product.index');
    }
}
