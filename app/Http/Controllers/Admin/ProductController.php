<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'sku' => 'required|unique:products,sku',
            'is_active' => 'boolean',
            'type' => 'required|in:book,ebook,audiobook,stationery',
            'author' => 'required_if:type,book,ebook,audiobook',
            'publisher' => 'required_if:type,book,ebook,audiobook',
            'isbn' => 'required_if:type,book,ebook|unique:products,isbn',
            'pages' => 'required_if:type,book,ebook|integer|min:1',
            'format' => 'required_if:type,ebook,audiobook'
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $product = Product::create($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create([
                    'image_path' => $path,
                    'is_primary' => $product->images()->count() === 0
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Produto criado com sucesso!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'sku' => 'required|unique:products,sku,'.$product->id,
            'is_active' => 'boolean',
            'type' => 'required|in:book,ebook,audiobook,stationery',
            'author' => 'required_if:type,book,ebook,audiobook',
            'publisher' => 'required_if:type,book,ebook,audiobook',
            'isbn' => 'required_if:type,book,ebook|unique:products,isbn,'.$product->id,
            'pages' => 'required_if:type,book,ebook|integer|min:1',
            'format' => 'required_if:type,ebook,audiobook'
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $product->update($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create([
                    'image_path' => $path,
                    'is_primary' => $product->images()->count() === 0
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Product $product)
    {
        $product->images()->delete();
        $product->delete();
        return redirect()->route('admin.products.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}