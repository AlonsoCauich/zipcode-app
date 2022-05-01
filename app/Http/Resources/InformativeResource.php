<?php

namespace App\Http\Resources;

//use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class InformativeResource extends ResourceCollection
{
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'zip_code' => $this[0]['d_codigo'],
            'locality' => !empty($this[0]['d_ciudad']) ? mb_strtoupper($this[0]['d_ciudad'], 'UTF-8') : '',            
            'federal_entity' => [
                'key' => $this[0]['c_estado'],
                'name' => !empty($this[0]['d_estado']) ? mb_strtoupper($this[0]['d_estado'], 'UTF-8') : '',            
                'code' => null,
            ],
            'settlements' => $this->collection->map(function ($item) {
                return collect([
                    'key' => (int)$item->id_asenta_cpcons,
                    'name' => !empty($item->d_asenta) ? mb_strtoupper($item->d_asenta, 'UTF-8') : '',
                    'zone_type' => !empty($item->d_zona) ? mb_strtoupper($item->d_zona, 'UTF-8') : '',
                    'settlement_type' => collect([
                        'name' => !empty($item->d_tipo_asenta) ? $item->d_tipo_asenta : '',
                    ]),                    
                ]);
            }),
            'municipality' => [
                'key' => $this[0]['c_mnpio'],
                'name' => !empty($this[0]['D_mnpio']) ? mb_strtoupper($this[0]['D_mnpio'], 'UTF-8') : '',            
            ],
        ];
    }
   /*  public function authorize()
    {
        return false;
    } */
}
