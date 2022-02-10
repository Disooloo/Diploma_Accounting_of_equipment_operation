<?php

namespace App\Http\Livewire;

use App\Models\Oganizations;
use Livewire\Component;

class OrganizationsLive extends Component
{
    public $title, $description, $email, $phone, $site, $contact_person, $address, $coordinate, $note, $requisites, $img, $secected_id;
    public $updateMode = false;

    public function render()
    {

        $orgns = Oganizations::orderBy('id', 'desc')->paginate(15);
        return view('livewire.organizations-live', compact('orgns'));
    }

    public function remove($id)
    {
        $org = Oganizations::findOrFail($id);
        $org->delete();

    }

    private function resetInput()
    {
        $this->title = null;
        $this->description = null;
        $this->email = null;
        $this->phone = null;
        $this->site = null;
        $this->contact_person = null;
        $this->address = null;
        $this->coordinate = null;
        $this->note = null;
        $this->requisites = null;
        $this->img = null;

    }

    public function store()
    {
        $data = $this->validate([
            "title" => "required",
            "description" => "required",
            "email" => "required",
            "phone" => "required",
            "site" => "required",
            "contact_person" => "required",
            "address" => "required",
            "coordinate" => "required",
            "note" => "required",
            "requisites" => "required",
            "img" => "required",
        ]);


        Oganizations::create($data);
        $this->resetInput();

    }
    public function edit($id)
    {
        $org = Oganizations::findOrFail($id);

        $this->title = $org->title;
        $this->description = $org->description;
        $this->email = $org->email;
        $this->phone = $org->phone;
        $this->site = $org->site;
        $this->contact_person = $org->contact_person;
        $this->address = $org->address;
        $this->coordinate = $org->coordinate;
        $this->note = $org->note;
        $this->requisites = $org->requisites;
        $this->img = $org->img;

        $this->dispatchBrowserEvent('edit',[ 'id'=>$id ]);
    }

    public function update()
    {
        $data = $this->validate([
            "title" => "required",
            "description" => "required",
            "email" => "required",
            "phone" => "required",
            "site" => "required",
            "contact_person" => "required",
            "address" => "required",
            "coordinate" => "required",
            "note" => "required",
            "requisites" => "required",
            "img" => "required",
        ]);

        if ($this->secected_id){
            $org = Oganizations::find($this->secected_id);

            Oganizations::update($data);
            $this->resetInput();

        }
    }

}
