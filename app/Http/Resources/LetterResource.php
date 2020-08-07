<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LetterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "no_surat" => $this->no_surat,
            "tanggal_kirim" => $this->tanggal_kirim,
            "pengirim" => $this->pengirim,
            "perihal" => $this->perihal

        ];
    }
}
