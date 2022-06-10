<?php

namespace App\Services;

use App\Http\Resources\MainModelResource;
use App\Models\ModelObject;

class MainObjectServices
{
    public function getItems()
    {
        return MainModelResource::collection(ModelObject::all());
    }
}
