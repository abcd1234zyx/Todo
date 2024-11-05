<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Task extends Model
{
    use HasFactory;

    public $timestamps = FALSE;
    protected $fillable = ['id', 'description'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Clear entries cache upon modifying an entry
    protected static function boot()
    {
        parent::boot();

        static::saving(function() {
            Cache::forget('entries');
        });
    }
}