<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lorisleiva\LaravelSearchString\Concerns\SearchString;


class Ingredient extends Model
{
    use HasFactory;
    use SearchString;

    public function recipes()
    {
        return $this->belongsToMany('App\Models\Recipe')->withPivot('quantity');
    }
}
