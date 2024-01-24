<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collections';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'pdf',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
