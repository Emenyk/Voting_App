<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    protected $fillables = ['voterSSN',  'candidate'];

    public function voter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'voterSSN');
    }



}
