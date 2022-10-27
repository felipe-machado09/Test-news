<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    use HasFactory;

    protected $name = 'post_categories';
    protected $fillable = [
        'post_id',
        'category_id',
    ];
}
