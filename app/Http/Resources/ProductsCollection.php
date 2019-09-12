<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($element){
                return [
                    'id' => $element->id,
                    'name' => $element->name,
                    'price' => $element->price,
                    'humanPrice' => '$'.($element->price/100),
                    'description' => $element->description,
                    'image' => $element->image_url
                ];
            })
        ];
        
    }
}
