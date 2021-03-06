<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'exit_date'
    ];

    public function Students()
    {
        return $this->hasMany(Student::class);
    }

    public function Cours()
    {
        return $this->hasOne(Cours::class);
    }
}
