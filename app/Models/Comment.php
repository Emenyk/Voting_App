<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'voter_id',
        'body'
    ];

    public function voter(): BelongsTo
    {
        return $this->belongsTo(Voter::class);
    }
}
