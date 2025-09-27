<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(): JsonResponse
    {
        $products = Product::all();

        return response()->json($products, 200);
    }

    public function show(string $id): JsonResponse
    {
        $product = Product::findOrFail($id);

        return response()->json($product, 200);
    }

    public function store(Request $request): JsonResponse
    {
        /*
        Probablemente esta aproximación sea mala y es mejor recibir un
        JSON y validar el request antes de guardar el producto, pero
        lo hice así para poder probar la API en resttesttest.com
        */
        $name = $request->input('name');
        $price = $request->input('price');

        $product = Product::create([
            'name' => $name,
            'price' => $price,
        ]);

        return response()->json($product, 201);
    }
}
