<?php

namespace App\Http\Resources;

use App\Colleague;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ColleagueCollection extends ResourceCollection
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
            'data'  => ColleagueItem::collection($this->collection)
        ];
    }
}
