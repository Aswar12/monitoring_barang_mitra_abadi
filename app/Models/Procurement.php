<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'item_id',
        'order_quantity',
        'total_cost',
        'procurement_date',
    ];


    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}