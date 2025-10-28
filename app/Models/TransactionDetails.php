<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetails extends Model
{

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
