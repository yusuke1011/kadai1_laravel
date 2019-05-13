<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Mst_prefecture extends JsonResource
{

    public function toArray($request)
    {
        return [
            'prefecture_cd'=>$this->prefecture_cd,
            'prefecture_name'=>$this->prefecture_name,
            'insert_cd'=>$this->insert_cd,
            'insert_date'=>$this->insert_date
        ];
    }
}
