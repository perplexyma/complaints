<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
