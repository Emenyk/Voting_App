<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Voter extends Model
{
    use HasFactory;

    protected $fillable = [
        'poll_unit',
        'unique_Id',
    ];

    public function vote(): hasMany
    {
        return $this->hasMany(Vote::class);
    }

    public function comment():HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
