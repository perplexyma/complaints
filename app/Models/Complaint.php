<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Category;
use App\Models\Vote;

class Complaint extends Model
{
    //
    protected $fillable = [
        'subject',
        'category_id', // foreign to categories
        'student_id', // foreign to students
        'content',
        'image',
        'feedback',
        'status'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function vote(): HasMany
    {
        return $this->hasMany(Vote::class);
    }
}
