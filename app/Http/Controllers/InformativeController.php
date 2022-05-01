<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreInformativeRequest;
use App\Http\Resources\InformativeResource;
use App\Models\Informative;

class InformativeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param string $zip_code
     * @return \Illuminate\Http\Response
     */
    public function findCodex($zip_code)
    {
        $data = Informative::where('d_codigo', $zip_code)->get();   
        if ( count($data) == 0) {
            abort(404);
        }
        return new InformativeResource($data);
    }
}
