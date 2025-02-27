<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }


    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }


    public function year()
    {
        return $this->belongsTo(Year::class);
    }



    public function month()
    {
        return $this->belongsTo(Month::class);
    }
}
