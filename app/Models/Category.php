<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $table = 'buku'; (kalo pke bhs indo)
    public $fillable = ['name','slug'];

    //membuat relasi one to many ke model product
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
