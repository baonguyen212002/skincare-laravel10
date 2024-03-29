<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    use HasFactory;
    protected $table = 'product_brand';
    protected $fillable = ['name', 'highlight', 'visible'];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_brand');
    }

}
