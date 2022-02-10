<?php

namespace App\Models;

use App\Models\Kanban\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ["group_id", "title", "sort", "FirstName",  "LastName", "Patronymic", "Post", "Description", "Adress", "phone", "ServeseNumber", "Department", "Company", "Branch", "Education", "Skill", "email"];




}
