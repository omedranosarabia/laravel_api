<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostColection extends ResourceCollection
{
    public $collects = PostResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Platzi',
                'authors' => [
                    'OmedranoSarabia',
                    'Platzi',
                ],
            ],
            'type' => 'articles'
        ];
    }
}
