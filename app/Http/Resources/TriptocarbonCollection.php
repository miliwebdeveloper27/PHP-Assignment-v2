<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TriptocarbonCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        Cache::store('redis')->put('carbonFootprint', 'footprint', 864000); 
        
        return [
            'carbonFootprint' => $this->carbonFootprint,
        ];


    }
}
