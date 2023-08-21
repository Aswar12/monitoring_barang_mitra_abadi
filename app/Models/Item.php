<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function procurements()
    {
        return $this->hasMany(Procurement::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
}
