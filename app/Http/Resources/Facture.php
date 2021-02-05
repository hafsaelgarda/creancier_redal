<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Facture extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'statut' => $this->statut,
            'user_id'=> $this->user_id,
            'date_generation' => $this->date_generation,
            'date_payment' => $this->date_payment,
            'montant' => $this->montant,
            
        ];
    }
}



