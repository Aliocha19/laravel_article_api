<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

       return[
                $this->id,
                $this->title,
                $this->body
       ] ;
    }
     public function with($request)
    {
        return [
            'author_url' =>"sadi19.co.za",
            'Version' => '1.0.0'
        ];
    }
}
