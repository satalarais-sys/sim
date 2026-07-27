<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','reference','amount','date','notes'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
