<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vuelos extends Model
{
    use HasFactory;

    public function usuariosTomados(): HasMany
    {
        return $this->hasMany(VuelosTomados::class);
    }
}
