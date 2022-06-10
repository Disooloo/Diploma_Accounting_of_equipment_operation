<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'dateBreakdown','dateDispatch','dateReceipt','status','statusRepair','description',
        'note','sum','servesOrganization','teamCreate','teamSent','teamReceived','viewObject','typeObject',
        'modelObject','companyObject','branchObject','spawnObject','inventoryNumberObject'
    ];
}
