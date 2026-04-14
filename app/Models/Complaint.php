<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Student;
use App\Models\Category;

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
        'status',
        'score'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
