<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCateory extends Model
{
    use HasFactory;

    protected $table = 'sub_cateories';

    protected $fillable = [
        'name','slug','category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
