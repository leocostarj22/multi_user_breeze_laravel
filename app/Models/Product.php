<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'category_id',
        'stock',
        'sku',
        'is_active',
        'type', // 'book', 'ebook', 'audiobook', 'stationery'
        'author', // para livros
        'publisher', // para livros
        'isbn', // para livros
        'pages', // para livros
        'format' // para ebooks e audiobooks
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}