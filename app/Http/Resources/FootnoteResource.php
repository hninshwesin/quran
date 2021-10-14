<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FootnoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $arrayData = [
        //     'id' => $this->id,
        //     'heading' => $this->heading,
        //     'notes' => $this->notes,
        //     'files' => $this->files,
        // ];

        // return $arrayData;
        return parent::toArray($request);
    }
}
