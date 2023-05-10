<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'catagory_id'
    ];

    public function catagory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(Catagory::class);
    }


}
