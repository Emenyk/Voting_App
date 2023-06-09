<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'voter_id',
        'election_id'
    ];

    public function election(): belongsTo
    {
        return $this->belongsTo(Election::class);
    }

    public function voter(): belongsTo
    {
        return $this->belongsTo(Voter::class);
    }
}
