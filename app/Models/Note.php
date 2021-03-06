<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'student_id',
        'cours_id'
    ];

    /**
     * Get the Student that owns the Note
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the Student that owns the Note
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}
