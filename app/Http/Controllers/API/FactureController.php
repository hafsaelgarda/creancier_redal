<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facture;
use App\Http\Resources\Facture as FactureResource;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $factures = Facture::all();
        return response()->json(FactureResource::collection($factures));
    }


        /**
     * Generate new facture pour un user_id.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generate(string $user_id)
    {
       $facture=new Facture();
       $facture->statut= "not paid";
       $facture->user_id= $user_id;
       $facture->date_generation= date("Y-m-d");
       $facture->date_payment="";
       $facture-> montant=rand(1000, 15000) / 10;
       $facture->reference_id= substr(md5(uniqid(mt_rand(), true)), 0, 8);
       $facture->transaction_id=substr(md5(uniqid(mt_rand(), true)), 0, 8);

        $facture->save();
        return $facture->toJson(JSON_PRETTY_PRINT);
       
    }

     /**
     * Display a listing of facture's by user.
     * @return \Illuminate\Http\Response
     */
       
    public function userfactures(string $user_id){

        $factures = Facture::where('user_id', $user_id)->get();
        return response()->json(FactureResource::collection($factures));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payfacture(Request $request)
    {
        $reference = $request->reference_id;

        $facture=Facture::where('reference_id', $reference)->first();
        $facture->statut = 'paid';
        $facture->date_payment= date("Y-m-d");
        $facture->save();
   
        return response()->json(new FactureResource($facture));
    }

   
}

