<?php

namespace App\Models;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Step extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'steps';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
