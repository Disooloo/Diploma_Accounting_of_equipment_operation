<?php

namespace App\Http\Livewire;

use App\Models\Kanban\Card;
use App\Models\Kanban\Group;
use App\Models\notification;
use App\Models\Team;
use Facade\Ignition\Tests\Support\Models\Car;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Kanban extends Component
{
    public $addGroupState = false;
    public $addCardState;
    public $inputClear = "";

    public $title, $FirstName, $LastName, $Patronymic, $Post, $Description, $Adress, $phone,
        $ServeseNumber, $Department, $Company, $Branch, $Education, $Skill, $email, $group_id, $color;


    protected $rules = [
        "title" => "required",

    ];

    public function addGroup()
    {
        $this->addGroupState = true;
    }

    public function addCard($group_id)
    {
        $this->addCardState = $group_id;
    }

    public function removeCard($id)
    {
        Team::destroy($id);
    }

    public function removeGroup($id)
    {
        Group::destroy($id);
    }

    public function sorting($order)
    {
        foreach ($order as $group) {
            Group::where(["id" => $group["value"]])->update(["sort" => $group['order']]);
        }
        if (isset($group["items"])) {
            foreach ($group["items"] as $items) {
                Team::where(["id" => $items["value"]])->update(["sort" => $items['order']]);
            }
        }
    }

    private function resetInput()
    {
        $this->title = null;
        $this->FirstName = null;
        $this->LastName = null;
        $this->Patronymic = null;
        $this->Post = null;
        $this->Description = null;
        $this->Adress = null;
        $this->phone = null;
        $this->ServeseNumber = null;
        $this->Department = null;
        $this->Company = null;
        $this->Branch = null;
        $this->Education = null;
        $this->Skill = null;
        $this->email = null;
        $this->group_id = null;
    }

    public function storeGroup()
    {
        $data = $this->validate();
        Group::create($data);
        $this->resetInput();

    }

    public function storeCard()
    {

        $data = $this->validate([
            "title" => "required",
            "FirstName" => "required",
            "LastName" => "required",
            "Patronymic" => "required",
            "Post" => "required",
            "Description" => "required",
            "Adress" => "required",
            "phone" => "required",
            "ServeseNumber" => "required",
            "Department" => "required",
            "Company" => "required",
            "Branch" => "required",
            "Education" => "required",
            "Skill" => "required",
            "email" => "required",
            "group_id" => "required",
        ]);
        $data1 = ([
            "title"  => "Добавление нвого пользователя",
            "Description"  => "пользователя"
        ]);

        $data["group->id"] = $this->addGroupState;
        Team::create($data);
        notification::create($data1);
        $this->resetInput();
    }

    public function render()
    {
        $groups = Group::orderBy("sort")->get();
        return view('livewire.kanban', compact("groups"));
    }
}
