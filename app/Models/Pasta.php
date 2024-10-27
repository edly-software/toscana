<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Pasta extends Model
{
    protected $fillable = ["name", "price"];

    protected $appends = ["formatted_price"];

    public function getFormattedPriceAttribute()
    {
        return Number::currency($this->price, in: "Euro", locale: "de");
    }
}
