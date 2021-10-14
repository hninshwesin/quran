<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TranslationFootnoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $arrayData = [
            'id' => $this->id,
            'shwe_id' => $this->shwe_id,
            'heading' => $this->heading,
            'notes' => $this->notes,
            'files' => $this->files,
        ];
    }
}
