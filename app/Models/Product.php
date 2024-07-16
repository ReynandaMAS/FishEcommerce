<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','user_id','category_id','price','description','slug'
    ];

    protected $hidden = [
        'deleted_at'
    ];

    public function galleries(){
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }
}
