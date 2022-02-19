<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vobject extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ["title","description", "model", "img", "team_title", "tobject_id"];


    public function brand()
    {
        return $this->belongsTo(tobject::class);
    }
}
