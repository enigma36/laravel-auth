<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;

    protected $fillable = [
        'catagory_name'
    ];

    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {

        return $this->hasMany(product::class);

    }



}
