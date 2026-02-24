<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    protected $guarded = [];


    // دسته والد
    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

// فرزندان دسته
    public function children()
    {
        return $this->hasMany(Category::class, 'category_id');
    }


}
