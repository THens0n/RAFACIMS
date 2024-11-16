<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    /**
     * Get the cadet that this item is issued to
     */
    public function issuedTo() : BelongsTo
    {
        return $this->belongsTo(Cadet::class, 'issued_to');    
    }
}
