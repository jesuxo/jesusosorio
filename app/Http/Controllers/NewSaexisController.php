<?php

namespace App\Http\Controllers;

use App\Models\NewSaexis;
use Illuminate\Http\Request;

class NewSaexisController extends Controller
{
    public function newexistencias(Request $request)
    {
        $productos = $request->productos;
        $productos = json_decode($productos);

        try{
            if(isset($productos)){
                foreach ($productos as $prd){

                    if(isset($prd->codprod)){
                        $existen = NewSaexis::where(['codprod'=>  $prd->codprod, 'codubic'=> $prd->codubic, 'fk_sucursal'=> $prd->fk_sucursal])->first();
                        if(isset($existen->id)){
                            $existen->existen = $prd->existen;
                            $existen->save();
                        }else{
                            $existen = new NewSaexis();
                            $existen->existen = $prd->existen;
                            $existen->codprod = $prd->codprod;
                            $existen->codubic = $prd->codubic;
                            $existen->fk_sucursal = $prd->fk_sucursal;
                            $existen->save();
                        }
                    }
                }
            }

            return response()->json(['success' => 'success', 'updated' => 1], 200);
        }catch (\Exception $e){

            return response()->json(['error' => 'error'], 304);
        }
    }
}
