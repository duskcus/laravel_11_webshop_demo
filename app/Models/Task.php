<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'start',
        'end',
        'description',
        'location',
        'status',
        'priority',
        'estimated_duration',
        'is_recurring',
        'recurrence_pattern',
        'created_by',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user')
            ->withPivot('role', 'completed', 'completed_at')
            ->withTimestamps();
    }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }
}
