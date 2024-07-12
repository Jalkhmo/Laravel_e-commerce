<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name']; // Définissez les colonnes que vous souhaitez remplir de manière massive

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
