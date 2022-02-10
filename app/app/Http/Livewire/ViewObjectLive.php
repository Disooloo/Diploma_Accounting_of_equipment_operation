<?php

namespace App\Http\Livewire;

use App\Models\View_object;
use Livewire\Component;

class ViewObjectLive extends Component
{
    public $title, $description, $selected_id;

    public $createData = true;

    public function render()
    {
        $v_obj = View_object::orderBy('id', 'desc')->paginate(15);

        return view('livewire.view-object-live', compact('v_obj'));
    }

    private function resetInput()
    {
        $this->title = null;
        $this->description = null;

    }

    public function store()
    {
        $data = $this->validate([
            "title" => "required",
            "description" => "required",
        ]);

        View_object::create($data);
        $this->resetInput();

    }

    public function edit($id)
    {
        $v_obj = View_object::findOrFail($id);

        $this->selected_id = $id;
        $this->title = $v_obj->title;
        $this->description = $v_obj->description;

        $this->createData = false;
    }

    public function update()
    {
        $data = $this->validate([
            "selected_id" => "required",
            "title" => "required",
            "description" => "required",
        ]);

        if ($this->selected_id) {

            $v_obj = View_object::find($this->selected_id);

            $v_obj->update($data);

            $this->resetInput();
            $this->createData = true;
        }
    }

    public function backAdd()
    {
        $this->createData = true;
        $this->resetInput();
    }

    public function remove($id)
    {
        $v_obj = View_object::findOrFail($id);
        $v_obj->delete();
    }
}
