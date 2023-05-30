<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view('pages.product');
    }

    public function PostProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|min6'
        ]);

        $pro = new Product();

        $pro->name = $request->name;
        $pro->save();

        flashy()->success("Produit bien enregistrer!");
        return redirect()->route('index');
    }

    public function list()
    {
        $lists = Product::all();
        return view('pages.list', compact('lists'));
    }

    public function edit_product($id)
    {
        $product = Product::find($id);
        return view('pages.edit_product', compact('product'));
    }

    public function delete_product($id)
    {
        Product::destroy($id);
        // flashy
        flashy()->success("Produit a été supprimée avec succès");
        return redirect()->route('list');
    }
}
