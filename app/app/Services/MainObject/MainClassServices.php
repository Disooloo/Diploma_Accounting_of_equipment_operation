<?php

namespace App\MainObject\Services;

use App\Http\Resources\MainModelResource;
use App\Models\ModelObject;

class MainClassServices
{
    public function getItems()
    {
        return MainModelResource::collection(ModelObject::all());
    }
}
