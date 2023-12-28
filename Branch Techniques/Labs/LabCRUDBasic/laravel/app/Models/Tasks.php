<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
class Tasks extends Model
{
    use HasFactory;

    public function Project()
    {
        return $this->belongsTo(Projects::class);
    }

    protected $fillable = [
        'name',
        'description',
        'project_id'
    ];
}
