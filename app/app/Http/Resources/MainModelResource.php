<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MainModelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title_view' => $this->title_view,
            'title_type' => $this->title_type,
            'title_description' => $this->title_description,
            'object_img' => $this->object_img,
            'title_teams' => $this->title_teams,
            'title_company' => $this->title_company,
            'title_branch' => $this->title_branch,
            'title_status' => $this->title_status,
            'number_system' => $this->number_system,
            'number_individual' => $this->number_individual,
            'number_individual_bix' => $this->number_individual_bix,
            'number_parties' => $this->number_parties,
            'title_spawn' => $this->title_spawn,
            'code_product' => $this->code_product,
            'code_activation' => $this->code_activation,
            'number_Quantity' => $this->number_Quantity,
            'money_cost' => $this->money_cost,
            'money_sum' => $this->money_sum,
            'title_seller' => $this->title_seller,
            'service_organization' => $this->service_organization,
            'data_inventory' => $this->data_inventory,
            'warranty_do' => $this->warranty_do,
            'license_do' => $this->license_do,
            'id_order' => $this->id_order,
            'title_wrote' => $this->title_wrote,
            'qr_code' => $this->qr_code,
            'title_domain' => $this->title_domain,
            'system_name' => $this->system_name,
            'ip_address' => $this->ip_address,
            'MAC_address' => $this->MAC_address,
            'title_note' => $this->title_note,
            'dateBreakdown' => $this->dateBreakdown,
            'dateDispatch' => $this->dateDispatch,
            'dateReceipt' => $this->dateReceipt,
            'statusRepair' => $this->statusRepair,
            'noteRepair' => $this->noteRepair,
            'sum' => $this->sum,
            'servesOrganization' => $this->servesOrganization,
            'teamCreate' => $this->teamCreate,
            'teamSent' => $this->teamSent,
            'teamReceived' => $this->teamReceived,
            'repairPosition' => $this->repairPosition,
            'secretKey' => $this->secretKey,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
