<?php

namespace App\Models;

use App\Models\Step;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    /**
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
        'check',
        'urgent',
        'notes',
        'steps_id'
    ];

    public function step()
    {
        return $this->belongsTo(Step::class);
    }
}
