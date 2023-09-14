<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quaterly extends Model
{
    use HasFactory;

    protected $fillable = ['average', 'student_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function trimesters(): HasMany
    {
        return $this->hasMany(Trimester::class);
    }
}
