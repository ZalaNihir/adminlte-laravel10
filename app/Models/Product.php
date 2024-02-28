<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'sub_category_id',
        'collection_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }

    public function collection()
    {
        return $this->belongsTo(SubCategory::class,'collection_id');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }
}
