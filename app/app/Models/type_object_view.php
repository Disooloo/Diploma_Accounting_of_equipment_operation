<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_object_view extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ["type_object_id", "title", "description", "model",  "img", "team_title"];


    public function type_object()
    {
        return $this->belongsTo(type_object::class);
    }
}
