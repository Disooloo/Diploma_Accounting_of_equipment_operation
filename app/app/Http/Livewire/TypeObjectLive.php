<?php

namespace App\Http\Livewire;

use App\Models\Team;
use App\Models\Type_object;
use App\Models\Type_object_view;
use App\Models\View_object;
use Livewire\Component;

class TypeObjectLive extends Component
{
    public $title, $description, $selected_id;

    public $id_type_view, $view_objects_title, $model, $img, $team_title;

    public $createData = true;
    public $sView = false;

    public function render()
    {
        $t_obj = type_object::orderBy('id', 'desc')->get();
        $t_obj_view = type_object_view::all();
        $t_obj_count = type_object::all()->count();
        $v_obj = View_object::all();
        $team = Team::all();



        return view('livewire.type-object-live', compact('t_obj', 'v_obj', 'team',
            't_obj_count', 't_obj_view'));
    }

    public function add_back()
    {
        $this->createData = true;
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->title = null;
        $this->description = null;

    }

    public function showView($id = 0)
    {
//        dd($id);
        $this->sView = true;
    }

    public function backMain()
    {
        $this->sView = false;
    }

    public function store()
    {
        $data = $this->validate([
            "title" => "required",
            "description" => "required",
        ]);

        Type_object::create($data);
        $this->resetInput();
    }

    public function edit_type($id)
    {
        $t_obj = Type_object::findOrFail($id);

        $this->selected_id = $id;
        $this->title = $t_obj->title;
        $this->description = $t_obj->description;

        $this->createData = false;
    }

    public function updatet()
    {
        $data = $this->validate([
            "selected_id" => "required",
            "title" => "required",
            "description" => "required",
        ]);

        if ($this->selected_id) {

            $t_obj = Type_object::find($this->selected_id);

            $t_obj->update($data);

            $this->resetInput();
            $this->createData = true;
        }
    }

    public function removet($id)
    {
        $t_obj = Type_object::findOrFail($id);
        $t_obj->delete();
    }
}
