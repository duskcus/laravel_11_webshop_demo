<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    protected $fillable = [
        'start',
        'end',
        'comments',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
