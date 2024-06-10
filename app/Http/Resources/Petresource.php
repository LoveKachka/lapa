<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Petresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
//    public function toArray(Request $request): array
//
//        {
//            return [
//                "id" => $this->id,
//                "name" => $this->name,
//
//            ];
//        }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'view' => $this->view,
            'sex' => $this->sex,
            'age' => $this->age,
            'weight' => $this->weight

        ];
    }

}
