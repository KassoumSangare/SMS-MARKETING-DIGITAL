<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $table = 'demandes';

    protected $fillable = [
        'societe',
        'adresse',
        'raisonsocial',
        'rccm',
        'ville',
        'activite',

        'username',
        'expediteur',
        'nbcompte',
        'montant',

        'nom',
        'fonction',
        'tel',
        'email',

        'complementaire',
        'captcha',
        'validation',
    ];

    protected $casts = [
        'validation' => 'boolean',
        'nbcompte'   => 'integer',
        'montant'   => 'decimal:2',
    ];
}
