<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class deviceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name'=>$this->name,
            'descrption'=>$this->descrption,
            'parentConcept'=> $this->parentConcept,
            'parentConceptName' => $this->parentConceptName,
          
        ];
    }
}
