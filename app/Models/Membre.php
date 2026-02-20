<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membre extends Model
{
    //

    use SoftDeletes;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email'
    ];

    public function cotisations()
    {
        return $this->hasMany(Cotisation::class);
    }
    
}



