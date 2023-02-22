<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bet extends Model
{
    use HasFactory;

    public function bet()
{
    return $this->belongsTo(Bet::class);
}

public function system()
{
    return $this->belongsTo(BettingSystem::class);
}

}
