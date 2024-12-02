<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tasklist extends Model
{
    protected $fillable = [
        'image', 'title', 'description', 'due_date', 'status_id'
    ];

    public function status(){
    return $this->belongsTo(Status::class, 'status_id');
    }
}
