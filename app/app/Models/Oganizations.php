<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oganizations extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ["title","description","email", "phone", "site", "contact_person", "address", "coordinate", "note", "requisites", "img"];

}
