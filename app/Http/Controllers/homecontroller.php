<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function go(Request $request){

          $a =       $request->url;
       
          return redirect('https://webconf.gouv.dj/'.$a);
    }
    public function envoyer(Request $request){
        $nom = $request->nom;
        $email = $request->email;
        $societe = $request->societe;
        $motif = $request->motif;
        DB::table('creation')->insert(
            ['nom' => $nom, 
            'email' =>$email,
            'societe' =>$societe,
            'motif' =>$motif,
          
            ]);
            $last =  DB::select("SELECT * FROM creation ORDER BY id DESC LIMIT 1  ");
           
           



     
        return view('/congratulation', compact('last'));      
    }
}
