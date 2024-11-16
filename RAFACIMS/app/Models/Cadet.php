<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cadet extends Model
{
    /**
     * Get the items the cadet has been issued
     */
    public function issued(): HasMany
    {
        return $this->hasMany(Item::class, 'issued_to');
    }
}
