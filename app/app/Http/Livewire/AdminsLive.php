<?php

namespace App\Http\Livewire;

use App\Models\Admins;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminsLive extends Component
{

    public $name, $email,$roles, $dop1_boolean, $is_admin, $description, $last_entry, $img, $role, $block_login, $selected_id;
    public $term;
    public $showEdit = false;
    public $openSearch = false;

    use withPagination;

    public function render()
    {
        $term = '%' . $this->term . '%';
        $admins = User::where("name", "LIKE", $term)->latest()->paginate(10);

        return view('livewire.admins-live', compact('admins'));
    }

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->description = null;
        $this->last_entry = null;
        $this->img = null;
        $this->role = null;
        $this->block_login = null;
    }

    public function add_back()
    {
        $this->showEdit = false;
    }

    public function edit($id)
    {

        $admin = User::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $admin->name;
        $this->email = $admin->email;
        $this->is_admin = $admin->is_admin;
        $this->img = $admin->img;
        $this->dop1_boolean = $admin->dop1_boolean;

        $this->showEdit = true;
        $this->openSearch = false;
    }

    public function update()
    {

        $data = $this->validate([
            "name" => "required",
            "email" => "required",
            "img" => "required",
            "is_admin" => "required",
            "dop1_boolean" => "required",
        ]);

        if ($this->selected_id) {

            $admin = User::find($this->selected_id);

            $admin->update($data);
            $this->showEdit = false;
        }

    }

    public function remove($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();
    }

    public function btnOpenSearch()
    {
        $this->openSearch = true;
    }
    public function btnCloseSearch()
    {
        $this->openSearch = false;
    }
}
