<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient')->withPivot('quantity');
    }
    public function min_value(){
        $price = 0;
        foreach ($this->ingredients as $ingredient){
          $price += $ingredient->unit_price*$ingredient->pivot->quantity;
        }
        return $price;
    }
}
