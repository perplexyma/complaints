<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Dataabse\Eloquent\Relations\HasMany;
use App\Models\Complaint;

class Student extends Model
{
    //
    protected $fillable = [
        'name',
        'nis',
    ]
    
    public function complaint(): HasMany
    {
        return $this->hasMany(Complaint::class);
    }
}
