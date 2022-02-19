<?php

namespace App\Http\Livewire;

use App\Models\Team;
use App\Models\tobject;
use App\Models\Type_object;
use App\Models\Type_object_view;
use App\Models\View_object;
use App\Models\vobject;
use Livewire\Component;

class TypeObjectLive extends Component
{
    public $title, $description, $selected_id;

    public $id_type_view, $view_objects_title, $model, $img, $tobject_id, $team_title, $CatId, $date_r, $viewDescription;

    public $createData = true;
    public $sView = true;
    public $editOn = true;


    public function render()
    {
        $t_obj = tobject::all();
        $t_obj_view = vobject::get();
        $t_obj_count = tobject::all()->count();
        $v_obj = View_object::all();
        $team = Team::all();

        $t_obj = tobject::get();
        $t_obj_view = vobject::get();


        return view('livewire.type-object-live', compact('t_obj', 'v_obj', 'team',
            't_obj_count', 't_obj_view'));
    }

    public function storeView()
    {
        $data = $this->validate([
            "tobject_id" => "required",
            "viewDescription" => "required",
            "model" => "required",
            "img" => "required",
            "team_title" => "required",
            "title" => "required",
        ]);

        vobject::create($data);
        $this->resetInput();
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
        $this->tonject_id = null;
        $this->viewDescription = null;
        $this->model = null;
        $this->img = null;
        $this->teamObj = null;
    }

    public function showView($id = 0)
    {
//        dd($id);
        $this->sView = true;
    }


    public $rrr = true;
    public $dsss = '';

    public $count = 0;
    public $date;

    public function increment()
    {
        $this->count++;
    }

    public function showVtype($id)
    {
        $brand = tobject::find($id);
        $date = $brand->products; // Не понимаеи функцию модели в render
        dd($date); // не получается вывести во view через forech
        $this->sView = false;
    }

    public function backMain()
    {
        $this->sView = true;
    }

    public function store()
    {
        $data = $this->validate([
            "title" => "required",
            "description" => "required",
        ]);

        tobject::create($data);
        $this->resetInput();
    }

    public function edit_type($id)
    {
        $t_obj = tobject::findOrFail($id);

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

            $t_obj = tobject::find($this->selected_id);

            $t_obj->update($data);

            $this->resetInput();
            $this->createData = true;
        }
    }

    public function removet($id)
    {
        $t_obj = tobject::findOrFail($id);
        $t_obj->delete();
    }

    public function editOn()
    {
        $this->editOn = true;
    }

    public function editoff()
    {
        $this->editOn = false;
    }
}
