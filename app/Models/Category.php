<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Complaint;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'description'
    ];

    public function complaint(): HasMany
    {
        return $this->hasMany(Complaint::class);
    }
}
