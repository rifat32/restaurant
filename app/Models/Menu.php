<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "restaurant_id",
        "icon"
    ];
    public function dishes() {
        return $this->hasMany(Dish::class,'menu_id','id');
    }
}
