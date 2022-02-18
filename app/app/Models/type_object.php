<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_object extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ["title", "description"];

    public function cards()
    {
        return $this->hasMany(type_object_view::class);
        damp('200');
        //    return $this->hasMany(type_object_view::class, 'type_object_id', 'id');
    }

}
