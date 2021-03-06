<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'age',
        'year_in',
        'promo_id'
    ];

    /**
     * Get the user that owns the Cours
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function intervenant()
    {
        return $this->belongsTo(Intervenant::class);
    }

    /**
     * Get the Promo that owns the Cours
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Promo()
    {
        return $this->belongsTo(Promo::class);
    }
}