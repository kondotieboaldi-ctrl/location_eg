<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    //
    protected $fillable = [
        'membre_id',
        'montant',
        'date_paiement'
    ];

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }

}
