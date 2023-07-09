<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
         return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            //'created_at' => $this->created_at,
            'created_at' => Carbon::parse($this->created_at)->format('d-m-Y H:i:s'),
            //'updated_at' => $this->updated_at,
            'updated_at' => Carbon::parse($this->update_at)->format('d-m-Y H:i:s'),
        ];
    }
}
