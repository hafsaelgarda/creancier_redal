<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Facture extends Eloquent
{

    protected $connection = 'mongodb';
     
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'reference_id',
         'statut',
         'user_id',
         'date_generation',
         'date_payment',
         'montant'
    ];


   

}