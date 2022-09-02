<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerQuiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'user_id',
        'quiz_option_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'quiz_option_id' => 'array',
    ];


}
