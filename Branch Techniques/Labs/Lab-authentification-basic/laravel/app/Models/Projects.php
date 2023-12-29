<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'project_id',
 
    ];
    public function Tasks()
    {
        return $this->HasMany(Tasks::class);
    }
}
