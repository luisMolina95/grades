<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimester extends Model
{
    use HasFactory;

    protected $fillable = ['math_grade', 'science_grade', 'history_grade', 'language_grade', 'quaterly_id'];

    public function quaterly()
    {
        return $this->belongsTo(Quaterly::class);
    }
}
