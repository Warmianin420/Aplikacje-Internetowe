<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'team_id',
        'role'
    ];
    public $timestamps = false;
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function team(): BelongsTo {
        return $this->belongsTo(Team::class);
    }
}