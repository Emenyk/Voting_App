<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Election extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'date',
        'candidate'
    ];

    public function votes(): hasMany
    {
        return $this->hasMany(Vote::class);
    }
}
