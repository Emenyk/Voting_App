<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Election extends Model
{
    use HasFactory;



    protected $fillables = [    'position', 'date', 'candidate'    ];

    public function voters(): HasMany
    {
        return $this->hasMany(User::class, 'election_date', 'date');

        // return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
    }

    protected function votes(): HasManyThrough
    {
        return $this->hasManyThrough(Vote::class, User::class);
    }



}
