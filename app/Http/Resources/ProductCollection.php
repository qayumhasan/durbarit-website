<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
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
            'id'=>$this->id,
            'product_name'=>$this->product_name,
            'sku'=>$this->sku,
            'version'=>$this->version,
            'reqular_price'=>$this->reqular_price,
            'owner'=>$this->owner,
            'reqular_price_feture'=>$this->reqular_price_feture,
            'premium_price'=>$this->premium_price,
            'premium_price_feture'=>$this->premium_price_feture,
            'category_id'=>$this->category_id,
            'product_details'=>$this->product_details,
            'feature'=>explode(',',$this->feature),
            'release_log'=>$this->release_log,
            'compatible_browser'=>$this->compatible_browser,
            'software_version'=>$this->software_version,
            'demourl'=>$this->demourl,
            'resulation'=>$this->resulation,
            'framework'=>$this->framework,
            'meta_tag'=>explode(',',$this->meta_tag),
            'meta_description'=>$this->meta_description,
            'image'=>$this->image,
            'gallary_image'=>$this->gallary_image,
            'number_of_sale'=>$this->number_of_sale,
            'first_create'=>$this->first_create,
            'last_update'=>$this->last_update,
        ];
    }
}
