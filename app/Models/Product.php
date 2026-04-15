<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $guarded = [];

    public function orderdetail ():HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }
}
