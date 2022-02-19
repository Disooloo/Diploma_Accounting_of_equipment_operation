<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tobject extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ["title","description"];

    public function products()
    {
        return $this->hasMany(vobject::class);
    }

}
