<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'year_in'
    ];

    public function Cours()
    {
        return $this->hasOne(Cours::class);
    }
}
